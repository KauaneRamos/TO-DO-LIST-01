<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    <style> 
    
        .box{
          width: 200px;
          border: 15px solid rgb(255, 255, 255);
          padding: 50px;
          margin: 20px;
          margin-left: 520px;
          margin-top: 100px;
          text-align: center;
          background-color: rgb(255, 255, 255);
          border-radius: 20px;
        }
        
        input { color: rgb(182, 3, 143) }
        
        </style>
        </head>
        
        <body background="fundo.png">
            <div class="first">
        

            <div class="box">
    <form action="validarcadastro.php" method="post">
        <h1>Cadastro</h1>

        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="nick" placeholder="Nome da conta" required> 
        <input type="email" name="email" placeholder="contato@gmail.com" required>   
        <input type="password" name="senha" placeholder="Senha" required>
<br>
<br>

       <a href="to_do_list.html"><input id="button" type="submit" value="Cadastrar"></a>

        
        
            <h3> Já tem cadastro? </h3>
            <a  href=" " ><button style="background-color:rgb(179, 98, 165); border-color:rgb(80, 5, 80); font-size: 17px; color:rgb(255, 255, 255)"; border-radius: 30px;> Login</button> </a>
     

        </div>
    </form>
</body>
 </html>