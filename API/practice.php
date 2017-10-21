<?php

  $name = "Mohamed";
  $daysInWeek = 7;

  echo $text = "Hello, my name is $name. " . "I want to
  say that there are " . $daysInWeek . " days in a week! <br> <br>";

  $bankBalance = 1.2e6;

  echo "Your bank balance is $" . $bankBalance . "!<br> <br>";

  $fileIsUploaded = true;

  if ($fileIsUploaded) {
    echo "Your file was uploaded! <br> <br>";
  } else {
    echo "Your file was not uploaded! <br> <br>";
  }

    $isInt = is_int("A");

    if ($isInt) {
      echo "That is an integer <br> <br>";
    } else {
      echo "That is not an integer! <br> <br>";
    }

    var_dump(is_int(1));



 ?>