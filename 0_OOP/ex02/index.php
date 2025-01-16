<?php
include "HotBeverage.php";
include "Coffee.php";
include "Tea.php";
include "TemplateEngine.php";

$coffee = new Coffee("Coffee", 3, 4);
$tea = new Tea("Tea", 5, 2);

$templateEngine = new TemplateEngine();
$templateEngine->createFile($coffee);
$templateEngine->createFile($tea);