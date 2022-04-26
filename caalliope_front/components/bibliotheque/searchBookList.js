import React, {useEffect, useState} from 'react';
import CardBook from "./cardBook";
import {useDispatch, useSelector} from "react-redux";
import {fetchBooks} from "../../states/BooksSlice.ts";

const SearchBookList = () => {
  const { search, books, loading, error } = useSelector((storeConf) => storeConf.books);
  const dispatch = useDispatch();
  const [filteredBooks, setFilteredBooks] = useState([]);

  useEffect(() => {
    dispatch(filteredBooks());
  }, [])

  useEffect(() => {
    if (search.trim().length > 0) {
        setFilteredBooks(
        books.filter((book) => book.title.toLowerCase().includes(search.toLowerCase()))
      )
    } else {
        setFilteredBooks(books);
    }
  }, [search, books])

  if (loading) {
    return (
      <div className="spinner-border" role="status">
        <span className="visually-hidden">Loading...</span>
      </div>
    );
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