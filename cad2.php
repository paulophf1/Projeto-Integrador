<?php
    $nome = strip_tags ($_POST['nome']);
    $endereço = strip_tags($_POST['endereço']);
    $telefone = strip_tags($_POST['telefone']);
    $email = strip_tags ($_POST['email']);
  
 
  
  include "banco.php";
 
  $query = "select * from alunos where email = '$email'";
  $exec = mysqli_query($con, $query);

  $total = mysqli_num_rows($exec);
  if($total == 1){
    header("Location: index.html?email=$email");
  }else{
  
    
  $query = "insert into alunos(nome, endereço, telefone, email) values ('$nome', '$endereço', '$telefone', '$email')";
  mysqli_query($con,$query);
  setcookie("nome", $nome, time()+60*60*24);
  setcookie("endereço", $endereço, time()+60*60*24);
  setcookie("telefone", $telefone, time()+60*60*24);
  setcookie("email", $email, time()+60*60*24);
  
  header("Location: index.html");
  }
  ?>