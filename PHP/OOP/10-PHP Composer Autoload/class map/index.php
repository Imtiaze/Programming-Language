<?php 

require_once 'app/bootstrap.php';



$user = new User('imtiaze', '123456');

echo $user->getUsername();

$post = new Post('imtiaze', '123456');

echo $post->getTitle();

$comment = new Comment('<h1>Hello</h1>');
echo $comment->getComment();