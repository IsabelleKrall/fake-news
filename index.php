<?php require __DIR__.'/head.php';
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

if(isset($_POST ['name'], $_POST['message'], $_POST['author'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$author = (int)$_POST['author'];
	$newComment = ['name' => $name, 'message' => $message, 'author' => $author];
	array_push($comments, $newComment);
}
	//Sort news items
	usort($news, 'sortByDate');

	require __DIR__.'/post.php';
?>
</body>
</html>
