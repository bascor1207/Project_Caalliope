import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import CarouselBook from './CarouselBook';

const NewBookList = ({date}) => {
    const { newBook, books, error } = useSelector((store) => store.books);
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
          <CarouselBook key={book.id} books={book}/>
        ))}
      </div>
    );
  };
  
  export default NewBookList;