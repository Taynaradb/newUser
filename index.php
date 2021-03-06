<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
  

  <section class="d-flex justify-content-center align-items-center">
    <div class="box">
      <h2 class="text-center mt-3">Register now!</h2>
      <div class="row">
        <div class="col">
          <h5 class="text-center">User Login</h5>
          <form action="querecebe.php" method="post" class="container col-9">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" maxlength="20" required>
            <label class="form-label mt-3" for="senha">Senha</label>

            <div class="blocoIcones">
            <input class="form-control" type="password" name="senha" id="senha" maxlength="8" required>
            <button type="button" onclick="seen()"><img id="eye" src="images/seen.svg"></button>
            </div>
            
            <fieldset class="mt-3">
              <input type="radio" class="form-check-input" name="checks" value="male" id="male"
                onclick="onlyOne(this)">Homem
              <span class="me-3"></span>
              <input type="radio" class=" form-check-input" name="checks" value="female" id="female"
                onclick="onlyOne(this)">Mulher
            </fieldset>
            <input type="hidden" name="admins" value="Não">
            <input class="mt-3" type="checkbox" name="admins" value="Sim" class="form-check-input" id="admins">
            <label class="mt-3 form-check-label" for="admins">Administrador</label>
            <div class="d-flex justify-content-center align-items-center">
              <button type="submit" id="btn" class="mt-3 d-block btn btn-primary">Salvar</button>
            </div>
          </form>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
          <img id="profile" src="images/avatar.png" width="200px" alt="profile pic">
        </div>
      </div>
    </div>
  </section>
  <section class="d-flex justify-content-center align-items-center">
    <div class="box">
      <div class="container p-5 d-flex justify-content-center align-items-center">
        <table class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
            <th>Nome</th>
            <th>Adminstrador</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include_once "config.php";

              $sql = "SELECT * FROM tb_user";
              $result = mysqli_query($conn, $sql);

              $datas = [];

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $datas[] = $row;
                }
              }

              /*echo "<pre>";
              print_r($datas);
              echo "<pre>";*/

              

              foreach($datas as $data){
                echo "<tr>";
                echo "<th>" . $data['nome'] . "</th>";
                echo "<th>" . $data['admins'] ."</th>";
                echo "</tr>";
              }
                           

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/js.js"></script>
</body>

</html>