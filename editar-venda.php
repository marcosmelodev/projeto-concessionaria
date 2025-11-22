<h1>Editar Venda</h1>

<?php 
   $sql = "SELECT * FROM venda WHERE id_venda = ".$_REQUEST["id_venda"];
   $res = $conn -> query($sql);
   $row = $res -> fetch_object();
?>

<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda;?>">
    
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="data_venda" class="form-control" value="<?php print $row->data_venda; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Valor
            <input type="number" name="valor_venda" class="form-control" value="<?php print $row->valor_venda; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
            <select name="funcionario_id_funcionario" class="form-control">
                <?php 
                    $sql_1 = "SELECT * FROM funcionario";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1 -> num_rows;
                    if ($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->funcionario_id_funcionario == $row_1->id_funcionario){
                                print "<option value='{$row_1->id_funcionario}' selected>{$row_1->nome_funcionario}</option>";
                            } else {
                                print "<option value='".$row->id_funcionario."'>";
                            print $row->nome_funcionario."</option>";
                            }
                        }
                    } else {
                        print"<option> Não há funcionários cadastrados</option>";
                    }
                    ?>
                        
             </select>
    </div>

    <div class="mb-3">
        <label>Cliente</label>
            <select name="cliente_id_cliente" class="form-control">
                <?php 
                    $sql_2 = "SELECT * FROM cliente";
                    $res_2 = $conn->query($sql_2);
                    $qtd_2 = $res_2 -> num_rows;
                    if ($qtd_2 > 0){
                        while($row_2 = $res_2->fetch_object()){
                            if($row->cliente_id_cliente == $row_2->id_cliente){
                                print "<option value='{$row_2->id_cliente}' selected>{$row_2->nome_cliente}</option>";
                            } else {
                                print "<option value='{$row_2->id_cliente}' {$row_2->nome_cliente}</option>";
                            }
                        }
                    } else {
                        print"<option> Não há clientes cadastrados</option>";
                    }
                    ?>
                        
             </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
            <select name="modelo_id_modelo" class="form-control">
                <?php 
                    $sql_3 = "SELECT * FROM modelo";
                    $res_3 = $conn->query($sql_3);
                    $qtd_3 = $res_3 -> num_rows;
                    if ($qtd_3 > 0){
                        while($row_3 = $res_3->fetch_object()){
                            if($row->modelo_id_modelo == $row_3->id_modelo){
                                print "<option value='{$row_3->id_modelo}' selected>{$row_3->nome_modelo}</option>";
                            } else {
                                print "<option value='{$row_3->id_modelo}' {$row_3->nome_modelo}</option>";
                            }
                        }
                    } else {
                        print"<option> Não há clientes cadastrados</option>";
                    }
                    ?>
                        
             </select>
    </div>

    
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>