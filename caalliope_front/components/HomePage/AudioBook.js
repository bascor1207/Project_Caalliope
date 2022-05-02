import React, {useEffect, useState} from 'react';
import BookItem from './BookItem';
import ReactAudioPlayer from 'react-audio-player';
import styles from './AudioBook.module.css';

const AudioBook = () => {
  const [book, setBook] = useState("");
  const [error, setError] = useState("");
  
    useEffect(() => {
      fetch("https://openlibrary.org/isbn/9780140328721.json")
        .then((response) => response.json())
        .then((book) => setBook(book))
        .catch(setError);
    }, []);

    if (error) {
      return <pre>{JSON.stringify(error, null, 2)}</pre>
    }

    if (!book) {
      return null;
    }      
      const handleClick = () => {
        <ReactAudioPlayer/>
        };
        return(
          <div className="card mb-3">
              <div className="row g-0">
                  <div className="col-md-4">
                      <img 
                        src={book.covers} 
                        className={styles.cover} 
                        alt="..."/>
                  </div>
                  <div className="col-md-8">
                      <div className="card-body">
                          <h5 className="card-title">{book.title}</h5>
                          <button className={styles.audio} onClick={handleClick}>
                          {"Ecouter l'extrait audio"}
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      );
  }
  
export default AudioBook;