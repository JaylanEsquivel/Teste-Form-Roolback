<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function con(){
    
    $link = mysql_connect("localhost", "root", "", "1911_")or die("falha");
     
    return $link;
}

function cliente(){
    session_start();
    $link = con();
    mysqli_autocommit($link, FALSE);

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobre'];
    
    mysql_query("INSERT INTO cliente (nome, sobrenome) VALUES ( $nome, $sobrenome)")or die("ERRO");
    $id = 2;
    $_SESSION['nome'] = $nome;
    return $id;
}
function contact(){
    $link = con();
    mysqli_autocommit($link, FALSE);
    
    $user = $_POST['id'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    
    $cliente_id = mysqli_query($link, "SELECT `id` cliente WHERE `nome` = $user");
    echo $cliente_id;
    mysqli_query($link, "INSERT INTO contact (tel, email, cliente_id) VALUES ( $tel, $email, $cliente_id)");

    $id = 3;
    
    mysqli_commit($link);
    
    return $id;
}