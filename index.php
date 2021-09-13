<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>

    <div class="container">

        <?php
        require_once('./parts/TopMenu.php');
        require_once('./parts/Melhores.php');
        ?>

        <div class="ver-todos-div flex">
            <div id="ver-todos" class="btn flex btn-green">
                <span>VER </span>
                <p style="margin-left: 5px; font-weight: 800">TODOS</p>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>