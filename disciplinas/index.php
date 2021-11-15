<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário de Disciplinas</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/teacher.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>
    <?php require_once '../assets/partials/header.php'; ?>
    <section class="text-center title">
        <h1>Horário de Disciplinas</h1>
    </section>
    <main class="container mt-5 mb-5 text-center">
        <form action="pesquisar.php" method="post">
            <label for="disciplina">Digite uma disciplina:</label>
            <input type="text" name="disciplina" id="disciplina" autocomplete="off"><br>
            <button type="submit" class="btn-search mt-4" >Pesquisar</button>
        </form>
    </main>
    <?php require_once '../assets/partials/footer.php'; ?>
</body>
</html>