import React, {useEffect, useState} from 'react';
import ReactAudioPlayer from 'react-audio-player';
import styles from './AudioBook.module.css';

const AudioBook = () => {
  const [book, setBook] = useState("");
  const [error, setError] = useState("");
  
    useEffect(() => {
      fetch("https://openlibrary.org/works/OL82563W.json")
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
        <>
          <div className={styles.container}>
            <div className="col">
               <img 
                  src="https://covers.openlibrary.org/b/id/8483863-L.jpg"
                  className={styles.cover} 
                  alt={book.title}/>
            </div>
            <div className={styles.col}>
              <span>{book.description}</span>
            </div>
          </div>
          <div className="col">
            <div className="card-body">
                <h3 className="card-title">{book.title}</h3>
                  <button className={styles.audio} onClick={handleClick}>
                    {"Ecouter l'extrait audio"} 
                  </button>
            </div>
          </div>
        </>
      );
  }
  
export default AudioBook;