
        <div class="card mt-5">
            <div class="card-header">
                <h5 >Cadastrar Professor</h5>
            </div>
            <div class="card-body">
                <form method="post" action="ProfessoresController.php?acao=salvar">
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" name="nome" required autofocus>

                    <label>Disciplina:</label>
                    <input class="form-control" type="text" name="disciplina" required>

                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </form>
            </div>
        </div>

        