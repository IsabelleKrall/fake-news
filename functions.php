<?php
declare(strict_types=1);

/**
 * [sortByDate description]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return int      [description]
 */
function sortByDate(array $a, array $b): int {
 return strcmp($a['date'], $b['date']);
}

/**
 * [findArticlesById description]
 * @param  array $news [description]
 * @return bool        [description]
 */
function findArticlesById(array $news): bool {
	$URLAuthorId = $_GET['id'];
	return $news['author'] == $URLAuthorId;
}
