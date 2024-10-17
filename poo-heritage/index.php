<?php

require "..\poo-heritage\classe\User.class.php";

require"..\poo-heritage\classe\Admin.class.php";

$user1 = new User("eva","000");
$user2 = new User( "waffo","1234");

$admin = new Admin("waffo","13570", true);

echo $user1->getName(). "<br>";
echo $user1->getPassword();

echo $admin->getAdmin() . "<br>";
echo $admin->getName() . "<br>";;
echo $admin->getPassword() . "<br>";;

 ?>

