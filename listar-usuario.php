<h1> Listar Usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";

        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->ID."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <button onclick=\"if(confirm('Tem certeza que deseja Editar?')){location.href='?page=editar&ID=".$row->ID."'}else{false;}\"class='btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja Exlcuir?')){location.href='?page=salvar&acao=excluir&ID=".$row->ID."';}else{false;}\" class='btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"(<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>