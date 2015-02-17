<?php

use \Blockify\Block;
use \Blockify\Element;
use \Blockify\VoidElement;

if ($block->model['background'] === true) {
  $bgImg = 'background-image:url('.$block->model['image'].');';
  $block->openTag('div', ['style' => $bgImg]);
} else {
  $block->openTag('div');
}

if ($block->model['background'] !== true) {
  echo $block->content();
}

if ($block->model['image'] && $block->model['background'] !== true) {
  echo new VoidElement('img', [
      'class' => 'img-responsive',
      'src' => $block->model['image'],
      'title' => $block->model['name']
  ]);
}

$block->closeTag();
