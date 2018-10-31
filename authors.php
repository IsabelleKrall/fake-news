<?php
declare(strict_types=1);
require __DIR__.'/head.php';
require __DIR__.'/data.php';

?>

<div class="jumbotron jumbotronBox">
	<h1 class="display-3">Authors</h1>
	<p class="lead">This is our wonderful fictional authors.</p>
	<hr class="my-4">
		<div class="row">
			<?php foreach ($authors as $author) : ?>
			<a class="col-3 m-3 btn btn-secondary btn-lg" href="authorPosts.php?id=<?= $author['id']; ?>">
				<?= $author['name'] ?></a>
			<?php endforeach ; ?>
		</div>
</div>
