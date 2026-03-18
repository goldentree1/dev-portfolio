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
    // --- SEND MAIL ---
    $to = "eb";
    $subject = "New contact form submission";

    $body =
        "Name: {$data["name"]}\n" .
        "Email: {$data["email"]}\n\n" .
        "Message:\n{$data["message"]}\n";

    $headers =
        "From: ebwebsite@localhost\r\n" . "Reply-To: {$data["email"]}\r\n";

    $mailSent = mail($to, $subject, $body, $headers);

    if ($mailSent) {
        http_response_code(200);
        echo json_encode(["message" => "ok"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Failed to send email"]);
    }
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
