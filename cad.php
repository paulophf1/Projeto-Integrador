<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastre-se</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="index.html">Personal Fitness</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="plan.html">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qsm.html">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cad.php">Cadastre-se</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="secao">
        <div class="container">
            <h2>Cadastro</h2> 
            <form method="post" action="cad2.php">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="endereço">Endereço:</label>
                    <input type="endereço" class="form-control" id="endereço" placeholder="Enter endereço" name="endereço">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" class="form-control" id="telefone" placeholder="Enter telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
               
                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </form>
        </div>
    </div>
  </body>

 <footer >
 </footer>
 <p></p>    
 <center><h6> 2018 academia Personal Fitness - Santa Cruz</h6></center>
 
</html>