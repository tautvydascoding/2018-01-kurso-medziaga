<?php
include_once('./admin.php');

$administratorius = new Admin(); //kuriam objekta, taip galim kreiptis i kintamuosius, i admino, o per admino ir user ir edit
echo $administratorius->name; // tomas, nes paveldi is admin ir is user kur ir yra $name=tomas

$administratorius->changeName('Juozas');
echo $administratorius->getName();