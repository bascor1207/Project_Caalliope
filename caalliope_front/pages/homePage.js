import BookItem from "../components/BookItem";
import CarouselBooks from "../components/CarouselBooks";
import styles from '../styles/Home.module.css';

const HomePage = () => {
    return(
        <div class="form_home">
            <div class="suggest_audio">
                < BookItem />
            </div>
            <div className={styles.carousel}>
                < CarouselBooks />
            </div>
            <div className={styles.carousel}>
                < CarouselBooks />
            </div>
        </div>
    );
}

export default HomePage;