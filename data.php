<?php
declare(strict_types=1);

$data = [
  [
    'title'=> 'Lorem',
    'content' => 'Ipsum',
    'picture' => 'img/03.png',
    'author' =>
        ['id' => 1,
        'name' => 'Isabelle',
        ],
    'publishedDate' => date('Y'),
    'likeCounter' => 6,
  ],
];


print_r($data);
