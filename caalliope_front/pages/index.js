import HomePage from './homePage';
import ConnectPage from './connectPage';
import InscriptionPage from './inscriptionPage';
import UserPage from './userPage';
import BookInfoPage from './BookInfoPage';
import Bibliotheque from './BrowsePage';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  useRouteMatch,
  useParams,
} from 'react-router-dom';
import styles from '../styles/Home.module.css';

const Home = () => {
  const match = useRouteMatch();
  return (
    <Router>
      <Switch>
        <Route path="/" element={<HomePage/>}/>
        <Route path="/connection" element={<ConnectPage/>}/>
        <Route path="/inscription" element={<InscriptionPage/>}/>
        <Route path="/user/:userId" element={<UserPage/>}/>
        <Route path="/browse" element={<Bibliotheque/>}/>
        <Route path="/browse/:bookId" element={<BookInfoPage/>}/>
      </Switch>
    </Router>
  );
}

export default Home;