<?php

namespace App\Http\Controllers;

class PostController {
    public function index() {
    $posts = [
    ["title" => "First Post"],
    ["title" => "Second Post"],
    ["title" => "Third Post"],
    ["title" => "Fourt Post"],
    ["title" => "Other Post"],
];
$ejemplo = [];
return view('blog', [
    'posts' => $posts,
    'ejemplo' => $ejemplo
    ]);
 }
}