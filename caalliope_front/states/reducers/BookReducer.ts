export const SET_SEARCH = 'SET_SEARCH';
<<<<<<< Updated upstream
export const SET_NEWBOOK = 'SET_NEWBOOK';
export const SET_TOPBOOK = 'SET_TOPBOOK';

export const initialState = {
  search: '',
  newBook: false,
  topBook: false
=======

export const initialState = {
  search: '',
>>>>>>> Stashed changes
};

export const BookReducer = (state, action) => {
  switch (action.type) {
    case SET_SEARCH:
      return {
        ...state,
        search: action.payload,
      }
<<<<<<< Updated upstream
    case SET_NEWBOOK:
      return {
        ...state,
        newBook: action.payload,
      }
    case SET_TOPBOOK:
      return {
        ...state,
        topBook: action.payload,
      }
=======
>>>>>>> Stashed changes

    default:
      return state;
  }
}