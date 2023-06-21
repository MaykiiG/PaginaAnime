<?php
//tiene de token 11 digitos
define("KEY_TOKEN", "SQEWÑ@-2022");
define("MONEDA", "$");


$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>