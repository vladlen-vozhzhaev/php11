<?php
class User{
    public static function login(){
        global $mysqli;
        $login = $_POST['email'];
        $pass = $_POST['pass'];
        $login = mb_strtolower($login);
        $result = $mysqli->query("SELECT * FROM `users` WHERE login='$login'");
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['pass'])){
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['login'] = $row['login'];
        }else{
            return "Неправильный логин или пароль!";
        }
        header('Location: /profile.php');
    }
    public static function register(){
        global $mysqli;
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $email = mb_strtolower($email);
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = $mysqli->query("SELECT id FROM users WHERE login='$email'");
        if($result->num_rows){
            return "Пользователь уже существует";
        }
        $mysqli->query("INSERT INTO `users` (`name`, `lastname`, `login`, `pass`) 
                            VALUES ('$name','$lastname','$email','$pass')");
        header("Location: /login");
    }
}
