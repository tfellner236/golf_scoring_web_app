<?php

session_start();

session_unset(); 

session_destroy();

header("Location: http://www.tf-photography.at/golf/index.php", true, 301);
exit();

?>