import {useDispatch, useSelector} from "react-redux";
import {setSearch} from "../../states/BooksSlice.ts";

const options = [];

const SearchBook = () => {
    const books = useSelector((store) => store.books);
    const dispatch = useDispatch();

    const handleClick = (event) => {
        dispatch(setSearch(event.target.value))
    }

    return(
        <div className="card w-75">
            <div className="card-body">
                <form className="d-flex">
                    <input 
                    className="form-control md-2" 
                    type="search" 
                    placeholder="Recherche" 
                    value=""
                    aria-label="Search"/>

                    <button 
                    className="btn btn-outline-success" 
                    type="submit"
                    onClick={handleClick}>
                        Rechercher
                    </button>
            
                    <div className="dropdown">
                        <select className="form-select" value="" aria-label="Default select example">
                            <option selected>Genre</option>
                            <option value="1">Fantastique</option>
                            <option value="2">Science-fiction</option>
                            <option value="3">Romance</option>
                            <option value="4">Historique</option>
                            <option value="5">Thriller</option>
                            <option value="6">Polars</option>
                            <option value="7">Horreur</option>
                            <option value="8">Feel-good</option>
                            <option value="9">Aventure</option>
                            <option value="10">Espionnage</option>
                            <option value="11">Contemporain</option>
                            <option value="12">Romance</option>
                            <option value="13">Bit-lit</option>
                        </select>
                    </div>
                    
                    <div className="dropdown">
                        <select className="form-select" value="" aria-label="Default select example">
                            <option selected>Type</option>
                            <option value="1">Roman</option>
                            <option value="2">BD</option>
                            <option value="3">Manga</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default SearchBook;