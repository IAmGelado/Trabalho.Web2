<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<style>
    form {border:2px solid #000; padding: 20px; width: 380px; margin-top:25px; font:16px Arial, Helvetica, sans-serif;color:#000000;}
    form input{padding:5px; width:350px; display:flex;}
    form textarea{width:354px; display:flex}
    form button{width:150px; cursor:pointer;}
    div form{align-items: left; justify-content: left; }
</style>

<body>
    <div class="Formulário" align="center">

        <form action="mkdir.php" method="post">
            <label for="lbl_dir" font-size= 20px>Formulário</label><br><br>
            <label for="lbl_dir">Codigo:</label>
            <input name="cod_dir" placeholder="Digite seu codigo" type="text"><br>
            <label for="lbl_dir">Nome do Arquivo:</label>
            <input name="arq_dir" placeholder="Digite o nome do Arquivo" type="text"><br>
            <label for="lbl_dir" placeholder="Digite o Texto Aqui">Texto:</label>
            <textarea id="buttor_dir" name="desc" placeholder="Digite o Texto Aqui" rows="10" cols="50"></textarea><br>
            <button nome="btn_dir" type="submit">Criar</button>
        </form>



        <div>
            <ul>
                <?php
                    $diretorio = 'folder';
                    $ponteiro = opendir($diretorio);

                    while ($nome_itens = readdir($ponteiro)){
                        $itens[] = $nome_itens;
                    }

                    sort($itens);

                    foreach($itens as $listar){
                        if ($listar != '.' && $listar != '..'){
                            $pastas[] = $listar;
                        }
                    }

                    if ($pastas != '') {
                        foreach($pastas as $listar){
                            echo "<li>$listar - <a href=\"rmdir.php?dir=$listar\">(x)excluir</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
</body>
</html>