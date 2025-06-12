
        
        <h5 class="mt-5">Lista de Alunos</h5>
        
        <a href="AlunosController.php?acao=novo" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Série</th>
                    <th>Média</th>
                    <th>Faltas</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?= $aluno['id']; ?></td>
                        <td><?= $aluno['nome']; ?></td>
                        <td><?= $aluno['serie']; ?></td>
                        <td><?= $aluno['media']; ?></td>
                        <td><?= $aluno['faltas']; ?></td>
                        <td class="">
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

