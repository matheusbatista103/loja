<?php 
    include 'cabecalho.php';
?>
<body>
    <div class="container">
        <h2>ATUALIZAÇÃO DE PRODUTOS</h2>
        <?php
            $id = $_GET['id'];
            // echo "Recebi ==> $id";
        
            require 'conexao.php';
            $sql = "SELECT * FROM produtos where id = $id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->FETCH(PDO::FETCH_ASSOC);
            print_r($produto);

            // while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // echo "ID: " . $produto['id'] . "<br>";
            // echo "Nome: " . $produto['nome'] . "<br>";
            // echo "Preço: R$" . $produto['preco'] . "<br>";
            // echo "Estoque: " . $produto['estoque'] . "<br><br>";
            // }

        ?>
    <form action="#" method="POST">
        <div class="mb-3">
            Nome: <input value="<?php echo $produto['nome'];?>"
            type="text" class="form-control" name="produto">
        </div>
        <div class="mb-3">
            Preço: <input value="<?php echo $produto['preco'];?>" type="text" class="form-control" name="preco">
        </div>
    <div class="mb-3">
            Quantidade: <input value="<?php echo $produto['quantidade'];?>" type="text" class="form-control" name="quantidade">
    </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    </div>


<div class="container">
        <a href="index.php" class="btn btn-warning">Voltar</a>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>