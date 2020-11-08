<?php

// BFS  поиск в ширину

function bfs($graph, $start, $end)
{
    $startNode = $start; //старт пути
    $endNode = $end; //искомая точка
    $searchQueue = []; //очередь
    $searched = []; //те кто уже проверен

    foreach ($graph[$startNode] as $neighbor) {
        $searchQueue[] = $neighbor; //добавляем соседей в очередь
    }

    while ($searchQueue) { //пока есть очередь
        $node = array_shift($searchQueue);// извлекаем соседа из очереди
        echo $node . ' -> ';
        if (!in_array($node, $searched)) {
            if ($node === $endNode) {

                echo 'Целевая точка найдена';
                return $node;
            } else {
                foreach ($graph[$node] as $otherNeighbor) { // проверяем есть ли у соседнего узла свои соседи
                    $searchQueue[] = $otherNeighbor; // добавляем их в очередь
                }

                $searched[] = $node; // проверенного соседа помечаем как проверенного
            }
        }
    }

    echo 'Целевая точка не найдена';
}


$graph = [
    'A' => ['B', 'C', 'D'],
    'B' => ['G', 'H'],
    'C' => ['G'],
    'D' => ['E', 'F'],
    'E' => [],
    'F' => [],
    'G' => [],
    'H' => []
];

$res = bfs($graph, 'A', 'H');