
const navBar = () => {
    return(
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mes lectures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ma pile à lire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mes livres lus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Livres abandonnés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mes Sagas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mes informations</a>
            </li>
        </ul>
    );
}

export default navBar;