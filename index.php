<?php

$json = json_decode(file_get_contents("dataset.json"), true);

$thead ="";
$thead.="<tr>";
$thead.="<th>ID</th>";
$thead.="<th>name</th>";
$thead.="<th>age</th>";
$thead.="<th>company</th>";
$thead.="<th>balance</th>";
$thead.="<th>phone</th>";
$thead.="<th>email</th>";
$thead.="</tr>";

$tbody = "";
foreach($json['employees'] as $employees){
    $tbody.="<tr>";
    $tbody.="<td>".$employees['id']."</td>";
    $tbody.="<td>".$employees['name']."</td>";
    $tbody.="<td>".$employees['age']."</td>";
    $tbody.="<td>".$employees['company']."</td>";
    $tbody.="<td>".$employees['balance']." USD </td>";
    $tbody.="<td>".$employees['phone']."</td>";
    $tbody.="<td>".$employees['email']."</td>";
    $tbody.="</tr>";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    
    <title>Document</title>
</head>
<body>
    <table id="table">
        <thead>
        <?php
            echo $thead;
        ?>
        </thead>
    
        <tbody>
        <?php
            echo $tbody;
        ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
$(document).ready( function () {
    $('#table').DataTable();
} );
    </script>


</body>
</html>








<!--
//$state = HttpState::create(); // instanceof State, dane powinny zostać pobrane z 
//$dataGrid = new HtmlDataGrid(); // instanceof DataGrid
//$config = (new DefaultConfig) // instanceof Config, z dodatkowymi metodami
//    ->addIntColumn('id')
//    ->addTextColumn('name')
//    ->addIntColumn('age')
//    ->addTextColumn('company')
//    ->addCurrencyColumn('balance', 'USD')
//   ->addTextColumn('phone')
//    ->addTextColumn('email');
//echo $dataGrid->withConfig($config)->render($rows, $state);
