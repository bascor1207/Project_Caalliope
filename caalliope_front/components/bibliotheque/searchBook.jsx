import {useDispatch, useSelector} from "react-redux";
import {setSearch} from "../../states/BooksSlice";

const options = [];

const searchBook = () => {
    const books = useSelector((store) => store.books);
    const dispatch = useDispatch();

    const handleClick = (event) => {
        dispatch(setSearch(event.target.value))
    }

    return(
        <div class="card w-75">
            <div class="card-body">
                <form class="d-flex">
                    <input 
                    class="form-control me-2" 
                    type="search" 
                    placeholder="Recherche" 
                    value={books.search}
                    aria-label="Search"/>

                    <button 
                    class="btn btn-outline-success" 
                    type="submit"
                    onClick={handleClick}>
                        Rechercher
                    </button>
            
                    <div class="dropdown">
                        <select class="form-select" value={books.genre} aria-label="Default select example">
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
                    
                    <div class="dropdown">
                        <select class="form-select" value={books.type} aria-label="Default select example">
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

export default searchBook;