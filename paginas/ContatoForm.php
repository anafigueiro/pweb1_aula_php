<?php 
include '../BD.class.php';
$conn = new BD();

if(!empty($_POST)){
    $conn->inserir($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">

  <title> Document </title>

  <html>
  <body>
    <form action= "ContatoForm.php" method="post">
      <h3> Formulário Contato</h3>
      <label for=""> Nome: </label>
      <input type="text" name="nome" id=""> <br>

      <label for=""> Email: </label>
      <input type="text" name="email" id=""> <br>

      <label for=""> Telefone: </label>
      <input type="text" name="telefone" id=""> <br>

      <input type="submit" value= "Enviar"> <br>
    </form>
  </body>
  </html>
    
  </head>