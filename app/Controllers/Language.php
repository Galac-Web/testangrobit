<?php
require_once './app/Models/Language.php';
// Определите текущий язык (например, на основе сессии, запроса и т.д.)
$currentLanguage = 'en'; // или 'en', в зависимости от предпочтений пользователя

$lang = new \Models\Language($currentLanguage);
$GLOBALS['lang'] = $lang;

