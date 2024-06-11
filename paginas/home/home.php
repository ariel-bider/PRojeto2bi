
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home - Agendador</title>
    <style>
        .welcome-message {
            margin: 20px 0;
        }
        .noticias {
            margin-top: 20px;
        }
        .noticia-item {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="welcome-message">
            <h1>Olá Ariel, bem-vindo!</h1>
            <p>O que iremos fazer hoje?</p>
        </header>

        <section class="noticias">
            <h2>Últimas Notícias do Corinthians</h2>
            <?php if (!empty($noticias)): ?>
                <ul class="list-group">
                    <?php foreach ($noticias as $noticia): ?>
                        <li class="list-group-item noticia-item">
                            <h5 class="mb-1"><?= $noticia['titulo'] ?></h5>
                            <p class="mb-1"><?= $noticia['descricao'] ?></p>
                            <small><a href="<?= $noticia['link'] ?>" target="_blank">Leia mais</a></small>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Clube esta uma merda chefe vamos falir!</p>
            <?php endif; ?>
        </section>

        <section class="tarefa-diaria">
            <h2>Tarefa do Dia</h2>
            <p>Hoje, você tem programado: <strong>Reunião com a equipe às 14h00</strong></p>
        </section>

        <section class="proximos-eventos">
            <h2>Próximos Eventos</h2>
            <ul class="list-group">
               
                <li class="list-group-item">Consulta médica - 14/06/2024 às 08h00</li>
                <li class="list-group-item">Jantar com clientes - 15/06/2024 às 19h00</li>
            </ul>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


