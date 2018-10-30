<?php require __DIR__.'/head.php';
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

//Displays comments
if(isset($_POST ['name'], $_POST['message'], $_POST['postId'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$postId = (int)$_POST['postId'];
	$newComment = ['name' => $name, 'message' => $message, 'postId' => $postId];
	array_push($comments, $newComment);
}
//Sort news items
usort($news, 'sortByDate');

require __DIR__.'/post.php';
?>
</body>
</html>
