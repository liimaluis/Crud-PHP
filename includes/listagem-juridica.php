<?php 

    $resultados = '';
    foreach($pjuridicas as $pjuridica){
        $resultados .= '<tr>
                          <td>' .$pjuridica->id. '</td>
                          <td>' .$pjuridica->nomeempresa. '</td>
                          <td>' .$pjuridica->email. '</td>
                          <td>' .$pjuridica->cnpj. '</td>
                          <td>' .$pjuridica->cep. '</td>
                          <td>' .($pjuridica->pessoajuridica == 's' ? 'Pessoa Juridica' : 'Pessoa Fisica'). '</td>
                          <td>
                             <a href ="excluir-juridico.php?id='.$pjuridica->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
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

    <table class="table bg-light mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Cnpj</th>
                <th>Cep</th>
                <th>Tipo de Pessoa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody><?=$resultados?></tbody>
    </table>

    </section>

</main>

