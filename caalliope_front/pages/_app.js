import '../styles/globals.css'
import { Provider } from 'react-redux'
import store from '../states/store'
import Footer from '../components/Footer'

function MyApp({ Component, pageProps }) {
  <Provider store={store}>
      <div className="wrapper">
        
        <Component {...pageProps} />
        <Footer />
      </div>
    </Provider>
}

export default MyApp;