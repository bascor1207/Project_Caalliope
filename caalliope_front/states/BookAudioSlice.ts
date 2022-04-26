import {createAsyncThunk, createSlice} from "@reduxjs/toolkit";

export const fetchBooks = createAsyncThunk(
    'books/fetchBooks',
    async (test, { rejectWithValue }) => {
    try {
        const response = await fetch('https://www.googleapis.com/books/v1/volumes?q=isbn:9780807286005=AIzaSyAo0g_07hgg3VLl_cWbJjzAbz8S3-Abkt4')
        if (!response.ok) {
        throw new Error('An error occurred while fetching heroes.');
        }

        return await response.json();
    } catch (e) {
        return rejectWithValue(`Une erreur est survenue : ${e.message}`)
    }
    }
)

export const BooksSlice = createSlice({
    name: 'BooksSlice',
    initialState: {
    search: '',
    genre: '',
    type: '',
    books: [],
    loading: true,
    error: null,
    },
    reducers: {
        setSearch: (state, action) => {
            state.search = action.payload;
            state.genre = action.payload;
            state.type = action.payload;
        }
    },
    extraReducers: (builder) => {
    builder
        .addCase(fetchBooks.pending, (state, action) => {
        state.loading = true;
        state.error = null;
        })
        .addCase(fetchBooks.fulfilled, (state, action) => {
        state.books = action.payload;
        state.loading = false;
        })
        .addCase(fetchBooks.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload;
        })
    }
})

export const { setSearch } = BooksSlice.actions;
export default BooksSlice.reducer;