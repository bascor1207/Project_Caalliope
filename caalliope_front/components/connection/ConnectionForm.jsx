const ConnectionForm = () => {
    return(
        <div class="card text-center">
            <div class="card-header">
            Inscription
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                        <input type="login" class="form-control" id="login"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <a>Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <p>Pas de compte ?</p> <a>Inscrivez-vous !</a>
                </form>
            </div>
        </div>
    );
}

export default ConnectionForm;