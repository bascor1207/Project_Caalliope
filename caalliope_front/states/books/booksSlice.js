import {createSlice} from "@reduxjs/toolkit";

export const BooksSlice = createSlice({
  name: 'BooksSlice',
  initialState: {
    newBook: '',
    books: [],
    error: null,
  },
  reducers: {
    setNewBook: (state, action) => {
      state.newBook = action.payload;
    }
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchBooks.pending, (state, action) => {
        state.error = null;
      })
      .addCase(fetchBooks.fulfilled, (state, action) => {
        state.books = action.payload;
      })
      .addCase(fetchBooks.rejected, (state, action) => {
        state.error = action.payload;
      })
  }
})

export const { setNewBook } = BooksSlice.actions;
export default BooksSlice.reducer;