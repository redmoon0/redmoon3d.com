<?php
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
$prompt = $input["prompt"] ?? "";

$api_key = "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";
$model = "deepseek/deepseek-r1-0528-qwen3-8b:free";

$data = [
    "model" => $model,
    "messages" => [
        ["role" => "system", "content" => "You are a helpful assistant. Only respond with Python code that can be used in Blender. Do not include markdown formatting like ```python."],
        ["role" => "user", "content" => $prompt]
    ]
];

$options = [
    "http" => [
        "header"  => [
            "Content-Type: application/json",
            "Authorization: Bearer $api_key"
        ],
        "method"  => "POST",
        "content" => json_encode($data),
        "timeout" => 60
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents("https://openrouter.ai/api/v1/chat/completions", false, $context);

if ($result === FALSE) {
    echo json_encode(["error" => "AI request failed."]);
    exit;
}

$response = json_decode($result, true);
$code = $response["choices"][0]["message"]["content"] ?? "";

$code = preg_replace("/```[\w]*\n?/", "", $code);
$code = str_replace("```", "", $code);
$code = trim($code);

echo json_encode(["code" => $code]);
