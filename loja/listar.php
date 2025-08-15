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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                            <a href="#" type="button" class="btn btn-dark">Apagar</a>
                        </div>
                </tr>
            </tbody>
        </table>
    </div>
<div class="container">
    <a href="index.php" class="btn btn-warning">Voltar</a>
</div>
</body>