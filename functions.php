<?php
declare(strict_types=1);

//sorts articles by date, most recent on top:
/**
 * [sortByDate description]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return int      [description]
 */
function sortByDate(array $a, array $b): int {
 return strcmp($a['date'], $b['date']);
}


//filters the $news array on author['id'], returns the articles from author['id']:
/**
 * [findArticlesById description]
 * @param  array $news [description]
 * @return bool        [description]
 */
function findArticlesById(array $news): bool {
	$URLAuthorId = $_GET['id'];
	return $news['author'] == $URLAuthorId;
}
