
<?php 
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $data = $_POST['data_venda'];
            $valor = $_POST['valor_venda'];
            $nome_funcionario = $_POST['funcionario_id_funcionario'];
            $nome_cliente = $_POST['cliente_id_cliente'];
            $nome_modelo= $_POST['modelo_id_modelo'];

            $sql = "INSERT INTO venda (data_venda, valor_venda, funcionario_id_funcionario, cliente_id_cliente, modelo_id_modelo) VALUES ('{$data}', '{$valor}', {$nome_funcionario}, {$nome_cliente}, {$nome_modelo})";

            $res = $conn -> query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            } else{
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;

        case 'editar':
            $data = $_POST['data_venda'];
            $valor = $_POST['valor_venda'];
            $nome_funcionario = $_POST['funcionario_id_funcionario'];
            $nome_cliente = $_POST['cliente_id_cliente'];
            $nome_modelo = $_POST['modelo_id_modelo'];

            $sql = "UPDATE venda SET data_venda='{$data}', valor_venda='{$valor}', 
            funcionario_id_funcionario={$nome_funcionario}, cliente_id_cliente={$nome_cliente}, modelo_id_modelo={$nome_modelo} WHERE id_venda=".$_REQUEST['id_venda'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            } else{
                print "<script>alert('Não editou');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST['id_venda'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso!);</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
    }



?>