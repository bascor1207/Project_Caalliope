import React, {useEffect, useState} from 'react';
import BookItem from './BookItem';

const AudioBook = () => {
  const [data, setData] = useState("");
  const [error, setError] = useState("");
  
    useEffect(() => {
      fetch("https:/openlibrary.org/api/volumes/brief/ibsn/9780807286005.json")
        .then((response) => response.json())
        .then((data) => setData(data))
        .catch(setError);
    }, []);

    if (error) {
      return <pre>{JSON.stringify(error, null, 2)}</pre>
    }

    if (!data) {
      return null;
    }
    return (
      <div className="bookitem">
        {data.docs.map((book, i) => (
          <BookItem key={i} books={book}/>
        ))}
      </div>
    );
    
};
  
export default AudioBook;