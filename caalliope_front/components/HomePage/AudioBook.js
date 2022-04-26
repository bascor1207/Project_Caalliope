import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import BookItem from './BookItem';
import {fetchBooks} from '../../states/BookAudioSlice.ts';

const AudioBook = () => {
  const { books, error } = useSelector((storeConf) => storeConf.books) || {};
  const dispatch = useDispatch();
  const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchBooks());
    }, [dispatch]);

    useEffect(() => {
      setFilteredBooks(books);
    }, [books]);

  return (
    <div className="bookitem">
      {filteredBooks?.map((book) => (
        <BookItem key={book.id} books={book}/>
      ))}
    </div>
  );
};
  
export default AudioBook;