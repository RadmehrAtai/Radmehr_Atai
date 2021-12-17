<?php

function create_table($array) {
    $html = '<table>';

    foreach ($array as $key => $value) {
        $html .= '<tr>';
        foreach ($value as $key2 => $value2) {
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

$array = array(
    array('1', '4', '7'),
    array('2', '5', '8'),
    array('3', '6', '9')
);

echo create_table($array);