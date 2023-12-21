# RubikaApiPHP
Rubika API For PHP Language 😅


#### نحوه استفاده 🎊 :
```php
 <?php 


require_once('./rubika/rubika.php');

$private_key = "your Private key";
$auth = "Your Auth";
$bot = new Rubika($auth,$private_key);
print_r($bot->getChatInfo("g0DoGt100c0c6b6f9683ac48550ce09c"));

?>
```
