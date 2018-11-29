# limonade-tr
Limonade PHP Framework Türçe İçerik

Kaynak : https://github.com/sofadesign/limonade/

# Gerekli Olanlar

* PHP 5.1.6 ya da daha üstü bir versiyon.

# Açıklama 

Limonade hafif bir PHP framework olarak karşımıza çıkmakta. Hızlı geliştirilmesi gereken projeler için ve çok yer kaplamayan, kafa karıştırmayan projeleriniz için destek sunabilecek bir yapıya sahip. Yapı itibarı ile Ruby frameworkü olan Sinatra'ya yakındır. Zaten geliştiricilerde esinlendiğini belirtmekte.

Şimdiye kadar herhangi bir Türkçe kaynağa rastlamadığım için elimden geldiğince ilgi duyabilecek kişiler için kaynak oluşturmayı planlamaktayım.

29.11.2018 Tarihinde oluşturulmuş kaynak içerisinde projeye, öğrenmeye hızlı giriş yapılabilmesi adına .htaccess dosyası ve merhaba sayfa yapısı ile birlikte değer atama örneği de bulunmaktadır.

# Kullanım

Projelerinizde Limonade framework kullanmaya başlamak için dosyaları indirmeniz ve limonade.php dosyasını çağırmanız gerekmekte.

```php
    require_once 'vendors/limonade.php';
```
(Dizin adını dilerseniz değiştirebilirsiniz.)

İlk sayfamızı oluşturmak için örnek kod aşağıdadır.

```php
   require_once 'vendors/limonade.php';

  dispatch('/', 'hello');
  function hello()
  {
      return 'Hello world!';
  }
```

Projemizi çalıştırdığımızda (örneğin: http://localhost/limonade/ ) bizi "Hello World!" karşılayacaktır.

