import React, {createContext, useReducer} from 'react';
import {booksReducer, initialState} from "./booksReducer";

export const BooksContext = createContext(null);

const BooksProvider = ({children}) => {
  const [state, dispatch] = useReducer(booksReducer, initialState);

  return (
    <BooksContext.Provider value={[state, dispatch]}>
      {children}
    </BooksContext.Provider>
  );
};

export default BooksProvider;