import { useEffect, useState } from "react";
import {useDispatch, useSelector} from "react-redux";
import CardBook from "./cardBook";

const searchBook = () => {
    const dispatch = useDispatch();
    const [books, setBooks] = useState('');
    const [search, setSearch] = useState('');
    const [genre, setGenre] = useState('');
    const [error, setError] = useState('');

    const handleChangeSearch = (event) => {
        setSearch(event.target.value);
    };

    const handleChange = (event) => {
        setGenre(event.target.value);
    };

    useEffect(() => {
        fetch("http://openlibrary.org/search.json?q="+search+"&subject="+genre)
        .then((response) => response.json())
        .then((books) => setBooks(books))
        .catch(setError)
    }, []);

    if (error) {
        return <pre>{JSON.stringify(error, null, 2)}</pre>
    }

    return(
        <div className="card w-75">
            <div className="card-body">
                <form className="d-flex">
                    <input 
                    className="form-control me-2" 
                    type="search" 
                    placeholder="Recherche" 
                    value={search}
                    onChange={handleChangeSearch}
                    aria-label="Search"/>

                    <button 
                    className="btn btn-outline-success" 
                    type="submit"
                    onClick={() => {
                        books.map((book) => (
                            <CardBook key={book.id} book={book}/>
                        ))
                    }}>
                        Rechercher
                    </button>
            
                    <div className="dropdown">
                        <select className="form-select" value={genre} aria-label="Default select example">
                            <option selected onChange={handleChange}>Genre</option>
                            <option value="1" onChange={handleChange}>Fantastique</option>
                            <option value="2" onChange={handleChange}>Science-fiction</option>
                            <option value="3" onChange={handleChange}>Romance</option>
                            <option value="4" onChange={handleChange}>Historique</option>
                            <option value="5" onChange={handleChange}>Thriller</option>
                            <option value="6" onChange={handleChange}>Polars</option>
                            <option value="7" onChange={handleChange}>Horreur</option>
                            <option value="8" onChange={handleChange}>Feel-good</option>
                            <option value="9" onChange={handleChange}>Aventure</option>
                            <option value="10" onChange={handleChange}>Espionnage</option>
                            <option value="11" onChange={handleChange}>Contemporain</option>
                            <option value="12" onChange={handleChange}>Romance</option>
                            <option value="13" onChange={handleChange}>Bit-lit</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default searchBook;