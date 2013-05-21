<?php
/*
If you want to upgrade SHortMYLInk, simply call this script. But set the chmod after upgrade to 400!
*/

include('./updater/updater.php');
checkUpdates("shmyli");
?>