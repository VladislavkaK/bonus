<?php

class Queue
{
    private $queue;
    private $maxSize;

    public function __construct($maxSize = 10)
    {
        //инициализируем очередь
        $this->queue = [];
        //устанавливаем ограничение на количество элементов в очереди
        $this->maxSize = $maxSize;
    }

    public function add($elements)
    {//добавить элемент в конец очереди
        //проверяем не заполнена ли наша очередь
        if (count($this->queue) < $this->maxSize) {
            //добавляем новый элемент в конец массива
            array_push($this->queue, $elements);
        } else {
            echo 'Очередь переполнена!';
        }
    }

    public function remove()
    {//удаление элемента из начала очереди
        if ($this->isEmpty()) {
            //проверка на пустату очереди
            echo 'Очередь пуста!';
        } else {
            //Удаляем 1ый элемент массива
            return array_shift($this->queue);
        }
    }

    public function head()
    {//получение головы очереди
        return current($this->queue);
    }

    public function tail()
    {//получение хвоста очереди
        return end($this->queue);
    }

    public function isEmpty()
    {//получение количества занятых элементов в очереди
        return empty($this->queue);
    }
}

$object = new Queue();

//заполняем очередь
$object->add(10);
$object->add(9);
$object->add(8);
$object->add(7);
$object->add(6);
$object->add(5);
$object->add(4);
$object->add(3);
$object->add(2);
$object->add(1);

echo 'Удаляем 1ый элемент в очереди: ' . $object->remove() . '<br />';//удаляем 1ый элемент который вошел 10
echo 'Удаляем 1ый элемент в очереди: ' . $object->remove() . '<br />';//удаляем 1ый элемент который вошел 9
echo 'Удаляем 1ый элемент в очереди: ' . $object->remove() . '<br />';//удаляем 1ый элемент который вошел 7

echo 'Первый элемент очереди: ' . $object->head() . '<br />';
echo 'Последний элемент очереди: ' . $object->tail() . '<br />';;