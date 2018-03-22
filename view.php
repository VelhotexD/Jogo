<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="controller.php" method="post">
    Number
    <input type="text" name="number" placeholder="Insert Number">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($res)){

    echo '<br>';
    echo $res['msg'];
    echo '<br>';

    if ($res['cod'] == 0){
        echo '<br>';
        echo "<a href='http://localhost/Jogo/controller.php'>Jogar de Novo</a>";
    }
}
?>

</body>
</html>