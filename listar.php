<?php
    include 'cabecalho.php';
?>
<body>
    <div class="container">
        <h1>Bem vindo ao meu 1° sistema web com CRUD</h1>
        <h3>Matheus de Pauli Batista</h3>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$produto['id']."</td>";
                    echo "<td>".$produto['nome']."</td>";   
                    echo "<td>".$produto['preco']."</td>";
                    echo "<td>".$produto['quantidade']."</td>";
                    echo "
                    <td>
                        <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                            <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-success'>Atualizar</a>
                            <a href='#' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
                    </td>
                    ";
                    echo"</tr>";

                    echo "ID: ". $produto['id'] . "<br>";
                    echo "Nome: ". $produto['nome'] . "<br>";
                    echo "Preço R$: ". $produto['preco'] . "<br>";
                    echo "EStoque: ". $produto['quantidade'] . "<br>";
                }
            ?>
            </tbody>
        </table>
    </div>
<div class="container">
    <a href="index.php" class="btn btn-warning">Voltar</a>
</div>
</body>