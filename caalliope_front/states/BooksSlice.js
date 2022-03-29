import { createSlice } from '@reduxjs/toolkit';

const BooksSlice = createSlice({
  name: 'books',
  initialState: [],
  reducers: {
    newBooks: (state, action) => {
      newBooks: ''
    },
    topBooks: (state, action) => {
      topBooks: ''
    },
  },
});

export const BooksReducer = BooksSlice.reducer;

export const {
  newBooks,
  topBooks,
} = BooksSlice.actions;