<?php
include '../../Log_in_system/db.php';

// Use the blog filename (without extension) as the blog ID
$blogId = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

// CSRF protection - generate token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$successMessage = '';
$errorMessage = '';
$editingId = null;

// Handle new comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] === 'new_comment' && isset($_SESSION['user_id'])) {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errorMessage = "Invalid CSRF token.";
    } else {
        $comment = trim($_POST['comment']);
        if (!empty($comment) && strlen($comment) <= 1000) {
            $stmt = $pdo->prepare("INSERT INTO comments (blog_id, user_id, username, comment) VALUES (?, ?, ?, ?)");
            if ($stmt->execute([$blogId, $_SESSION['user_id'], $_SESSION['username'], $comment])) {
                $successMessage = 'Your comment has been posted.';
            } else {
                $errorMessage = 'Failed to post comment. Please try again.';
            }
        } else {
            $errorMessage = 'Comment must not be empty and should be under 1000 characters.';
        }
    }
}

// Handle edit request (button click)
if (isset($_GET['edit']) && is_numeric($_GET['edit']) && isset($_SESSION['user_id'])) {
    $editingId = (int)$_GET['edit'];
    $stmt = $pdo->prepare("SELECT comment FROM comments WHERE id = ? AND user_id = ?");
    $stmt->execute([$editingId, $_SESSION['user_id']]);
    $editingComment = $stmt->fetchColumn();
}


// Handle update comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] === 'edit_comment' && isset($_SESSION['user_id'])) {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errorMessage = "Invalid CSRF token.";
    } else {
        $comment = trim($_POST['comment']);
        $commentId = (int)$_POST['comment_id'];
        if (!empty($comment) && strlen($comment) <= 1000) {
            $stmt = $pdo->prepare("UPDATE comments SET comment = ? WHERE id = ? AND user_id = ?");
            if ($stmt->execute([$comment, $commentId, $_SESSION['user_id']])) {
                $successMessage = 'Your comment has been updated.';
                $editingId = null;
            } else {
                $errorMessage = 'Failed to update comment.';
            }
        } else {
            $errorMessage = 'Edited comment must not be empty and under 1000 characters.';
        }
    }
}

// Fetch all comments
$stmt = $pdo->prepare("SELECT id, user_id, username, comment, created_at FROM comments WHERE blog_id = ? ORDER BY created_at DESC");
$stmt->execute([$blogId]);
$allComments = $stmt->fetchAll();

// Separate user's and others' comments
$userComments = [];
$otherComments = [];

foreach ($allComments as $row) {
    if (isset($_SESSION['user_id']) && $row['user_id'] == $_SESSION['user_id']) {
        $userComments[] = $row;
    } else {
        $otherComments[] = $row;
    }
}

?>

<div class="container mt-5">
  <h5 class="text-light mb-4"><?= count($allComments) ?> Comments</h5>

  <!-- Feedback messages -->
  <?php if (!empty($successMessage)): ?>
    <div class="alert alert-success"><?= htmlspecialchars($successMessage) ?></div>
  <?php elseif (!empty($errorMessage)): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($errorMessage) ?></div>
  <?php endif; ?>

  <!-- Comment Form -->
  <?php if (isset($_SESSION['user_id'])): ?>
    <?php if ($editingId && isset($editingComment)): ?>
      <!-- Edit Comment Form -->
       <div id="commentbox"></div>
      <form method="POST" class="mb-4">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="hidden" name="comment_id" value="<?= $editingId ?>">
        <input type="hidden" name="action" value="edit_comment">
        <div class="mb-3"  >
          <textarea name="comment" class="form-control" rows="3" maxlength="1000" required><?= htmlspecialchars($editingComment) ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update Comment</button>
        <a href="<?= basename($_SERVER['PHP_SELF']) ?>" class="btn btn-secondary">Cancel</a>
      </form>
    <?php else: ?>
      <!-- New Comment Form -->
      <form method="POST" class="mb-4">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="hidden" name="action" value="new_comment">
        <div class="mb-3">
          <textarea name="comment" class="form-control" rows="3" maxlength="1000" placeholder="Write a comment..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
      </form>
    <?php endif; ?>
  <?php else: ?>
    <div class="alert alert-secondary">You must <a href="Log_in_system/log_in_data.php">log in</a> to post a comment.</div>
  <?php endif; ?>

  <!-- Other Users' Comments -->
  <?php foreach ($otherComments as $row): ?>
    <div class="container my-5" id="comment">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <strong>@<?= htmlspecialchars($row['username']) ?> <small class="text-secondary fw-light"><?= date('F j, Y, g:i a', strtotime($row['created_at'])) ?></small></strong>
        <p class="mb-1"><?= nl2br(htmlspecialchars($row['comment'])) ?></p>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Logged-in User's Comments -->
  <?php foreach ($userComments as $row): ?>
    <div class="container my-5" id="comment">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <strong>@<?= htmlspecialchars($row['username']) ?> (You) <small class="text-secondary fw-light"><?= date('F j, Y, g:i a', strtotime($row['created_at'])) ?></small></strong>
        <p class="mb-1"><?= nl2br(htmlspecialchars($row['comment'])) ?></p>
        <div class="mt-2">
          <a href="?edit=<?= $row['id'] ?>#commentbox" class="btn btn-sm btn-dark">Edit</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
