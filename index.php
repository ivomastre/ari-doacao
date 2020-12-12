<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->


    <title>Doação</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <h4><strong style="font-weight: 600;">Faça um doação! Você vai tornar alguém da comunidade de Passo Largo mais feliz.</strong>
                Cadastre aqui o que você vai doar do dia 18/12.</h1>
                <form enctype="multipart/form-data" action="php/count_and_show.php" method="POST" class="col s6">
                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">face</i>
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name">Seu nome completo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="telephone" type="text" class="validate" name="telephone">
                            <label for="telephone">Telefone para contato</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s6">
                            <div class="btn col s6">
                                <i class="material-icons left">camera_front</i>
                                <span>Procurar</span>
                                <input type="file" name="file">
                            </div>
                            <div class="file-path-wrapper col s6">
                                <input class="file-path validate " type="text" placeholder="Anexe aqui sua foto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">checkroom</i>
                            <input id="cloth" type="number" class="validate" name="cloth">
                            <label for="cloth">Número de roupas (unidades)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_pizza</i>
                            <input id="food" type="number" class="validate" name="food">
                            <label for="food">Alimento (kg)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">attach_money</i>
                            <input id="money" type="number" class="validate" name="money">
                            <label for="money">Dinheiro (reais)</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <button class="btn waves-effect waves-light right" type="submit" name="submit">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>