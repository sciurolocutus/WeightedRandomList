<?php
require_once(__DIR__ . '/WeightedRandomList.php');

//Example / testing code follows.

$l = new WeightedRandomList();

$l->addItem('123', 80);
$l->addItem('124', 80);
$l->addItem('125', 80);
$l->addItem('126', 80);
$l->addItem('smurgle', 999);

echo var_export($l, true), "\n";

for($j=0; $j<10; $j++) {
	echo var_export($l->pickItem()), "\n";
}
