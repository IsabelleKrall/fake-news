<?php
declare(strict_types=1);
require __DIR__.'/head.php';
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

$news = array_filter($news, 'findArticlesById');

//Sort news items
usort($news, 'sortByDate');

require __DIR__.'/post.php';
?>
</body>
</html>
