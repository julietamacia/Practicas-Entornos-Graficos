<?php
setcookie('tipo_titular', '', time() - 3600);
echo "Preferencias borradas. <a href='index.php'>Volver al periódico</a>";
?>