<?php

require_once 'controllers/intro_controller.php';

$chapter_count = 3;

for ($i = 1; $i <= $chapter_count; $i++)
{
   require_once 'controllers/chapter_' . $i . '_controller.php';
}

print("BUILD FINISH !!!\n");
