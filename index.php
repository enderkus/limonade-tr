<?php
// Limonad frameworkü projemize dahil ettik.
require_once 'vendors/limonade.php';
  
 // Ana dizin yani index sayfamız için tanımlama gerçekleştirdik. 
  dispatch('/', 'hello');
  function hello()
  {
      // Projemizin ana sayfasında "Hello world!" yazıyor olacak.
      return 'Hello world!';
  }
  
  // Projemiz için yeni bir sayfa tanımlaması yaptık /merhaba. Ve parametre tanımladık merhaba/Ender yazarsak ekrana Merhaba Ender yazacak.
  dispatch('/merhaba/:isim', 'merhaba');
  function merhaba()
  {
	  $isim = params(isim);
      return 'Merhaba ' .$isim;
  }

  
  run();


?>
