<?php
// str_pad()

echo str_pad("Hello World!", 1024);

flush();
sleep(1);
echo "<br>";
echo "Hello World!";

ob_start();
echo "This output will not be sent to the browser";
echo "hi";
ob_clean();
echo "This output will be sent to the browser";
ob_end_flush();

// ob_get_clear()
ob_start();
echo "Hello World!";
echo "hi";
echo "jhpfjhpghkjgkhjpkghjlhjk";
$contents = ob_get_clean();
echo "The contents of the buffer are: ";
echo $contents;