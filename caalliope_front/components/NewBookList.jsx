import React, {useEffect, useState} from 'react';
import {useDispatch, useSelector} from "react-redux";

const NewBookList = () => {
    const { search, books, loading, error } = useSelector((store) => store.books);
    const dispatch = useDispatch();
    const [filteredBooks, setFilteredBooks] = useState([]);
  
    useEffect(() => {
      dispatch(fetchbooks());
    }, [])
  
    useEffect(() => {
      
    }, )
  
    return (
      <div className="books-list">
        {filteredBooks.map((books) => (
          <CarouselNewBook key={book.id} books={books}/>
        ))}
      </div>
    );
  };
  
  export default NewBookList;