import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";
import CarouselBook from './CarouselBook';

const TopBookList = () => {
    const { topBook, books, error } = useSelector((store) => store.books);
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
          <CarouselBook key={book.id} book={book}/>
        ))}
      </div>
    );
  };
  
  export default TopBookList;