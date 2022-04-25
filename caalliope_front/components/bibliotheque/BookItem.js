const BookItem = ({book}) => {
    return(
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="..."/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{book.title}</h5>
                        <p class="card-text">{book.authors}</p>
                        <p class="card-text">{book.description}</p>
                        <p class="card-text">{book.averageRating}</p>
                        <Rating name="rating" value="" />
                        <p class="card-text">{book.publisher}</p>
                        <p class="card-text">{book.pageCount}</p>
                        <a href="">Acheter</a>
                        <button class="btn btn-outline-success" type="submit">Ajouter</button>
                        <div class="dropdown">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Status</option>
                                <option value="1">En cours</option>
                                <option value="2">Lus</option>
                                <option value="3">Abandonné</option>
                                <option value="4">Wishlist</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;