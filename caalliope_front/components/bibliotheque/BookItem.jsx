const BookItem = ({book}) => {
    return(
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="..."/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">book.title</h5>
                        <p class="card-text">book.authors</p>
                        <p class="card-text">book.description</p>
                        <p class="card-text">book.averageRating</p>
                        <Rating name="rating" value="" />
                        <p class="card-text">book.publisher</p>
                        <p class="card-text">book.pageCount</p>
                        <a href="">Acheter</a>
                        <button class="btn btn-outline-success" type="submit">Ajouter</button>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Statu
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">En cours</a></li>
                                <li><a class="dropdown-item" href="#">Lus</a></li>
                                <li><a class="dropdown-item" href="#">Abondonné</a></li>
                                <li><a class="dropdown-item" href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;