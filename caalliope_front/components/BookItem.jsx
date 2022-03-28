const BookItem = ({book}) => {
    return(
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="..."/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Book title</h5>
                        <p class="card-text">Synopsis</p>
                        <button>Ecouter l'extrait audio</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;