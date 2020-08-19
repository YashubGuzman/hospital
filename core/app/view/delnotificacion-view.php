<?php

$notificacion = NotificacionesData::delById($_GET["id"]);

echo $_GET["id"];

Core::redir("./index.php?view=pacientes");


?>