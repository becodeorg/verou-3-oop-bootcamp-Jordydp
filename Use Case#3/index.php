<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include './includes/autoloader.inc.php'; //include only one page -> this is an autoloader of all classes

$student1 = new Students('a', 6);
$student2 = new Students('b', 2);
$student3 = new Students('c', 9);
$student4 = new Students('d', 4);
$student5 = new Students('e', 5);
$student6 = new Students('f', 6);

$groupA = new Group(
[
    $student1,
    $student2,
    $student3,
]);

$groupB = new Group(
[
    $student4,
    $student5,
    $student6,
]);

echo "{$student1->name}<br>";

print_r($groupA->getName());

echo "<br> {$groupA->calcAvarage()}";
echo "<br> {$groupB->calcAvarage()}";
echo "<br> {$groupA->sortGroup()}";
print_r($groupA);
unset($groupA->group[0]);
echo "<br> {$groupA->calcAvarage()}";



