<?php

require_once 'config.php';

if (BUILD_TYPE == BuildType::Normal)
   :
   {
      require 'views/layouts/normal.php';
   } elseif (BUILD_TYPE == BuildType::Post)
   :
   {
      require 'views/layouts/post.php';
   }

else
   :
   {

   }
endif;
