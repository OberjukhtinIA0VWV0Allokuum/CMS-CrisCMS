//php-code from: Leo-notebook
//auther: Oberjukhtin I.A. 
<?php
FUNCTION registraite_core_system_parametrs(){
$core_system_parametrs= array(); //Регистрируем массив параметров системы
$core_system_parametrs['path_to_classes']='/core/libs/'; //говорим, откуда брать классы
$core_system_parametrs['path_to_moduls']='/moduls/'; //указываем папку с модулями
$core_system_parametrs['path_to_bd_libs']='/core/libs/bd/'; //указываем, где лежит библиотека баз-данных
$core_system_parametrs['path_to_settings']='/settings/'; //.-.-, откуда брать файлы настроек
$core_system_parametrs['path_to_parents']='/core/parents/'; //-.-.-, где лежат родители модулей
//остальные параметры система присвоет сама
return $core_system_parametrs;  //Отдаём параметры
}

//блок функций времени
//конец блока функций
?>