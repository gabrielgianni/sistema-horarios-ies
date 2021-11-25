<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniTime</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/teacher.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- CSS library -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
    <?php require_once 'assets/partials/header.php'; ?>
    <section class="content">
        <div class="item-cont">
            <p class="p-cont">Um sistema para cadastro e visualização de horários de professores e disciplinas de uma IES que te ajudará a se manter informado e organizado!</p><br>
            <a href="cadastrar/" class="btn-item-cont btn">Cadastrar Horário de Professores</a><br>
        </div>
        <div>
            <img src="assets/img/teacher.png" class="teacher" alt="Desenho de um professor com 4 livros empilhados ao seu lado direito com uma lousa no fundo.">
        </div>
    </section>
    <main class="content-middle">
        <a href="professores/" class="btn-middle"><i class="bi bi-search"></i> Horário de Professores</a><br>
        <a href="disciplinas/" class="btn-middle"><i class="bi bi-search"></i> Horário de Disciplinas</a>
    </main>
    <?php require_once 'assets/partials/footer.php'; ?>
</body>
</html>