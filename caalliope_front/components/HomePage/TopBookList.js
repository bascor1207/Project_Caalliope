import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import Carousel from './Carousel';

const TopBookList = () => {
    const { topBook, books, error } = useSelector((storeConf) => storeConf.books) || {};
    const dispatch = useDispatch();
    const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchBooks());
    }, [])
  
    useEffect(() => {
      if (topBook != null) {
        setFilteredBooks(
          books.filter((book) => book.averageRating > 3.0)
        );
      }
    }, [topBook, books])
  
    return (
      <div className="books-list">
        {filteredBooks.map((book) => (
          <Carousel key={book.id} book={book}/>
        ))}
      </div>
    );
  };
  
  export default TopBookList;