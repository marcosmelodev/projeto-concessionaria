<h1>Cadastrar Venda</h1>

<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="data_venda" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Valor
            <input type="number" name="valor_venda" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Funcionário</label>
            <select name="funcionario_id_funcionario" class="form-control">
                <?php 
                    $sql = "SELECT * FROM funcionario";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object())
                    {
                        print "<option value='".$row->id_funcionario."'>";
                        print $row->nome_funcionario."</option>";
                    }
                ?>
            </select>
    </div>

    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control">
                <?php 
                    $sql = "SELECT * FROM cliente";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object())
                    {
                        print "<option value='".$row->id_cliente."'>";
                        print $row->nome_cliente."</option>";
                    }
                ?>
            </select>
         </label>
    </div>


    <div class="mb-3">
        <label>Modelo
            <select name="modelo_id_modelo" class="form-control">
                <?php 
                    $sql = "SELECT * FROM modelo";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object())
                    {
                        print "<option value='".$row->id_modelo."'>";
                        print $row->nome_modelo."</option>";
                    }
                ?>
            </select>
         </label>
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>