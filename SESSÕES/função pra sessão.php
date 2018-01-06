<?php
require_once("config.php");

echo session_save_path();
//onde o id de seção e colocado
echo "<br>";

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo"as sessões estiverem desabilitadas";
		break;
	
	case PHP_SESSION_NONE:
		echo "AS sessões estiverem habilitadas, mas nehuma existir";
		break;
	case PHP_SESSION_ACTIVE:
		echo "as sessões estiverem habilitadas, e uma existir";
		break;
}
?>