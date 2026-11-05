<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>
         <h1>Cadastro de funcionario</h1>
    <form action="inserir.php" method ="post"></form>
    <p>

    <label for ="nome">Nome:</label>
    <input type="text" name ="name" required>

    </p>
    <p>

    <label for ="email">Email:</label>
    <input type="email" name ="email" required>

    </p>
    <p>

    <label for ="cargo">Cargo:</label>
    <input type="text" name ="cargo" required>
    
    </p>
    <p>

    <label for ="salario">Salario:</label>
    <input type="number" name ="salario" step="0.01" required>
    
    </p>
    <p>

    <label for ="data">Data de admissao:</label>
    <input type="date" name ="admissao" required>
    
    </p>
    <p>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
    
    </p>
    
</body>
</html>