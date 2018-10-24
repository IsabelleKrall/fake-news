<?php
declare(strict_types=1);
require __DIR__.'/data.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <link rel="stylesheet" href="CSS/bootswatch.css">
		   <link rel="stylesheet" href="CSS/style.css">
		  <title></title>
    </head>
    <body>
		 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Fake News</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	 <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
	 <ul class="navbar-nav mr-auto">
	   <li class="nav-item active">
		  <a class="nav-link" href="#">Newsfeed <span class="sr-only">(current)</span></a>
	   </li>
	   <li class="nav-item">
		  <a class="nav-link" href="#">Authors</a>
	  </li>
	   <li class="nav-item">
		  <a class="nav-link" href="#">About</a>
	   </li>
	 </ul>
  </div>
</nav>

	<main class="mt-4">
		<div class="container">
			<div class="row">
				<?php foreach ($news as $post): ?>
					<div class="col-10">
						<div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
						  <div class="card-header">
							  <?php foreach ($authors as $author): ?>
								<?php if ($author['id'] === $post['author']): ?>
								<h4>Author: <?php echo $author['name'] ?></h4>
								<?php endif; ?>
								<?php endforeach; ?>
							</div>

						  <div class="card-body">


							 <img class="img" src="<?php echo $post['picture'] ?>">
							 <h4 class="card-title"><?php echo $post['title'] ?></h4>
							 <p class="card-text"><?php echo $post['content'] ?></p>
							 <p>Written: <?php echo $post['publishedDate'] ?></p>

						  </div>
					  </div>

				  </div><!--<div class="col-6">-->

					  <?php endforeach; ?>

			</div>
		</div>
	</main>

    </body>
</html>
