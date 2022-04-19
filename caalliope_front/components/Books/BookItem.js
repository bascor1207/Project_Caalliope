import Image from "next/image";

const BookItem = ({book}) => {
    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src="..." className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title">Book title</h5>
                        <p className="card-text">Synopsis</p>
                        <button>Ecouter l'extrait audio</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;