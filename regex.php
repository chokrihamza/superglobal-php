<?php

$str = "hello there";
$pattern = "/there/i";

//echo preg_replace($pattern, "world", $str);
$str = "apples and bananas";

$pattern = "/ba(na){2}/i";

echo preg_match($pattern, $str);

$input = [
  "It is 5 o'clock",
  "40 days",
  "No numbers here",
  "In the year 2000"
];

$result = preg_filter('/[0-9]+/', '(hello)', $input);
print_r($result);

//preg_grep()

$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

$result = preg_grep("/^p/i", $input);
print_r($result);

//preg_replace_callback_array
function countLetters($matches)
{
  return $matches[0] . '[' . strlen($matches[0]) . 'letter]';
}

function countDigits($matches)
{
  return $matches[0] . '[' . strlen($matches[0]) . 'digit]';
}

$input = "There are 365 days in a year.";
$patterns = [
  '/\b[a-z]+\b/i' => 'countLetters',
  '/\b[0-9]+\b/' => 'countDigits'
];
$result = preg_replace_callback_array($patterns, $input);
echo $result;

// preg_split()

$input = "hello alex";
$pattern = "//";

$splitarray = preg_split($pattern, $input);

print_r($splitarray);