<?php
/**
 * Created by PhpStorm.
 * User: Mozammel
 * Date: 11/15/2015
 * Time: 6:20 PM
 */

$n = 20;
while($n){

?>

<h2>Hello World !</h2></br>

<?php
    echo $n;
    $n--;
}
//setcookie('visited',25352,time()+25565);

//session_start();

echo '<br>'. $_COOKIE['visited'];

?>
