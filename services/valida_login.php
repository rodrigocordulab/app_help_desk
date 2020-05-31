<?php

    //variavel que verifica se a autenticacao foi realizada

    $usuario_autenticado = false;


    //usuarios do sistema

    $usuarios_app = array(
      array(
        'email' => 'adm@teste.com.br', 'senha' => '1234'
      ),
      array(
        'email' => 'user@teste.com.br', 'senha' => 'abcd'
      ),
    );

      // echo "<pre>";
      // print_r($usuarios_app);
      // echo "<pre>";

      foreach ($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
          $usuario_autenticado = true;
        }
      }

        if($usuario_autenticado){
          echo 'Usuário autenticado';
        } else {
          header('Location: ../index.php?login=erro');
        }
        // $user['email'];
        // $user['senha'];
        //
        // echo $_POST['email'];
        // echo '<br />';
        // echo $_POST['senha'];
        // echo '<hr>';



      /*
      $_GET['email'];
      $_GET['senha'];*/



 ?>
