<?php
$login = $_POST['login'];
$entrar = $_POST['acesso'];
$senha = $_POST['senha'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('chamados');

if(isset($entrar))
{
    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("Erro: $php_errormsg");
    
    if(mysql_num_rows($verifica) <= 0)
    {
        echo "<script language='javascript' type='text/javascript' alert('Login errado');window.location.href='login.html'";
        die();
    }
    else
    {
        setcookie("login",$login);
        header("Location:index2.php");
    }
}