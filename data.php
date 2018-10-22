<?php
declare(strict_types=1);
require __DIR__.'/functions.php';

$authors = [
	['id' => 1,
	 'name' => 'Isabelle Krall',
 	],
	['id' => 2,
	 'name' => 'Silvia Bernadotte',
 	],
	['id' => 3,
	 'name' => 'Agneta Fältskog',
	],
	['id' => 4,
	 'name' => 'Benny Andersson',
	],
	['id' => 5,
	 'name' => 'Gustav Carlsson',
	],
];




$news = [
  [
    'title'=> 'This is Bruce',
    'content' => file_get_contents('content1.txt'),
    'picture' => 'pictures/1.jpeg',
	 	'author' => 1,
    'publishedDate' => date("F j, Y, g:i a"),
    'likeCounter' => 6,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content2.txt'),
    'picture' => 'img/02.png',
    'author' => 2,
    'publishedDate' => date("F j, Y, g:i a"),
    'likeCounter' => 3,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content3.txt'),
    'picture' => 'img/03.png',
    'author' => 3,
    'publishedDate' => date("F j, Y, g:i a"),
    'likeCounter' => 12,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content4.txt'),
    'picture' => 'img/04.png',
    'author' => 4,
    'publishedDate' => date("F j, Y, g:i a"),
    'likeCounter' => 20,
  ],
  [
	 'title'=> 'Lorem',
	 'content' => file_get_contents('content5.txt'),
	 'picture' => 'img/05.png',
	 'author' => 5,
	 'publishedDate' => date("F j, Y, g:i a"),
	 'likeCounter' => 9,
  ],
];
