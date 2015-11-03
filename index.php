<?php

require __DIR__."/vendor/autoload.php";

use Kayladnls\Choredo\Chore;
use Kayladnls\Choredo\Kid;

$birthday = new DateTime(null, new DateTimeZone("UTC"));
$lydia = new Kid("Lydia", $birthday->setDate(2006, 03, 01));

$trash = new Chore("trash", Chore::FREQUENCY_WEEKLY, 0.50);
$dishes = new Chore("dishes", Chore::FREQUENCY_DAILY, 1.00);

$lydia->addChore($trash);
$lydia->addChore($dishes);

echo $lydia->getName();
echo "\n";
echo "===================";
echo "\n";
echo "Name\t Allowance \t Frequency";
echo "\n";

foreach ($lydia->getChores() as $chore) {
    echo $chore->getName();
    echo "\t";
    echo "\t";

    echo $chore->getAllowance();
    echo "\t";
    echo "\t";

    echo $chore->getFrequency();

    echo "\n\n";

}