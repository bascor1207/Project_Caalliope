import NewBookList from "../components/homePage/NewBookList";
import TopBookList from "../components/homePage/TopBookList"
import AudioBook from "../components/homePage/AudioBook";
import { Provider } from "react-redux";
import store from "../states/store";
import styles from '../styles/Home.module.css';

const date = new Date().getFullYear();

const HomePage = () => {
    return(
        <Provider store={store}>
            <div className={styles.main}>
                <div className={styles.card}>
                    < AudioBook />
                </div>
                <div className={styles.carousel}>
                    < NewBookList  date={date}/>
                </div>
                <div className={styles.carousel}>
                    < TopBookList />
                </div>
            </div>
        </Provider>
    );
}

export default HomePage;