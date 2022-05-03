import AccueilCard from './Accueil/AccueilCard';
import UserInfo from './Infos/userInfo';
import LecturesCard from './EnCours/lecturesCard';
import Link from "next/link";

const LeftNavBar = () => {
    return(
        <ul class="nav flex-column">
            <li class="nav-item">
                <Link href="/userAccueil">Accueil</Link>
            </li>
            <li class="nav-item">
                <Link href="/lecturesCard">Mes lectures</Link>
            </li>
            <li class="nav-item">
                <Link href="/">Ma pile à lire</Link>
            </li>
            <li class="nav-item">
                <Link href="/">Mes livres lus</Link>
            </li>
            <li class="nav-item">
                <Link href="/">Livres abandonnés</Link>
            </li>
            <li class="nav-item">
                <Link href="/">Mes Sagas</Link>
            </li>
            <li class="nav-item">
                <Link href="/">Wishlist</Link>
            </li>
            <li class="nav-item">
                <Link href="/userInfo">Mes informations</Link>
            </li>
        </ul>
    );
}

export default LeftNavBar;