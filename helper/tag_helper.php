<?php

function vocabulary(string $key, bool $jq = false, bool $bold = false)
{
   $classes = '';
   $before = '';
   $after = '';

   if ($jq)
   {
      $before = $before . '「';
      $after = $after . '」';
   }

   if ($bold)
   {
      $classes = $classes . " bold";
   }

   echo "<span class=\"text $classes d-inline-block\">$before";

   echo "<span class=\"vocabulary\" key=\"$key\">"
   . "$key"
   . "</span>";

   echo "$after</span>";
}

function v(string $key, bool $jq = false)
{
   vocabulary($key, $jq);
}

function vb(string $key, bool $jq = false)
{
   vocabulary($key, $jq, true);
}
