<?php
include 'Log_in_system/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $data = json_decode(file_get_contents('php://input'), true);
    $commentId = (int)$data['comment_id'];
    $voteType = $data['vote_type'] === 'like' ? 'like' : 'dislike';
    $userId = $_SESSION['user_id'];

    // Remove existing vote (if any)
    $pdo->prepare("DELETE FROM comment_votes WHERE comment_id = ? AND user_id = ?")
        ->execute([$commentId, $userId]);

    // Add the new vote
    $stmt = $pdo->prepare("INSERT INTO comment_votes (comment_id, user_id, vote_type) VALUES (?, ?, ?)");
    $stmt->execute([$commentId, $userId, $voteType]);

    // Get updated counts
    $likes = $pdo->prepare("SELECT COUNT(*) FROM comment_votes WHERE comment_id = ? AND vote_type = 'like'");
    $likes->execute([$commentId]);
    $likeCount = $likes->fetchColumn();

    $dislikes = $pdo->prepare("SELECT COUNT(*) FROM comment_votes WHERE comment_id = ? AND vote_type = 'dislike'");
    $dislikes->execute([$commentId]);
    $dislikeCount = $dislikes->fetchColumn();

    echo json_encode(['likes' => $likeCount, 'dislikes' => $dislikeCount]);
}
?>
