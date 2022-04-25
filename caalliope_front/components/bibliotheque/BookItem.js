import { Rating } from "@mui/material";

const BookItem = ({book}) => {
    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src="..." className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title">{book.title}</h5>
                        <p className="card-text">{book.authors}</p>
                        <p className="card-text">{book.description}</p>
                        <p className="card-text">{book.averageRating}</p>
                        <Rating name="rating" value="" />
                        <p className="card-text">{book.publisher}</p>
                        <p className="card-text">{book.pageCount}</p>
                        <a href="">Acheter</a>
                        <button className="btn btn-outline-success" type="submit">Ajouter</button>
                        <div className="dropdown">
                            <select className="form-select" aria-label="Default select example">
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