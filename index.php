<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" id="bill">
    <h1>BILL</h1>
    <b>TypeRoom: </b>
    <input type="text" value="<?php echo $loaiPhong ?>"> <br> <br>
    <b>Rental hours:</b>
    <input type="text" value="<?php echo $gioThue ?>"> <br> <br>
    <b> Money for meals:</b>
    <input type="text" value="<?php echo $tienAn ?>"> <br> <br>
    <b> Money for service:</b>
    <input type="text" value="<?php echo $dichVu ?>"> <br> <br>
    <b>Total:</b>
    <input type="text" value="<?php echo $tong ?>"> <br> <br>
</form>
</body>
</html>