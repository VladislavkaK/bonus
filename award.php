<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 02.11.2017
 * Time: 15:18
 */

function awardClients($employees, $days, $indexScore, $index2Clients)
{
    $sum = 0;
    for ($i = 0; $i < count($employees); $i++) {//каждому сотруднику выставляется балл от 1 до 5 за 1 день

        $index3 = rand(0, count($days));

        echo 'Сотрудники: ' . $employees[$i] . PHP_EOL;

        $points = rand(1, $indexScore);//баллы

        if ($index3 < count($days)) {
            echo 'Количество дней, которые работал сотрудник в неделю: ' . $index3 . PHP_EOL;

            for ($l = 1; $l < $index3 + 1; $l++) {
                $appels = rand(1, $index2Clients);;
                echo "Обслужено клиентов за  $l-ый день: " . $appels . PHP_EOL;
                for ($j = 0; $j < $appels; $j++) {
                    if ($points >= 3) {

                        echo 'Баллы сотруднику после обслуживания ' . $points . PHP_EOL;
                        echo 'Премировать сотрудника' . PHP_EOL;
                        //return $index3;
                    }/*else{
                        echo '<b>Не премировать сотрудника</b><br />' ;
                    }*/
                }
            }

        }/*else{
            echo '<b>Сотрудник на этой недели не работал</b><br />' ;
        }*/
        if ($points >= 3) {
            $sum += $index3;
            return $sum;
        }
    }
}