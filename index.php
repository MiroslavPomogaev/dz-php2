<?php
echo "Введите первое число: " . PHP_EOL;

do {
  $number1 = trim(fgets(STDIN));
  if (is_numeric($number1) === false) {  
  fwrite(STDERR, "Введите пожалуйста число" . PHP_EOL);
  } 
} while (is_numeric($number1) === false);

echo "Введите второе число:" . PHP_EOL;

do {
  $number2 = trim(fgets(STDIN));

  if (is_numeric($number2) === false) {  
    fwrite(STDERR, "Введите пожалуйста число" . PHP_EOL);
    } 

  elseif ((int)$number2 === 0) {
    fwrite(STDERR, "Делить на 0 нельзя" . PHP_EOL);
    $number2 = trim(fgets(STDIN));
  }

}
  while ((int)$number2 === 0 || is_numeric($number2) === false);

fwrite(STDOUT, "Результат вычисления: " . $number1/$number2);