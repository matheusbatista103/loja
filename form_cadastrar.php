<?php 
    include 'cabecalho.php';
?>
<head>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <div class="container">
        <h2>CADASTRO DE PRODUTOS</h2>
    <form action="inserir.php" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" name="produto" placeholder="Digite o nome do produto">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="preco" placeholder="Digite o preço do produto">
        </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="quantidade" placeholder="Digite a Quantidade">
    </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>


<div class="container">
        <a href="index.php" class="btn btn-warning">Voltar</a>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>