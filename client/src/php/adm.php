<?php
session_start();
require_once('conexao.php');

// checa se a sessao é de admin
if ($_SESSION['is_admin'] != 1) {
    header('Location: login.php');
    exit();
}

// adição de contas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    $newCpf = $_POST['new_cpf'];

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, cpf, is_admin) VALUES ('$newUsername', '$hashedPassword', '$newCpf', 0)";
    if ($conn->query($sql) === TRUE) {
        echo "Novo Usuário Adicionado Com Sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// deleção de contas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $userIdToDelete = $_POST['delete_user'];

    // atualiza o user para desativar seu login
    $sqlUpdate = "UPDATE users SET is_active = 0 WHERE id = $userIdToDelete";
    if ($conn->query($sqlUpdate) === TRUE) {
        echo "Usuário Desativado Com Sucesso!";
    } else {
        echo "Erro, Não Foi Possivel Desativar Usuário: " . $conn->error;
    }
}

// pega apenas usuarios com "is active" = 1 
$sqlUsers = "SELECT id, username, cpf FROM users WHERE is_active = 1";
$resultUsers = $conn->query($sqlUsers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle do Administrador</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Painel de Controle do Administrador</h2>

    <!-- Adiciona novos usuarios -->
    <form method="post" action="adm.php" class="mb-4">
        <div class="form-group">
            <label for="new_username">Novo Usuário:</label>
            <input type="text" class="form-control" id="new_username" name="new_username" required>
        </div>
        <div class="form-group">
            <label for="new_cpf">CPF do Novo Usuário:</label>
            <input type="text" class="form-control" id="new_cpf" name="new_cpf" required oninput="mascara(this)">
        </div>
        <div class="form-group">
            <label for="new_password">Senha do Novo Usuário:</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="add_user">Adicionar</button>
    </form>

    <hr>

    <!-- lista dos usuarios com botao para desativar-->
    <h3>Lista de Usuários:</h3>
    <ul class="list-group">
        <?php
        while ($rowUser = $resultUsers->fetch_assoc()) {
            echo '<li class="list-group-item d-flex justify-content-between align-items-center">
                    User ID: ' . $rowUser['id'] . ', Username: ' . $rowUser['username'] . ', CPF: ' . $rowUser['cpf'] . '
                    <form method="post" action="adm.php">
                        <input type="hidden" name="delete_user" value="' . $rowUser['id'] . '">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Você quer mesmo desativar esse usuário?\')">Desativar</button>
                    </form>
                  </li>';
        }
        ?>
    </ul>

    <script>
          function mascara(i) {

            var v = i.value;

            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
              i.value = v.substring(0, v.length - 1);
              return;
            }

            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

          }
        </script>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
