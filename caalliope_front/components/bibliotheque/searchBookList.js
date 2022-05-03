import React, {useEffect, useState} from 'react';
import CardBook from "./cardBook";
import {useDispatch} from "react-redux";

const SearchBookList = () => {
  const dispatch = useDispatch();
  const [search, setSearch] = useState('');
  const [filteredBooks, setFilteredBooks] = useState([]);
  const [books, setBooks] = useState();
  const [error, setError] = useState();

    const fetchBook = () => {
      fetch("http://openlibrary.org/search.json?q="+search)
        .then((response) => response.json())
        .then((books) => setBooks(books))
        .catch(setError)
      console.log(error);

      for (let i=0; i<20; i++) {
        console.log(search)
        if (search.trim().length > 0) {
          setFilteredBooks(
          books.docs[i].filter((book) => book.title.toLowerCase().includes(search.toLowerCase()))
          )
        } else {
          setFilteredBooks(books);
        }
      }
    }

    const handleChange = (event) => {
      setSearch(event.target.value);
    }

    return (
      <><div className="card w-75">
          <div className="card-body">
            <form className="d-flex">
              <input
                className="form-control me-2"
                type="search"
                placeholder="Recherche"
                value={search}
                onChange={handleChange}
                aria-label="Search" />
  
              <button
                className="btn btn-outline-success"
                type="submit"
                onClick={fetchBook}>
                Rechercher
              </button>
            </form>
          </div>
        </div>
        <ul>
            {filteredBooks.map((book) => (
              <li>
                <CardBook key={book.id} book={book} />
              </li>
            ))}
          </ul></>
    );
};

export default SearchBookList;