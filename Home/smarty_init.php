<?php
require_once __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../public/templates/default/');
$smarty->setCompileDir(__DIR__ . '/../public/templates/default/templates_c/');
$smarty->setCacheDir(__DIR__ . '/../public/templates/default/cache/');
$smarty->setConfigDir(__DIR__ . '/../public/templates/default/configs/');

// кешування
// $smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
