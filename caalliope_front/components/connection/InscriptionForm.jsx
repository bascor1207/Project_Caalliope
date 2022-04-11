const InscriptionForm = () => {
    return(
        <div class="card text-center">
            <div class="card-header">
               Inscription
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" class="form-control" id="nom"/>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Prénom *</label>
                        <input type="text" class="form-control" id="prenom"/>
                    </div>
                    <div class="col-12">
                        <label for="mail" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email"/>
                    </div>
                    <div class="col-12">
                        <label for="login" class="form-label">Login *</label>
                        <input type="text" class="form-control" id="login"/>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Mot de passe *</label>
                        <input type="password" class="form-control" id="password"/>
                    </div>
                    <div class="col-md-4">
                        <label for="conf" class="form-label">Confirmer *</label>
                        <input type="password" class="form-control" id="conf"/>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">S'incrire</button>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default InscriptionForm;