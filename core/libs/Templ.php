<?php
//шаблонизатор
  class Templ
  {
	  private $is_NOok = false;
      private $cont = NULL;  
	  // сюда сохраняется исходник шаблона (для многоразового прменения)
      private $r_cont = NULL; //здесь результат работы 
 // конструктор. создаёт объект класса шаблонизатора. $tpl_dir -папка , где расположен шаблон, $tpl_name - имя шаблона.
      function Templ($tpl_dir, $tpl_name) 
      {
          if ( ! file_exists($tpl_dir . $tpl_name . '.tpl') ) $is_NOok=true; /* если файла с шаблоном нет,
запоминаем это*/		  
          $this->cont = file_get_contents($tpl_dir . $tpl_name . '.tpl');
		  /* иначе	читаем шаблон	  */
      }
      function assign_vars($vars)
      {
		  if ($is_NOok) $this->r_cont =''; 
          $this->r_cont = $this->cont;
          foreach( $vars as $blockname => $value )
          {
              $this->r_cont = preg_replace('/::' . $blockname . '::/i', $value, $this->r_cont);
          }
      }
      function render()
      {
          return $this->r_cont;
      }
  }
?>