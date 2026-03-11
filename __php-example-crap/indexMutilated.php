<?php

function debug($obj)
{
    echo "<pre>";
    echo var_dump($obj);
    echo "</pre>";
    die();
}

// // WRITE CODE HERE.

// echo "Hey dickhead, the code dies after this";
// die();

// function wordCount($str)
// {
//     $words = [];
//     $currWord = "";

//     for ($i = 0; $i < strlen($str) + 1; $i++) {
//         $ch = $str[$i];
//         if (ctype_alnum($ch)) {
//             $currWord = "$currWord" . strtolower($ch);
//         } else {
//             if ($currWord) {
//                 if (!$words[$currWord]) {
//                     $words[$currWord] = 1;
//                 } else {
//                     $words[$currWord] += 1;
//                 }

//                 $currWord = "";
//             }
//         }
//     }

//     return $words;
// }

// function groupByRole($users)
// {
//     $groups = [];
//     foreach ($users as $user) {
//         $groups[$user["role"]][] = $user["name"];
//     }
//     return $groups;
// }

// $users = [
//     ["name" => "Alice", "role" => "admin"],
//     ["name" => "Bob", "role" => "user"],
//     ["name" => "Charlie", "role" => "admin"],
// ];

// class Product
// {
//     private $name;
//     private $price;

//     public function __construct($name, $price)
//     {
//         $this->name = $name;
//         $this->price = $price;
//     }

//     public function applyDiscount($percentage)
//     {
//         $this->price = $this->price - ($this->price * $percentage) / 100;
//     }

//     public function getPrice()
//     {
//         return $this->price;
//     }
// }

// echo var_dump(wordCount("Hello world") === ["hello" => 1, "world" => 1]);
// echo var_dump(wordCount("Hello world") === ["hello" => 1, "world" => 1]);
// echo var_dump(
//     wordCount("Hello, hello world!") === ["hello" => 2, "world" => 1],
// );
// echo var_dump(wordCount("") === []);
// echo var_dump(wordCount("   a   b a ") === ["a" => 2, "b" => 1]);

// $users = [
//     ["name" => "Alice", "role" => "admin"],
//     ["name" => "Bob", "role" => "user"],
//     ["name" => "Charlie", "role" => "admin"],
// ];
// echo var_dump(
//     groupByRole($users) === [
//         "admin" => ["Alice", "Charlie"],
//         "user" => ["Bob"],
//     ],
// );

// echo var_dump(groupByRole([]) === []);

// $product = new Product("Book", 100);
// $product->applyDiscount(20);
// echo var_dump($product->getPrice() === 80);

// $product->applyDiscount(10);
// echo var_dump($product->getPrice() === 72);
// die();

$dsn = "mysql:host=localhost:3306;dbname=phptest;charset=utf8";
$pdo = new PDO($dsn, "ebuser", "pw");
$stmt = $pdo->prepare("SELECT title,description,author FROM Post;");
$stmt->execute();
$allPosts = $stmt->fetchAll();

for ($i = 0; $i < count($allPosts); $i++) {
    echo "Title: " . $allPosts[$i]["title"] . "<br>";
    echo "Description: " . $allPosts[$i]["description"] . "<br>";
    echo "Author: " . $allPosts[$i]["author"] . "<hr>";
}

// debug($allPosts);

require "router.php";

// class Post
// {
//     public $title;
//     public $description;
//     public $author;
// }
// "SELECT title,description,author FROM Post;";
