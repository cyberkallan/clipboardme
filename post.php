<?php

file_put_contents("clipboard.txt", " "  . $_POST['cat'] . "\n", FILE_APPEND);

exit();
?>
