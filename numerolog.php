<?php
$cookie_name = "utente";
$cookie_value = 2;
if(!isset($_COOKIE[$cookie_name])) {
    echo "<p>E' la prima volta che sei entrato</p>";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
} else {
	$cookie_value=$_COOKIE[$cookie_name]+1;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
    echo "<p>Numero accessi:  $_COOKIE[$cookie_name] </p>";
}
?>
<html>
<body>



</body>
</html>