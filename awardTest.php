<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 02.11.2017
 * Time: 13:35
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'award.php';

use PHPUnit\Framework\TestCase;

class awardTest extends TestCase
{
    public function testAwardClientsOne()
    {
        $employees = ['Вася', 'Петя', 'Коля'];
//дни недели
        $days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

        $clients = [1, 2, 3]; //от 1 до 3 клиетов может быть у каждого сотрудника в день
        $score = [1, 2, 3, 4, 5];//баллы
        $indexScore = rand(1, count($score));
        $index2Clients = rand(1, count($clients));

        $result = awardClients($employees, $days, $indexScore, $index2Clients);
        $this->assertEquals(1, $result);
    }
}
