import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import BookItem from './BookItem';

const AudioBook = () => {
  const { books, error } = useSelector((store) => store.books);
  const dispatch = useDispatch();
  const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchbooks());
    }, [])

    useEffect(() => {
      setFilteredBooks(books);
    }, [books])

  return (
    <div className="bookitem">
      {filteredBooks.map((book) => (
        <BookItem key={book.id} books={book}/>
      ))}
    </div>
  );
};
  
export default AudioBook;