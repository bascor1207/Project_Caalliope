import { configureStore } from '@reduxjs/toolkit';
import { BooksReducer } from './BooksSlice';

const reducer = {
  books: BooksReducer,
};

const store = configureStore({
  reducer,
});

export default store;