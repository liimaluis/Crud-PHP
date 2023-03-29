<?php
 require __DIR__.'/vendor/autoload.php';

use \App\Entity\Admin;
use \App\Db\Database;
//use PDOStatement;

if(isset($_POST['email'], $_POST['senha'])){ 
    /*if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];*/

       $query = 'SELECT * FROM admins WHERE email = :email AND senha = :senha AND is_admin=1';
       //$query->execute(array($_POST["email"], $_POST["senha"]));
    $admin = new Database('admins');
    //echo "<pre>"; print_r($admin); echo "</prev>"; exit;

    //$admin = new Admin;

    $obAdmin = $admin->select($query);
    $obAdmin->email = $_POST['email'];
    $obAdmin->senha = $_POST['senha'];
    $obAdmin->execute();
    //$obAdmin->login();

    session_start();
    if($obAdmin->rowCount() ==1) {
        $_SESSION['admin'] = true;

        header('location: index.php?status=success');
        exit;

    } else {
        $error = "Credenciais Inválidas.";
    }

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulogin.php';