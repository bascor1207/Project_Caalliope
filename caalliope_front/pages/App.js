import HomePage from './homePage'
import ConnecPage from './connecPage'
import Footer from '../components/Footer'
import { BrowserRouter, Route, Routes } from 'react-router-dom'

const App = () => {
  return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<HomePage />} />
          <Route path="/connection" element={<ConnecPage />} />
        </Routes>
      </BrowserRouter>
      <footer className="footer">
        <Footer />
      </footer>
    </div>
  );
};

export default App;