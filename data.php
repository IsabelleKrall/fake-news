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
    'content' => file_get_contents('content/content1.txt'),
    'picture' => 'pictures/1.jpg',
	  'author' => 1,
    'date' => '2018-08-19',
    'likeCounter' => 6,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content/content2.txt'),
    'picture' => 'pictures/2.jpg',
    'author' => 2,
    'date' => '2018-08-18',
    'likeCounter' => 3,
  ],
  [
    'title'=> 'Revenge is about you making yourself feel better',
    'content' => file_get_contents('content/content3.txt'),
    'picture' => 'pictures/3.jpg',
    'author' => 3,
    'date' => '2018-08-17',
    'likeCounter' => 12,
  ],
  [
    'title'=> 'This is my city',
    'content' => file_get_contents('content/content4.txt'),
    'picture' => 'pictures/4.jpg',
    'author' => 4,
    'date' => '2018-08-16',
    'likeCounter' => 20,
  ],
  [
	 'title'=> 'Lorem',
	 'content' => file_get_contents('content/content5.txt'),
	 'picture' => 'pictures/5.jpg',
	 'author' => 5,
	 'date' => '2018-08-15',
	 'likeCounter' => 9,
  ],
  [
    'title'=> 'This is Bruce',
    'content' => file_get_contents('content/content1_1.txt'),
    'picture' => 'pictures/1.jpg',
	 'author' => 1,
    'date' => '2018-08-15',
    'likeCounter' => 6,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content/content2_1.txt'),
    'picture' => 'pictures/2.jpg',
    'author' => 2,
    'date' => '2018-08-14',
    'likeCounter' => 3,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content/content3_1.txt'),
    'picture' => 'pictures/3.jpg',
    'author' => 3,
    'date' => '2018-08-13',
    'likeCounter' => 12,
  ],
  [
    'title'=> 'Lorem',
    'content' => file_get_contents('content/content4_1.txt'),
    'picture' => 'pictures/4.jpg',
    'author' => 4,
    'date' => '2018-08-12',
    'likeCounter' => 20,
  ],
  [
	 'title'=> 'Lorem',
	 'content' => file_get_contents('content/content5_1.txt'),
	 'picture' => 'pictures/5.jpg',
	 'author' => 5,
	 'date' => '2018-08-11',
	 'likeCounter' => 9,
  ],
];

//test: add comments field below
$comments = [
    ['name' => 'Andrew Cunanan', 'message' => 'My father. My father. He\'s a liar. My father\'s a thief.', 'author' => 1],
    ['name' => 'Modesto Cunanan', 'message' => 'Don\'t believe a word they say.', 'author' => 2],
    ['name' => 'Gianni Versace', 'message' => 'Success only comes with hard work.', 'author' => 3],
	 ['name' => 'Marco Polo', 'message' => 'Great', 'author' => 4],
	 ['name' => 'Gabriel', 'message' => 'BAD!', 'author' => 5],
	 ['name' => 'King Arthur', 'message' => 'Good!', 'author' => 5],
];
