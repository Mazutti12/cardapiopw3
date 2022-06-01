<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link type="text/css" href="style/styleindex.css" rel="stylesheet" />
  <title>Cardápio RU</title>
</head>

<style>
  h1 {
    margin-left: 29%;
    font-family: "Lucida Console", "Monaco", monospace
  }

  body {
    background-color: rgb(84, 174, 96);
  }

  .fundo {
    background-color: rgb(250, 252, 250);
    margin-top: 0px;
    margin-left: -1%;
    width: 110%;
  }

  .w3-container {
    margin-top: 50px;
    background-color: rgb(255, 255, 255);
    width: 1150px;
    height: 180%;
    border-radius: 5px;
    margin-left: 18%;
  }

  div {
    margin-top: 0px;
    margin-left: 0%;
    width: 60%;
  }

  .input-group {
    margin-left: 17%;
  }

  .form-floating {
    margin-top: 50px;
    margin-left: 17%;
    width: 60%;
  }

  .tb {
    margin-top: 50px;
    margin-left: 17%;
  }
</style>

<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}
?>

<body>
  <div class="fundo">
    <div class="w3-container">
      <img src="img/logo.png" alt="Logo IFRS" width="500" height="200">
      <br>
      <h1>Seleção de cardápio</h1>
      <div class="form-floating mb-3" class="f">
        <input type="text" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Pesquisar pratos</label>
      </div>

      <form name="form" action="" method="get">
        <div class="input-group">

          <select id="dia" name="dia" class="form-select" aria-label="dia">
            <option selected>-Dia-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>


          </select>
          <select id="mes" name="mes" class="form-select" aria-label="mes">
            <option selected>-Mês-</option>
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
          </select>

          <select id="ano" name="ano" class="form-select" aria-label="ano">
            <option selected>-Ano-</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>

          <select id="refeicao" name="refeicao" class="form-select" aria-label="refeicao">
            <option selected>-Refeição-</option>
            <option value="cafe">Café</option>
            <option value="almoco">Almoço</option>
            <option value="janta">Janta</option>

          </select>

          <div class="buttons">
            <input type="submit" class="btn btn-dark" value="Buscar"></button>
            <button type="button" class="btn btn-danger">Limpar filtros</button>
          </div>

          <?php

          if ($_GET["dia"] != "-Dia-") {
            $dia = $_GET["dia"];
          } else {
            $dia = 1;
          }

          if ($_GET["mes"] != "-Mês-") {
            $mes = $_GET["mes"];
          } else {
            $mes = 1;
          }

          if ($_GET["ano"] != "-Ano-") {
            $ano = $_GET["ano"];
          } else {
            $ano = 1;
          }


          $data = new DateTime($mes . '/' . $dia . '/' . $ano);
          echo $data->format('d/m/Y');
          ?>

        </div>
      </form>

      <div class="tb">
        <table class="table">
          <thead>
            <tr>
              <th>Prato</th>
              <th>Calorias</th>

              <th></th>
            </tr>
            <tr>
              <td>Salada de alface</td>
              <td>5cal./100g </td>

              <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>
            <tr>
              <td>Sopa de legumes</td>
              <td>20cal./100g</td>

              <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>
            <tr>
              <td>bife ao molho</td>
              <td>50cal./100g</td>

              <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>

          </thead>
          <tbody></tbody>
        </table>
        <button type="button" class="btn btn-link" onclick="window.location.href = 'http://localhost/cardapiopw3/frontend/login/login-vitinho/login.php'">Sou nutricionista deste cardápio</button>
        <button type="button" class="btn btn-link" onclick="window.location.href = 'http://localhost/cardapiopw3/frontend/login/login-vitinho/nutricionista.php'">Cadastrar nova nutricionista</button>
        <br><br>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>

</html>