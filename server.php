<?php

echo "<pre>";
var_dump($_REQUEST);

echo "save to database";

header("Location:./register.php?success=Save new Student!");
