import { useEffect, useState } from "react";
import {useDispatch, useSelector} from "react-redux";
import CardBook from "./cardBook";

const searchBook = () => {
    const dispatch = useDispatch();
    const [search, setSearch] = useState('');
    const [books, setBooks] = useState('');
    const [error, setError] = useState('');
    const [filteredBooks, setFilteredBooks] = useState('');

    const handleChange = (event) => {
        setSearch(event.target.value);
    };

    const handleClick = () => {
        useEffect(() => {
            fetch("http://openlibrary.org/search.json?q="+search)
            .then((response) => response.json())
            .then((books) => setBooks(books))
            .catch(setError)
        }, []);

        useEffect(() => {
            if (search.trim().length > 0) {
                setFilteredBooks(
                  books.docs.filter((book) => book.title.toLowerCase().includes(search.toLowerCase()))
                )
            } else {
                setFilteredBooks(heroes);
            }
        }, [search, books])

        if (error) {
            return <pre>{JSON.stringify(error, null, 2)}</pre>
        } else {
            <ul>
                {filteredBooks.map((book) => (
                    <li>
                        <CardBook key={book.id} book={book}/>
                    </li>
                ))}
            </ul>
        }
    };

    return(
        <div className="card w-75">
            <div className="card-body">
                <form className="d-flex">
                    <input 
                    className="form-control me-2" 
                    type="search" 
                    placeholder="Recherche" 
                    value={search}
                    onChange={handleChange}
                    aria-label="Search"/>

                    <button 
                    className="btn btn-outline-success" 
                    type="submit"
                    onClick={handleClick}>
                        Rechercher
                    </button>
                </form>
            </div>
        </div>
    );
}

export default searchBook;