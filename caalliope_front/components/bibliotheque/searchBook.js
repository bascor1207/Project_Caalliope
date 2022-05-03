import { useState } from "react";
import SearchBookList from "./searchBookList";

const searchBook = () => {
    const [search, setSearch] = useState('');

    const handleChange = (event) => {
        setSearch(event.target.value);
    };

    const handleClick = () => {
        < SearchBookList search={search} />
    };

    return(
        <div className="card w-75">
            <div className="card-body">
                <form className="d-flex">
                    <input 
                    className="form-control me-2" 
                    type="search" 
                    placeholder="Recherche" 
                    value={search}
                    onChange={handleChange}
                    aria-label="Search"/>

                    <button 
                    className="btn btn-outline-success" 
                    type="submit"
                    onClick={handleClick}>
                        Rechercher
                    </button>
                </form>
            </div>
        </div>
    );
}

export default searchBook;