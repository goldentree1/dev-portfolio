<?php

header("Content-Type: application/json");

// (error) POST-only
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit();
}

// (error) got to have a valid recipient email (local)
$to = getenv("CONTACT_EMAIL");
if ($to === false || trim($to) === "") {
    http_response_code(500);
    echo json_encode([
        "error" => "Server misconfiguration",
    ]);
    exit();
}

// get + validate fields
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

// (error) fields were wrong
if (!empty($errs)) {
    http_response_code(400);
    echo json_encode(["error" => ucFirst(implode(", ", $errs))]);
    exit();
}

$subject = "New contact {$data["email"]}";
$body =
    "Name: {$data["name"]}\n" .
    "Email: {$data["email"]}\n\n" .
    "Message:\n{$data["message"]}\n";

$headers = "From: webform@localhost\r\n" . "Reply-To: {$data["email"]}\r\n";

$mailSent = mail($to, $subject, $body, $headers);

if ($mailSent) {
    http_response_code(200);
    echo json_encode(["message" => "ok"]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Server was unable to send email"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
