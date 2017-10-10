<?php

require_once 'core/controller_base.php';

class chapter_1_controller extends controller_base
{

   function __construct()
   {
      parent::__construct();
   }

   function __destruct()
   {

   }

   public function vocabulary()
   {
      $this->title = 'Bài 1 - Từ vựng';
      $this->region = Region::vocabulary;

      $this->build(__FUNCTION__);
   }

   public function grammar()
   {
      $this->title = 'Bài 1 - Giải thích ngữ pháp';
      $this->region = Region::grammar;

      $this->build(__FUNCTION__);
   }
}

$controller = new chapter_1_controller();

$controller->vocabulary();
$controller->grammar();
