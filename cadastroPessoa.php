<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho de BD</title>
</head>
<body>
    <form action="" method="POST" target="_self">
        <fieldset>
            <legend>Informações Pessoais:</legend>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="inputPassword4">Tipo</label>
                <select name="tipo" id="tipoUsuario">
                <option value="ClienteF" selected="true">Cliente com CPF</option>
                <option value="ClienteJ">Cliente com CNPJ</option>
                <option value="Funcionario" <?php if ($_SESSION['tipo'] != 'Administrador') : ?>disabled=disabled<?php endif ?>>Funcionário</option>
                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="name" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="inputEmail4">Nome</label>
                <input type="name" name="nome" class="form-control" id="inputNome4" placeholder="Nome">
                </div>
                <div class="form-group col-md-2">
                <label for="inputPassword4">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="inputTelefone4" placeholder="(11) 1111-1111" onkeypress="mascara(this, '## ####-####')"  maxlength="12">
                </div>
                <div class="form-group col-md-2" id="campoCPF">
                <label for="inputPassword4">CPF</label>
                <input type="text" name="cpf" class="form-control" id="inputCPF4" placeholder="111.111.111-11" onkeypress="mascara(this, '###.###.###-##')"  maxlength="14">
                </div>
                <div class="form-group col-md-2" style="display:none" id="campoCNPJ">
                <label for="inputPassword4">CNPJ</label>
                <input type="text" name="cnpj" class="form-control" id="inputCNPJ4" placeholder="11.111.111/0001-11" onkeypress="mascara(this, '##.###.###/####-##')"  maxlength="18">
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Informações Residenciais:</legend>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Av. Rio Branco">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartmento, estudio, or andar">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" name="estado" class="form-control">
                    <option selected>Escolha...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">CEP</label>
                <input type="text" name="cep" class="form-control" id="cep" onkeypress="mascara(this, '##.###-###')" placeholder="11.111-111" maxlength="10">
                </div>
            </div>
        </fieldset>
        <fieldset style="display:none" id="infoFuncionario">
        <legend>Informações de Funcionario:</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputPassword4">Numero de Identificacao</label>
            <input type="number" name="numID" class="form-control" value=1 placeholder="001">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Salario (R$)</label>
            <input type="number" min="0.01" max="1000000.00" step="0.01" name="salario" class="form-control" id="inputSalario" placeholder="Salario">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Cargo</label>
            <select name="cargo" class="form-control">
            <option value="Vendedor" selected="true">Vendedor</option>
            <option value="Administrador">Administrador</option>
            </select>
            </div>
        </div>
        </fieldset>
        <hr>
        <div align="center">
        <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
        </div>
        <hr>
        </form>
        <!-- Fim do Formulário de Cadastro de Usuário  -->
        <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))
        {
            include_once("conexao.php");/* Estabelece a conexão */
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $cpf = $_POST['cpf'];
            $tipo = $_POST['tipo'];
            $endereco = $_POST['endereco'];
            $complemento = $_POST['complemento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $salario = $_POST['salario'];
            $cargo = $_POST['cargo'];
            $cnpj = $_POST['cnpj'];
            $numID = $_POST['numID'];
            $sql = "insert into usuarios (email,senha,nome,telefone,cpf,cnpj,tipo,salario,numeroIdentificacao,cargo,endereco,complemento,cidade,estado,cep) values ('$email','$senha','$nome','$telefone','$cpf','$cnpj','$tipo','$salario','$numID','$cargo','$endereco','$complemento','$cidade','$estado','$cep')";
            $salvar = mysqli_query($conexao,$sql);/* Escreve os dados no banco */
            if($salvar)
            {
                ?>
                <div class="alert alert-success">Endereço cadastrado com sucesso !    Você será redicionado para a página principal.</div>
                <img src="logo.jpg" alt="some text" width=600 height=400>
                <?php
              
                header('Location: index.php');
                sleep (2);
            }
            else
            {
                die(mysqli_error($conexao));
                ?>
                <div class="alert alert-warning">Falha ao cadastrar usuário!</div>
                <?php
            }
            mysqli_close($conexao);
        }
        ?>
</body>
</html>