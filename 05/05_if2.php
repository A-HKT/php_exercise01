<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $day = '明日';
            break;
        case '英語':
            $day = '明後日';
            break;
        case '理科':
            $day = '明々後日';
            break;
        case '社会':
            $day = '昨日';
            break;
        default:
            $day = '中止';
            break;
    }
    echo $subject . 'の試験は' . $day . 'です。' . PHP_EOL;
}
