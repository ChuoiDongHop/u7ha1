<?php

abstract class Region
{
   const none = '';
   const vocabulary = 'vocabulary';
   const grammar = 'grammar';
}

abstract class Extension
{
   const php = '.php';
   const html = '.html';
}

abstract class BuildType
{
   const Normal = 0;
   const Post = 1;
}
