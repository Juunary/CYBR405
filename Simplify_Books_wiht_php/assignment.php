<?php

$results = file_get_contents('https://google.com/books.json');
$books = json_decode($results);

$simple_books = [];
$books_length = count($books->response->books);

// Iterate over all the books to extract title, id, author, and cover image
for ($i = 0; $i < $books_length; $i++) {
    $book = $books->response->books[$i];
    $simple_books[] = [
        'title' => $book->title,
        'id' => $book->id,
        'author' => $book->author,
        'cover_image' => $book->cover_image
    ];
}

print_r($simple_books);

?>