import BookItem from "../components/homePage/BookItem";
import NewBookList from "../components/homePage/NewBookList";
import TopBookList from "../components/homePage/TopBookList"

const date = new Date().getFullYear();

const HomePage = () => {
    return(
        <Provider store={store}>
            <div class="form_home">
                <div className="bookItem">
                    < AudioBook />
                </div>
                <div className="carousel_newBookList">
                    < NewBookList  date={date}/>
                </div>
                <div className="carousel_topBookList">
                    < TopBookList />
                </div>
            </div>
        </Provider>
    );
}

export default HomePage;