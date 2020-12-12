<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Total</title>
    <?php
    function readJson($atribute)
    {
        $str = file_get_contents('./data.json');
        $json = json_decode($str, true);
        return $json[$atribute];
    }
    $cloth = readJson("cloth");
    $food = readJson("food");
    $money = readJson("money");

    $clothpercent = ($cloth / 100) * 100;
    $foodpercent = ($food / 300) * 100;
    $moneypercent = ($money / 1000) * 100;
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4><strong style="font-weight: 600;">Total de doações cadastradas até agora:</strong></h4>
            </div>
            <div class="col s6">
                <div class="col s6">
                    <p>Roupas: <?php echo ("<strong style=\"font-weight: 600;\">" . $cloth . " unidades</strong>"); ?></p>
                    <p>Alimentos: <?php echo ("<strong style=\"font-weight: 600;\">" . $food . " kg</strong>"); ?></p>
                    <p>Dinheiro: <?php echo ("<strong style=\"font-weight: 600;\">" . $money . " reais</strong>"); ?></p>
                </div>
            </div>
            <div class="col s12">
                <div class="col s6">
                    <p class="blue-text text-darken-4">Meta:</p>
                    <p class="blue-text text-lighten-2">Roupas: <strong class="blue-text text-darken-4">100 unidades</strong>
                        <strong class="pink-text text-accent-2">
                            <?php
                            echo ("Atual: " . $clothpercent . "%")
                            ?>
                        </strong>
                    </p>
                    <p class="blue-text text-lighten-2">Alimentos: <strong class="blue-text text-darken-4">300 kg</strong>
                        <strong class="pink-text text-accent-2">
                            <?php
                            echo ("Atual: " . $foodpercent . "%")
                            ?>
                        </strong>
                    </p>
                    <p class="blue-text text-lighten-2">Dinheiro: <strong class="blue-text text-darken-4">1000 reais</strong>
                        <strong class="pink-text text-accent-2">
                            <?php
                            echo ("Atual: " . $moneypercent . "%")
                            ?>
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>