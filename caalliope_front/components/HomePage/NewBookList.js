import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import Carousel from "./Carousel"

const NewBookList = ({date}) => {
    const { newBook, books, error } = useSelector((storeConf) => storeConf.books) || {};
    const dispatch = useDispatch();
    const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchBooks());
    }, [])
  
    useEffect(() => {
      if (newBook != null) {
        setFilteredBooks(
          books.filter((book) => book.publishedDate.getFullYear().includes(date.getFullYear()))
        );
      }
    }, [newBook, books])
  
    return (
      <div className="books-list">
        {filteredBooks.map((book) => (
          <Carousel key={book.id} books={book}/>
        ))}
      </div>
    );
  };
  
  export default NewBookList;