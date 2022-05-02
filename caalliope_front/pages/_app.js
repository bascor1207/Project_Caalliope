import '../styles/globals.css'
import { Provider } from 'react-redux'
import {wrapper, store} from '../states/store';
import FooterWrapper from '../components/Footer/FooterWrapper';

function MyApp({ Component, pageProps }) {
  return (
    <Provider store={store}>
        <div className="wrapper">
          <Component {...pageProps} />
          <FooterWrapper />
        </div>
    </Provider>
  );
}

export default wrapper.withRedux(MyApp);