<?php
require_once '../init.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

// valida o ID
if (empty($id)) {
    echo "ID para alteração não definido";
    exit;
}


// abre a conexão
$PDO = db_connect();

// busca os dados do usuário a ser editado
$sql = "SELECT nome, sexo, datanasc, cpf, rg, endereco, numero, bairro, cidade, estado, cep, telefone, celular, email, passaporte, data, pdf FROM formulario WHERE id = $id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido
if (!is_array($user)) {
    echo "Nenhum usuário encontrado";
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>INSTITUTO XAMÂNICO OM MANI PADME HUM</title>
    <link rel="stylesheet" type="text/css" href="../stilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width" scale="1">

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <!-- transforma a pagina em  responsivel-->
</head>

<body style="background-image:  url('../img/index-2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%; ">
    <!--Importando Script Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <header>
        <nav class="navbar navbar-light" style="background-color: rgba(215, 215, 215, .3);">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../inicial.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../participacao/consulta_participacao.php">Lista de Participações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_cadastro.php">Lista de Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Formulario de Cadstro</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <div id="interface" style="background-image:  url('../img/logo-3.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%; margin-top: 20px">

        <div class="container" style="margin-left: 10px">
            <form action="edit.php" method="post" class="needs-validation" id="formSearch" novalidate>
                <div align="center" style="color: rgba(236, 173, 33);">
                    <div class="form-row">
                        <div class="col-sm-2 mb-1">
                            <img src="../img/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-1">
                            <label for="validationServer05">Nome</label>
                            <input type="text" name="nome" id="nome" value="<?php echo $user['nome']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer02">Sexo</label>
                            <select type="text" name="sexo" id="sexo" value="<?php echo $user['sexo']  ?>" class="form-control">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer03">Data Nascimento</label>
                            <input type="date" name="datanasc" id="datanasc" value="<?php echo $user['datanasc']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer05">CPF</label>
                            <input type="text" name="cpf" id="cpf" value="<?php echo $user['cpf']  ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer04">RG</label>
                            <input type="text" name="rg" id="rg" value="<?php echo $user['rg']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-1">
                            <label for="validationServer01">Endereço</label>
                            <input type="text" name="endereco" id="endereco" value="<?php echo $user['endereco']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer05">Numero</label>
                            <input type="text" name="numero" id="numero" value="<?php echo $user['numero']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-1">
                            <label for="validationServer02">Bairro</label>
                            <input type="text" name="bairro" id="bairro" value="<?php echo $user['bairro']  ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer03">Cidade</label>
                            <input type="text" name="cidade" id="cidade" value="<?php echo $user['cidade']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-1 mb-1">
                            <label for="validationServer04">Estado</label>
                            <input type="text" name="estado" id="estado" value="<?php echo $user['estado']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer05">CEP</label>
                            <input type="text" name="cep" id="cep" value="<?php echo $user['cep']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer01">Telefone</label>
                            <input type="text" name="telefone" id="telefone" value="<?php echo $user['telefone']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer05">Celular</label>
                            <input type="text" name="celular" id="celular" value="<?php echo $user['celular']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="validationServer02">E-Mail</label>
                            <input type="text" name="email" id="email" value="<?php echo $user['email']  ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer03">Passaporte</label>
                            <input type="text" name="passaporte" id="passaporte" value="<?php echo $user['passaporte']  ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 mb-1">
                            <label for="validationServer03">Data</label>
                            <input type="date" name="data" id="data" value="<?php echo $user['data']  ?>" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <button type="submit" class="btn btn-outline-warning" style="color: rgba(236, 173, 33);">Alterar Cadastro</button>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </div>


</body>

</html>