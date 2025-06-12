
        <div class="card mt-5">
            <div class="card-header">
                <h5 >Cadastrar Aluno</h5>
            </div>
            <div class="card-body">
                <form method="post" action="AlunosController.php?acao=salvar">
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" name="nome" required autofocus>

                    <label>Série:</label>
                    <input class="form-control" type="number" name="serie" required>

                    <label>Média:</label>
                    <input class="form-control" type="number" name="media" step="0.01" required>

                    <label>Faltas:</label>
                    <input class="form-control" type="number" name="faltas" required>

                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </form>
            </div>
        </div>

        