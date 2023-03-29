<?php 

    $resultados = '';
    foreach($pfisicas as $pfisica){
        $resultados .= '<tr>
                          <td>' .$pfisica->id. '</td>
                          <td>' .$pfisica->nome. '</td>
                          <td>' .$pfisica->email. '</td>
                          <td>' .$pfisica->telefone. '</td>
                          <td>' .$pfisica->cep. '</td>
                          <td>' .($pfisica->pessoafisica == 's' ? 'Pessoa Fisica' : 'Pessoa Juridica'). '</td>
                          <td>
                             <a href ="excluir.php?id='.$pfisica->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
                          </td>
                          </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                          <td colspan="6" class="text-center"> Nenhuma Pessoa Cadastrada</td>
                                                        </tr>';

?>

<main>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


     <section>
        <a href="cadastrar.php"><button class="btn btn-success">Cadastro Pessoa Fisica</button></a>

        <a href="cadastro-juridico.php"><button class="btn btn-success">Cadastro Pessoa Juridica</button></a>
    </section>


    <section>

    <table class="table bg-light mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cep</th>
                <th>Tipo de Pessoa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody><?=$resultados?></tbody>
    </table>

    </section>

</main>