<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <?php
    function writeInJson($atribute, $aux)
    {
        $str = file_get_contents('../data.json');
        $json = json_decode($str, true);
        $json[$atribute] += $aux;

        $file = fopen("../data.json", "w");
        fwrite($file, json_encode($json));
    }


    error_reporting(0);
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['telephone'];
        $cloth = $_POST['cloth'];
        $food = $_POST['food'];
        $money = $_POST['money'];
        $image = imagecreatefromstring(file_get_contents($_FILES['file']["tmp_name"]));
        $file_source = "../images/" . date('ymdhis') . $_FILES['file']['name'];


        imagepng($image, $file_source);
        imagedestroy($image);

        writeInJson("cloth", $cloth);
        writeInJson("food", $food);
        writeInJson("money", $money);
    }
    ?>
</head>

<body>
    <div class="container">

        <div class="row">
            <h4><strong style="font-weight: 600;">Obrigado por registrar sua doação!</strong>
                No dia 18 leve os itens prometidos
                para o Centro Social Anna Neumman, Rua Esteves Jacinto, 18 - Centro!
            </h4>
            <div class="col s6">
                <div class="col s6">
                    <img class="responsive-img" src="<?php echo ($file_source); ?>">
                </div>
                <div class="col s6">
                    <p><?php echo ("Nome: <strong style=\"font-weight: 600;\">" . $name . "</strong>"); ?> </p>
                </div>
                <div class="col s6">
                    <p><?php echo ("Telefone: <strong style=\"font-weight: 600;\">" . $phone . "</strong>"); ?> </p>
                </div>
                <div class="col s6">
                    <p><?php echo ("Roupas: <strong style=\"font-weight: 600;\">" . $cloth . " unidades" . "</strong>"); ?> </p>
                </div>
                <div class="col s6">
                    <p><?php echo ("Alimentos: <strong style=\"font-weight: 600;\">" . $food . " kg" . "</strong>"); ?> </p>
                </div>
                <div class="col s6">
                    <p><?php echo ("Dinheiro: <strong style=\"font-weight: 600;\">" . $money . " reais" . "</strong>"); ?> </p>
                </div>
                <div class="col s6 center">
                    <a href="/total.php">Clique aqui para ver as estatísticas de doação.</a>
                </div>
            </div>
        </div>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>