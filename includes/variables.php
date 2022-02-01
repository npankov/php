<?php
require 'classes/Beanie.php';

$products = [
    new Beanie(1, 'Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.', './includes/img/1.jpg', ['S', 'M'], ['Laine']),
    new Beanie(2, 'Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.', './includes/img/2.jpg', ['XS', 'M'], ['Laine']),
    new Beanie(3, 'Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.', './includes/img/3.jpg', ['S', 'L'], ['Laine']),
    new Beanie(4, 'Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.', './includes/img/4.jpg', ['L', 'XXL'], ['Laine'])
];

//$products = [
//    [
//        'id' => 1,
//        'name' => 'Bonnet en laine',
//        'price' => 10,
//        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
//        'image' => './includes/img/1.jpg'
//    ],
//    [
//        'id' => 2,
//        'name' => 'Bonnet en laine bio',
//        'price' => 14,
//        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
//        'image' => './includes/img/2.jpg'
//    ],
//    [
//        'id' => 3,
//        'name' => 'Bonnet en laine et cachemire',
//        'price' => 20,
//        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
//        'image' => './includes/img/3.jpg'
//    ],
//    [
//        'id' => 4,
//        'name' => 'Bonnet arc-en-ciel',
//        'price' => 12,
//        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
//        'image' => './includes/img/4.jpg'
//    ]
//];