<?php
include 'cabecalho.php';
require 'conexao.php';

if (isset($_GET['delete_id'])) {
    $delete_id = (int)$_GET['delete_id'];
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $delete_id, PDO::PARAM_INT);
    $stmt->execute();

    header('Location: listar.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $nome = $_POST['produto'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';

    if ($id && $nome && $preco && $quantidade) {
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':preco', $preco);
        $stmt->bindValue(':quantidade', $quantidade);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        header('Location: listar.php');
        exit;
    } else {
        echo "<p style='color:red;'>Erro: Dados incompletos para atualização.</p>";
    }
}
?>

<head>
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <div class="container">
        <h1>Sistema Web com CRUD</h1>
        <h2>Lista de Produtos</h2>

        <div class="cards-container">
            <?php
            $sql = "SELECT * FROM produtos";
            $stmt = $pdo->query($sql);
            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="card">
                    <h3><?= htmlspecialchars($produto['nome']) ?></h3>
                    <p><strong>ID:</strong> <?= $produto['id'] ?></p>
                    <p><strong>Preço:</strong> R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                    <p><strong>Quantidade:</strong> <?= $produto['quantidade'] ?></p>
                    <div class="btn-group">
                        <a href="form_atualizar.php?id=<?= $produto['id'] ?>" class="btn btn-danger">Atualizar</a>
                        <a href="listar.php?delete_id=<?= $produto['id'] ?>" class="btn btn-warning" onclick="return confirm('Confirma exclusão?')">Apagar</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <a href="index.php" class="btn btn-warning btn-listar">Voltar</a>
    </div>

<?php
include 'rodape.php';
?>
