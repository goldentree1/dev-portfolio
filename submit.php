<?php

header("Content-Type: application/json");

// POST-only
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit();
}

// get fields
$required = ["name", "email", "message"];
$data = [];
$errs = [];
foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === "") {
        $errs[] = "Missing or empty field: $field";
        continue;
    }

    $data[$field] = test_input($_POST[$field]);
}

// response
if (empty($errs)) {
    http_response_code(200);
    echo json_encode(["message" => "ok"]);
} else {
    http_response_code(400);
    echo json_encode(["error" => $errs]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
