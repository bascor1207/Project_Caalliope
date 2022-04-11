const userLecturesCard = ({book}) => {
    return(
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="..."/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">book.title</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <input type="text" class="form-control" id="nbPagesLus"/> <p> sur {book.pageCount} </p>   
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <button class="btn btn-primary" type="submit">Fini</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default userLecturesCard;