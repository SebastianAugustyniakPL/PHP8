<?php

include '../config.php';


$database->removeEntry($_GET['entry_id']);
header("Location: ../index.php");