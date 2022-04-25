import Image from "next/image";

const BookItem = ({book}) => {
    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src={book.imageLinks} className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title">{book.title}</h5>
                        <p className="card-text">{book.description}</p>
                        <button>Ecouter l'extrait audio</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;