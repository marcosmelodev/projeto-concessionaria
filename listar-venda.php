<h1>Listar Vendas</h1>

<?php 
    $sql = "SELECT * FROM venda AS v
            INNER JOIN funcionario AS f
            ON v.funcionario_id_funcionario = f.id_funcionario
            INNER JOIN cliente as c
            ON v.cliente_id_cliente = c.id_cliente
            INNER JOIN modelo AS m
            ON v.modelo_id_modelo = m.id_modelo";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Data</th>";
        print "<th>Valor da Venda</th>";
        print "<th>Funcionário</th>";
        print "<th>Cliente</th>";
        print "<th>Modelo</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while( $row = $res -> fetch_object()){
            print "<tr>";
            print "<td>".$row -> id_venda."</td>";
            print "<td>".$row -> data_venda."</td>";
            print "<td>".$row -> valor_venda."</td>";
            print "<td>".$row -> nome_funcionario."</td>";
            print "<td>".$row -> nome_cliente."</td>";
            print "<td>".$row -> nome_modelo."</td>";
            print "<td>
                    <button class='btn btn-success' onclick=\"
                        location.href='?page=editar-venda&id_venda={$row->id_venda}';\">Editar</button>

                     <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                            location.href='?page=salvar-venda&acao=excluir&id_venda={$row->id_venda}';
                        }else{
                            false;
                        }\">Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p> Não encontrou resultado</p>";
    }

?>