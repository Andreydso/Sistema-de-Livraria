<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <h1 class="navbar-brand text-light">Andrey's Livraria</h1>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="menu" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav nav-menu ">
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_cliente.html">Cadastrar Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_editora.html">Cadastrar Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_cliente.php">Relatório Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_editora.php">Relatório Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_user.php">Relatório Usuário</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container pt-5">
    <h1 class="text-light mt-5">Lista de Usuários</h1>
    <h4 class="text-light mb-5 mt-3">Lista de todos os usuários cadastrados no sistema</h4>
  <table class="table table-dark mt-3">
    <thead class="">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Setor</th>
        <th scope="col">Login</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $select = "SELECT * from tb_user";
    $query = mysqli_query($conexao,$select);
    while ($result = mysqli_fetch_array($query)) {;
    ?>
      <tr>
        <th scope="row"> <?php echo $result['id_user']; ?> </th>
        <td> <?php echo $result['nm_usuario']; ?> </td>
        <td> <?php echo $result['nm_setor']; ?> </td>
        <td> <?php echo $result['login']; ?> </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

<footer class="text-center text-lg-start text-white mb-0" style="background-color: #45526e">
        <div class="container p-4 pb-0">

            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <div class="p-3">
                            <a class="text-white " href="#">Andrey Oliveira © - Mongaguá 2024.</a>
                        </div>
                        <div class="padding text-only"><a class="text-white" href="#">Enzo Miguel © - Mongaguá 2024.</a></div>
                    </div>

                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end d-flex">
                        <a href="https://github.com/Andreydso/" target="_blank"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                            </svg></a>

                        <a href="https://www.instagram.com/andreys191900/" target="_blank"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg></i></a>
                        <a href="https://br.linkedin.com/in/andrey-de-souza-oliveira-743a5b25b?trk=people-guest_people_search-card"
                            target="_blank" class="btn btn-outline-light btn-floating m-1" class="text-white"
                            role="button"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>