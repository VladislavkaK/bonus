<?php

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'award.php';

$employees = ['Вася', 'Петя', 'Коля'];
//дни недели
$days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//$days = [0, 1, 2, 3, 4, 5, 6, 7];
$clients = [1, 2, 3]; //от 1 до 3 клиетов может быть у каждого сотрудника в день
$score = [1, 2, 3, 4, 5];//баллы
$indexScore = rand(1, count($score));
$index2Clients = rand(1, count($clients));
echo awardClients($employees, $days, $indexScore, $index2Clients);