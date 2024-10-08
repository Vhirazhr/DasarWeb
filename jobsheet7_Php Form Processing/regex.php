<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I Like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;