<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniTime</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="container navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">UniTime</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="professores/">Horário de Professores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="disciplinas/">Horário de Disciplinas</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn-nav" href="/cadastrar/">Cadastrar Horário de Professores</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
            <div class="item-cont">
                <p class="p-cont">Um sistema para cadastro e visualização de horários de professores e disciplinas de uma IES que te ajudará a se manter informado e organizado!</p><br>
                <a href="cadastrar/" class="btn-item-cont">Cadastrar Horário de Professores</a><br>
            </div>
            <div>
                <img src="assets/img/teacher.png" class="teacher" alt="">
            </div>
        </section>
    <main>
        <a href="professores/" class="btn-middle"><i class="bi bi-search"></i> Horário de Professores</a><br>
        <a href="disciplinas/" class="btn-middle"><i class="bi bi-search"></i> Horário de Disciplinas</a>
    </main>
    <?php require_once 'assets/partials/footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>