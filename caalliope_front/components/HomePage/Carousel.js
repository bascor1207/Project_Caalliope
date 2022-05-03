import React, { useEffect, useState } from 'react';
import styles from './Carousel.module.css';

//fetch un tableau de livre avec l'ancienne api
const HomeCarousel = () =>{
		const [book, setBook] = useState("");
  		const [error, setError] = useState("");
  
    useEffect(() => {
      fetch("https://openlibrary.org/works/OL82563W.json")
        .then((response) => response.json())
        .then((book) => setBook(book))
        .catch(setError);
    }, []);
		return (
			<div className={styles.carousel}>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg" alt={book.title}/>
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg" alt={book.title} />
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg"  alt={book.title}/>
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg"  alt={book.title}/>
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg" alt={book.title}/>
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg" alt={book.title}/>
				</div>
				<div className={styles.col}>
					<img src="https://covers.openlibrary.org/b/id/8483863-M.jpg" alt={book.title}/>
				</div>
			</div>
		);
	}

export default HomeCarousel;
