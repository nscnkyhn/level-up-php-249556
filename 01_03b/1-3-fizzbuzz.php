<?php
for ($i = 0; $i <= 100; $i++) {
  if ($i % 15 == 0) {
    echo "FizzBuzz<br>";
    continue;
  }
  elseif ($i % 3 == 0) echo "Fizz";
  elseif ($i % 5 == 0) echo "Buzz";
  else echo $i;
  echo "<br>";
}