<main class="mt-4">
	<div class="container">
		<div class="row mainContainer">
			<?php foreach ($news as $post): ?>
				<div class="col-10 mainContainer">
					<div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
						<div class="card-header">
							<?php foreach ($authors as $author): ?>
								<?php if ($author['id'] === $post['author']): ?>
									<h4>Author: <a id="link" href="authorPosts.php?id=<?php echo $author['id'];?>">
										<?php echo $author['name'] ?></h4>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>

						<div class="card-body">
							<img class="img" src="<?php echo $post['picture'] ?>">
							<h4 class="card-title"><?php echo $post['title'] ?></h4>
							<p class="card-text"><?php echo $post['content'] ?></p>
							<p>Written: <?php echo $post['date'] ?></p>
							<button type="button" class="btn btn-secondary">Likes: <?php echo $post['likeCounter']?></button></br></br>


							<div class="card-header">
							<h4 class="card-title">Comments</h4>
						<?php foreach ($comments as $comment): ?>
							<?php if ($post['id'] === $comment['postId']): ?>

								<b><?php echo $comment['name'] ?>:</b></br>
								<h6><?php echo $comment['message'] ?></h6></br>
							<?php endif; ?>
						<?php endforeach ?>

						<!--commentsBox-->
						<div class="commentRow">
							<form class="col-lg-6 offset-lg-3" action="index.php" method="post">
								<hr>
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control">
								</div><!-- /form-group -->

								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" id="message" class="form-control"></textarea>
								</div><!-- /form-group -->
								<input type="hidden" name="author" id="author" value="<?php echo $post['author']?>">
								<button type="submit" class="btn btn-primary">Add comment</button>
							</form><!-- /col-lg-6 -->
						</div><!-- /commentRow -->
						</div>
							</div><!--card-body-->
					</div><!--"card text-white bg-primary mb-3"-->
				</div><!--"col-10">-->
			<?php endforeach; ?>
		</div><!--commentRow-->


	</div><!--<div class="container">-->
	</main>
