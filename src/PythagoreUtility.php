<?php

namespace App;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1" cellspacing="0" cellpadding="5">';

        $html .= '<tr>';
        for ($i = 0; $i <= 10; $i++) {
            $html .= "<th>$i</th>";
        }
        $html .= '</tr>';


        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            for ($j = 0; $j <= 10; $j++) {
                if ($j == 0) {
                    $html .= "<th>$i</th>"; 
                } elseif ($i == $j) {
                    $html .= '<td>X</td>';
                } else {
                    $html .= '<td>' . ($i * $j) . '</td>'; 
                }
            }
            $html .= '</tr>';
        }

        $html .= '</table>';
        return $html;
    }
}
