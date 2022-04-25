import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import fetchBooks from '../../api/Books/books';
import BookItem from './BookItem';

const AudioBook = () => {
  const { books, error } = useSelector((store) => store.books);
  const dispatch = useDispatch();
  const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchBooks());
    }, [])

    useEffect(() => {
      setFilteredBooks(books);
    }, [books])

  return (
    <div className={styles.bookitem}>
      {filteredBooks.map((book) => (
        <BookItem key={book.id} books={book}/>
      ))}
    </div>
  );
};
  
export default AudioBook;