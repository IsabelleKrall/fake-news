<?php
declare(strict_types=1);

$authors = [
	['id' => 1,
	 'name' => 'Will Ferrell',
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
	 'name' => 'Scarlett Johansson',
	],
];

$news = [
  [
	 'id' => 10,
    'title'=> 'This is Bruce',
    'content' => file_get_contents('content/content1.txt'),
    'picture' => 'pictures/11.jpg',
	  'author' => 1,
    'date' => '2018-08-19',
    'likeCounter' => 6,
  ],
  [
	 'id' => 9,
    'title'=> 'And why do we fall?',
    'content' => file_get_contents('content/content2.txt'),
    'picture' => 'pictures/2.jpg',
    'author' => 2,
    'date' => '2018-08-18',
    'likeCounter' => 3,
  ],
  [
	 'id' => 8,
    'title'=> 'Revenge is about you making yourself feel better',
    'content' => file_get_contents('content/content3.txt'),
    'picture' => 'pictures/3.jpg',
    'author' => 3,
    'date' => '2018-08-17',
    'likeCounter' => 12,
  ],
  [
	 'id' => 7,
    'title'=> 'This is my city',
    'content' => file_get_contents('content/content4.txt'),
    'picture' => 'pictures/4.jpg',
    'author' => 4,
    'date' => '2018-08-16',
    'likeCounter' => 20,
  ],
  [
	 'id' => 6,
	 'title'=> 'Things always get worse before they get better!',
	 'content' => file_get_contents('content/content5.txt'),
	 'picture' => 'pictures/5.jpg',
	 'author' => 5,
	 'date' => '2018-08-15',
	 'likeCounter' => 9,
  ],
  [
	 'id' => 5,
    'title'=> 'You know how to fight six men',
    'content' => file_get_contents('content/content1_1.txt'),
    'picture' => 'pictures/6.jpg',
	 'author' => 1,
    'date' => '2018-08-15',
    'likeCounter' => 6,
  ],
  [
	 'id' => 4,
    'title'=> 'Good luck. Master Wayne!',
    'content' => file_get_contents('content/content2_1.txt'),
    'picture' => 'pictures/7.jpg',
    'author' => 2,
    'date' => '2018-08-14',
    'likeCounter' => 3,
  ],
  [
	 'id' => 3,
    'title'=> 'Breathe in your fears',
    'content' => file_get_contents('content/content3_1.txt'),
    'picture' => 'pictures/8.jpg',
    'author' => 3,
    'date' => '2018-08-13',
    'likeCounter' => 12,
  ],
  [
	 'id' => 2,
    'title'=> 'So which of you fine gentlemen would like to join our team?',
    'content' => file_get_contents('content/content4_1.txt'),
    'picture' => 'pictures/9.jpg',
    'author' => 4,
    'date' => '2018-08-12',
    'likeCounter' => 20,
  ],
  [
	 'id' => 1,
	 'title'=> 'The story about Gotham',
	 'content' => file_get_contents('content/content5_1.txt'),
	 'picture' => 'pictures/10.jpg',
	 'author' => 5,
	 'date' => '2018-08-11',
	 'likeCounter' => 9,
  ],
];

//test: add comments field below
$comments = [
  ['name' => 'Shania Twain', 'message' => 'Reminds me of myself..', 'postId' => 1],
  ['name' => 'Bruce Lee', 'message' => 'Faketastic!', 'postId' => 2],
  ['name' => 'Pablo Picasso', 'message' => 'Interesting..', 'postId' => 3],
  ['name' => 'Marco Polo', 'message' => 'Great', 'postId' => 4],
  ['name' => 'Lucky Luke', 'message' => 'BAD!', 'postId' => 5],
  ['name' => 'King Arthur', 'message' => 'Good!', 'postId' => 6],
  ['name' => 'Jack', 'message' => 'Titanic', 'postId' => 7],
  ['name' => 'Claude Monet', 'message' => 'Beautiful picture', 'postId' => 8],
  ['name' => 'Batman', 'message' => 'Oh no!', 'postId' => 9],
  ['name' => 'Queen Elizabeth', 'message' => 'God save the queen!', 'postId' => 10],
];
