import React, {useEffect, useState} from 'react';
import Link from 'next/link';

const CardBook = ({book}) => {
    const [data, setData] = useState('');
    const [error, setError] = useState('');

    useEffect(() => {
        fetch("http://covers.openlibrary/b/ibsn/{book.ibsn}-M.jpg")
        .then((response) => response.json())
        .then((data) => setData(data))
        .catch(setError)
    }, []);

    if (error) {
        return <pre>{JSON.stringify(error, null, 2)}</pre>
    }

    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src={data} className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        {book.map((item) => (
                            <Link href={`/browse/${encodeURIComponent(item.edition_key)}`}>
                                <a><h5 className="card-title">{item.title}</h5></a>
                            </Link>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default CardBook;