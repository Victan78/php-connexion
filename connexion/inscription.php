<?php
include 'pdo.php';
if($method==$_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=$pdo->prepare("INSERT INTO users (username,password) VALUES (:username,:password)");
    $sql->execute(
        [
            ':username'=>$username,
            ':password'=>$password
        ]
    );
    header('Location: index.php');
}
else{
    echo "Mauvais login ou mot de passe";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type=text name=username placeholder="username">
        <input type=password name=password placeholder="password">
        <input type=submit value="submit">
    </form>
</body>
</html>