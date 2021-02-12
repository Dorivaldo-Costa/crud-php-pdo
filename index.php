    <?php
        require_once 'db.php';

        $sql = 'select * from pessoas';
        $data = $conexao->prepare($sql);
        $data->execute();
        $pessoas = $data->fetchAll(PDO::FETCH_OBJ);
    ?>
    
    <?php
        require_once "header.php";
    ?>
    <div class="container">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Lista de Cadastro</span>
                    <p>
                        <?php foreach($pessoas as $pessoa): ?>
                            <ul>
                                <li><?= $pessoa->id; ?></li>
                                <li><?= $pessoa->nome; ?></li>
                                <li><?= $pessoa->email; ?></li>
                                <ul>
                                    <a class="waves-effect waves-light btn" href="edit.php?id=<?= $pessoa->id ?>"><i class="border_color">Edit</i></a>  
                                    <a class="waves-effect waves-light btn" href="delete.php?id=<?= $pessoa->id ?>"><i class="clear">Delet</i></a>  
                                </ul>
                            </ul>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        require_once 'footer.php';
    ?>