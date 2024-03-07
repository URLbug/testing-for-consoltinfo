<?php

require "classes.php";

use \CSV as CSV;

$csv = new CSV();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSV Data Table with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">

        <tbody id="csv-data">
            <?=$csv->read_csv()?>
        </tbody>
        
        </table>
    </div>
</body>
</html>
