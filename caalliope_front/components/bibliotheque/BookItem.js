import React, {useEffect, useState} from 'react';
import { Rating } from "@mui/material";

const BookItem = ({book}) => {
    const [data, setData] = useState('');
    const [dataBook, setDataBook] = useState('');
    const [error, setError] = useState('');

    useEffect(() => {
        fetch("http://covers.openlibrary/works/{book.edition_key}.json")
        .then((response) => response.json())
        .then((data) => setData(data))
        .catch(setError)
    }, []);

    useEffect(() => {
        fetch("http://covers.openlibrary/books/{book.edition_key}.jon")
        .then((response) => response.json())
        .then((dataBook) => setDataBook(dataBook))
        .catch(setError)
    }, []);

    if (error) {
        return <pre>{JSON.stringify(error, null, 2)}</pre>
    }

    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src="..." className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title">{book.title}</h5>
                        <p className="card-text">{book.authors_name}</p>
                        <p className="card-text">{data.description}</p>
                        <li className="publisher_list">
                            <p className="card-text">{book.publisher}</p>
                        </li>
                        <p className="card-text">{dataBook.number_of_pages}</p>
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