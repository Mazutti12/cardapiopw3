<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="col-sm-5 container pt-5">
       
        <form action="index.php" method="POST" class="was-validated " >
          
            <div class="mb-3 mt-3" >
                <h1>Cardápio</h1>
            </div>
            <div class="mb-3 mt-3" >
                <label for="email">Login:</label>
                <input type="name" class="form-control" id="email" placeholder="Entre com seu login" name="email" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Entre com sua senha" name="senha" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
           
            <div class="botao">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>

        </form>
    </div>

</body>

</html>

