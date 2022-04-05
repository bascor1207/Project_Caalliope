import {useDispatch, useSelector} from "react-redux";
import {setSearch} from "../../states/BooksSlice";

const searchBook = () => {
    const books = useSelector((store) => store.books);
    const dispatch = useDispatch();

    const handleChange = (event) => {
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
                    onChange={handleChange}
                    aria-label="Search"/>

                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    
                    <div class="dropdown">
<<<<<<< Updated upstream
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Fantasy</a></li>
                            <li><a class="dropdown-item" href="#">Fantastique</a></li>
                            <li><a class="dropdown-item" href="#">Science-fiction</a></li>
                            <li><a class="dropdown-item" href="#">Romance</a></li>
                            <li><a class="dropdown-item" href="#">Historique</a></li>
                            <li><a class="dropdown-item" href="#">Thriller</a></li>
                            <li><a class="dropdown-item" href="#">Polars</a></li>
                            <li><a class="dropdown-item" href="#">Horreur</a></li>
                            <li><a class="dropdown-item" href="#">Feel-good</a></li>
                            <li><a class="dropdown-item" href="#">Aventure</a></li>
                            <li><a class="dropdown-item" href="#">Espionnage</a></li>
                            <li><a class="dropdown-item" href="#">Contemporain</a></li>
                            <li><a class="dropdown-item" href="#">Bit-lit</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Type
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Roman</a></li>
                            <li><a class="dropdown-item" href="#">BD</a></li>
                            <li><a class="dropdown-item" href="#">Manga</a></li>
                            </ul>
                    </div>
=======
                        <select class="form-select" aria-label="Default select example">
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
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Type</option>
                            <option value="1">Roman</option>
                            <option value="2">BD</option>
                            <option value="3">Manga</option>
                        </select>
                    </div>

>>>>>>> Stashed changes
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked/>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Saga
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"/>
                        <label class="form-check-label" for="flexRadioDefault2">
                            One Shot
                        </label>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default searchBook;