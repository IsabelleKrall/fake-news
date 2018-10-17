<?php
declare(strict_types=1);

$data = [
  [
    'title'=> 'Lorem',
    'content' => 'Ipsum',
    'picture' => 'img/01.png',
    'author' =>
        ['id' => 1,
        'name' => 'Isabelle Krall',
        ],
    'publishedDate' => date('Y'),
    'likeCounter' => 6,
  ],
  [
    'title'=> 'Lorem',
    'content' => 'Ipsum',
    'picture' => 'img/02.png',
    'author' =>
        ['id' => 2,
        'name' => 'Anna Svensson',
        ],
    'publishedDate' => date('Y'),
    'likeCounter' => 3,
  ],
  [
    'title'=> 'Lorem',
    'content' => 'Ipsum',
    'picture' => 'img/03.png',
    'author' =>
        ['id' => 3,
        'name' => 'Henrik Larsson',
        ],
    'publishedDate' => date('Y'),
    'likeCounter' => 12,
  ],
];
print_r($data);
