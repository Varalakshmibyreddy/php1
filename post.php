<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post & get</title>
</head>
<body>
    
<form action="post" method="get" >
    Password: <input type="password" name="password"> <br>
    <input type="submit">

</form>
    <br>
<?php
    echo $_GET["password"]
?>

</body>
</html>