<?php
declare(strict_types=1);
require __DIR__.'/head.php';

$news = array_filter($news, 'findArticlesById');

// if(isset($_POST ['name'], $_POST['message'], $_POST['author'])) {
// 	$name = $_POST['name'];
// 	$message = $_POST['message'];
// 	$author = (int)$_POST['author'];
// 	$newComment = ['name' => $name, 'message' => $message, 'author' => $author];
// 	array_push($comments, $newComment);
// }
?>


<main class="mt-4">
	<div class="container">
		<div class="row mainContainer">
			<?php usort($news,'sortByDate');?>
			<?php foreach ($news as $post): ?>
				<div class="col-10 mainContainer">
					<div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
						<div class="card-header">
						<?php foreach ($authors as $author): ?>
							<?php if ($author['id'] === $post['author']): ?>
								<h4>Author: <a id="link" href="authorPosts.php?id=<?php echo $author['id'];?>">
									<?php echo $author['name'] ?></h4>
								</a>
							<?php endif; endforeach; ?>
						</div>
						<div class="card-body">
							<img class="img" src="<?php echo $post['picture'] ?>">
							<h4 class="card-title"><?php echo $post['title'] ?></h4>
							<p class="card-text"><?php echo $post['content'] ?></p>
							<p>Written: <?php echo $post['date'] ?></p>
							<button type="button" class="btn btn-secondary">Likes: <?php echo $post['likeCounter']?></button>

						</div><!--card-body-->
					</div><!--card text-white bg-primary mb-3-->
				</div><!--col-10 mainContainer-->
			<?php endforeach; ?>
		</div><!--row mainContainer-->
	</div><!--container>-->
</main>
</body>
</html>
