
        
        <h5 class="mt-5">Lista de Professores</h5>
        
        <a href="ProfessoresController.php?acao=novo" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Disciplina</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professor): ?>
                    <tr>
                        <td><?= $professor['id']; ?></td>
                        <td><?= $professor['nome']; ?></td>
                        <td><?= $professor['disciplina']; ?></td>
                       <td class="">
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

