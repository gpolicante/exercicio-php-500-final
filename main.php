<?php

session_start();
$config = parse_ini_file('config.ini');

$sqlite = new SQLite3($config['sqlite']);
