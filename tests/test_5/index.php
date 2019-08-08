<html>
<head>
  <title>appuntamenti</title>
</head>
<body>
<?php
$clienti = include 'clienti.php';
$appuntamenti = include 'appuntamenti.php';
echo '<table>';
foreach ($clienti as $value) {
    echo '<tr>';
    echo '<td>' . $value['nome'] . '</td>';
    echo '<td>' . $value['cognome'] . '</td>';
    echo '<td>' . $value['eta'] . '</td>';
    echo '<tr><td colspan="3">';
    echo '<table >';
    foreach ($appuntamenti as $appuntamento) {
        if ($appuntamento['cognome'] == $value['cognome'] && $appuntamento['nome'] == $value['nome']) {
            echo '<tr>';
            echo '<td>' . $appuntamento['luogo'] . '</td>';
            echo '<td>' . $appuntamento['data'] . '</td>';
            if ($value['eta'] < 18) {
                echo '<td>accompagnato</td>';
            }
            echo '</tr>';
        }
    }
    echo '</table>';
    echo '</td></tr>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
