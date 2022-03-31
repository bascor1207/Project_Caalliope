const userInfo = ({user}) => {
    return(
        <div class="card text-center">
            <div class="card-header">
               Mes informations
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo"/>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Ancien mot de passe</label>
                        <input type="password" class="form-control" id="password"/>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="newpassword"/>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Confirmation</label>
                        <input type="password" class="form-control" id="conf"/>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Avatar</label>
                        <button type="submit" class="btn btn-primary">Choisir un avatar</button>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default userInfo;