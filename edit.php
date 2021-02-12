<?php
    require_once 'db.php';
    $id = $_GET['id'];

    $sql = 'select * from pessoas where id=:id';

    $data = $conexao->prepare($sql);

    $data->execute([':id' => $id]);
    $pessoa = $data->fetch(PDO::FETCH_OBJ);
    if(isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sql = 'UPDATE pessoas SET nome=:nome, email=:email WHERE id=:id'; 
    
        $data = $conexao->prepare($sql);

        if ($data->execute([':nome'=> $nome, ':email' => $email, ':id'=> $id])) {
            $mensagem = 'dados inseridos com sucesso';
            header("location: index.php");
        }
    
    }

    
    
?>

<?php require_once 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        Atualizar dados do <?=$pessoa->nome ?>
                    </span>
                    <p>
                        <form method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                <input value="<?= $pessoa->nome; ?>" placeholder="Nome" id="nome" type="text" class="validate" name="nome">
                                <label for="first_name">Nome</label>
                                </div>
                                <div class="input-field col s6">
                                <input value="<?= $pessoa->email; ?>" id="email" type="email" name="email">
                                <label >Email</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit">Editar
                                <i class="material-icons right">add_box</i>
                            </button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>