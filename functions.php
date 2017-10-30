<?php

declare(strict_types=1);

function sortByDate($a, $b) {
    return $a['date'] < $b['date'];
}

usort($coaches, 'sortByDate');
