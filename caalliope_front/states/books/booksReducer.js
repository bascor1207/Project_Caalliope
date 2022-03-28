export const SET_NEWBOOK = 'SET_NEWBOOK';

export const initialState = {
  newBook: '',
};

export const booksReducer = (state, action) => {
  switch (action.type) {
    case SET_LOADING:
      return {
        ...state,
        newBook: action.payload,
      }

    default:
      return state;
  }
}