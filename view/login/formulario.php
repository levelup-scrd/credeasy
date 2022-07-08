<?php include __DIR__ . '/../template/inicio-html.php'; ?>

    <form action="/efetua-login" method="post">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <button class="btn btn-primary" type="submit">Entrar</button>
            </div>
        </div>
    </form>

<?php include __DIR__ . '/../template/fim-html.php'; ?>