<?php

require_once 'vendors/limonade.php';

  dispatch('/', 'hello');
  function hello()
  {
      return 'Hello world!';
  }
  
  
  dispatch('/merhaba/:isim', 'merhaba');
  function merhaba()
  {
	  $isim = params(isim);
      return 'Merhaba ' .$isim;
  }

  
  run();


?>