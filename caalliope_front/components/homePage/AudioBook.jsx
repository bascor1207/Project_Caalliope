import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import BookItem from './BookItem';

const AudioBook = () => {
    const { newBook, book, error } = useSelector((store) => store.books);
    const dispatch = useDispatch();
    const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchbooks());
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
          <BookItem key={book.id} book={book}/>
        ))}
      </div>
    );
  };
  
  export default NewBookList;