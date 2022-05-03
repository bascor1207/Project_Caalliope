import React, {useEffect, useState} from 'react';
import CardBook from "./cardBook";
import {useDispatch} from "react-redux";

const SearchBookList = ({search}) => {
  const dispatch = useDispatch();
  const [filteredBooks, setFilteredBooks] = useState([]);
  const [books, setBooks] = useState();

    useEffect(() => {
        fetch("http://openlibrary.org/search.json?q="+search)
        .then((response) => response.json())
        .then((books) => setBooks(books))
        .catch(setError)
        console.log(error);
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

  return (
    <div className="books-list">
      {fetchBooks.map((book) => (
        <CardBook key={book.id} book={book}/>
      ))}
    </div>
  );
};

export default SearchBookList;