<!-- 1 -->

<?php
// Переменные
$file = 'hello.txt';
$content = 'HeLlO wOrLd!';
// Запись в файл
file_put_contents ($file, $content);

// Чтение из файла
$get = file_get_contents ($file);
// Вывод на страницу
echo ($get);
?>
 
<!-- 2 -->

<?php
// Переменные
$now = strval ( date ("Y-m-d-H-i-s"));
$name = $now . '.txt';
$random = mt_rand();

// Запись в файл
file_put_contents ($name, $random);

// Чтение из файла
$getrandom = file_get_contents ($name);
// Вывод на страницу
echo ($getrandom);
?>

<!-- 3 -->
<?php
file_put_contents ('extensions.txt',  get_loaded_extensions()); // Расширения
file_put_contents ('constants.txt', get_defined_constants()); // Константы
?>

