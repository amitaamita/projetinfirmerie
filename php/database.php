<?php
$db = new PDO('mysql:host=localhost;dbname=joueur', 'root','');
$db->setattribute(PDO::ATTR_ERRMOD, PDO::ERRMODE_EXCEPTION);