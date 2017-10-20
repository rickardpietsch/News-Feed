<?php

declare(strict_types=1);

// foreach ($coaches as $coach) {
//
// }


// require __DIR__.'/data.php';
//
// function sortByDate($a, $b) {
//     return (int) $a['date'] > (int) $b['date'];
// }
//
// usort($posts, 'sortByDate');
//
// foreach ($posts as $post) {
//     echo $post['date'].'<br>';
// }

function sortByDate($a, $b) {
    return $a['date'] < $b['date'];
}

usort($coaches, 'sortByDate');

// Funktion för att inte jämföra strängar? Edvin

// foreach ($coaches as $coach) {
//     echo $coach['date'].'<br>';
// }
