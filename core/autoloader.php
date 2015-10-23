<?php
//php-code from: Leo-notebook
//auther: Oberjukhtin I.A. 
/* класс автозагрузки классов.
работает через таблицу pathesClass (в ней храняться соответствия 
пути до класса с именем класса)
конструктор считывает таблицу в массив соответствия
функция add() записывает новое соответствие в таблицу
функция load() загружает класс
 */
class CrisAutoloader{
	var $Assoc_path = new Array();
	var $BDManager;
	var $tablename="autoload_class-path";
	function CrisAutoloader(){
		
	}
	function add($path,$classname) {
		
	}
	function load($class) {
		
	}
}
?>