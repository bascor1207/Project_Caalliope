import React, {useEffect, useState} from 'react';
import CardBook from "./cardBook";
import {useDispatch} from "react-redux";

const SearchBookList = () => {
  const dispatch = useDispatch();
  const [books, setBooks] = useState();
  const [error, setError] = useState();

    useEffect(() => {
        fetch("http://openlibrary.org/subjects/fantasy.json")
        .then((response) => response.json())
        .then((books) => setBooks(books))
        .catch(setError)
      console.log(error);
    }, [])

    return (
        <ul>
            {books.map((book) => (
            <li>
                <CardBook book={book} />
            </li>
            ))}
        </ul>
    );
};

export default SearchBookList;