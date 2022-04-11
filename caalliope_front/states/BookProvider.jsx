import React, {createContext, useReducer} from 'react';
import {BookReducer, initialState} from "./reducers/Bookreducer";

export const BookContext = createContext(null);

const BookProvider = ({children}) => {
  const [state, dispatch] = useReducer(BookReducer, initialState);

  return (
    <HeroesContext.Provider value={[state, dispatch]}>
      {children}
    </HeroesContext.Provider>
  );
};

export default BookProvider;