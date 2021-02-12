<?php
    require_once 'db.php';
    $mensagem = '';
    if(isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sql = 'INSERT INTO pessoas(nome, email) VALUES(:nome, :email)'; 
    
        $data = $conexao->prepare($sql);

        if ($data->execute([':nome'=> $nome, ':email' => $email])) {
            $mensagem = 'dados inseridos com sucesso';
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
                        Criar novo usuario
                    </span>
                    <p>
                        <form method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                <input placeholder="Nome" id="nome" type="text" class="validate" name="nome">
                                <label for="first_name">Nome</label>
                                </div>
                                <div class="input-field col s6">
                                <input id="email" type="email" name="email">
                                <label >Email</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit">Cadastrar
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