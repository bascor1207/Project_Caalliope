import {createAsyncThunk, createSlice} from "@reduxjs/toolkit";

export const fetchHeroes = createAsyncThunk(
  'books/fetchBooks',
  async (test, { rejectWithValue }) => {
    try {
      const response = await fetch('https://www.googleapis.com/books/v1/volumes?q=');

      if (!response.ok) {
        throw new Error('An error occurred while fetching books.');
      }

      return await response.json();
    } catch (e) {
      return rejectWithValue(`Une erreur est survenue : ${e.message}`)
    }
  }
)