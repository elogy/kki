<?php
include('header.php');
session_start();
session_destroy();
echo "<div id='message'><p class='success'>Erfolgreich ausgeloggt. Tschüssi!</p></div>";
