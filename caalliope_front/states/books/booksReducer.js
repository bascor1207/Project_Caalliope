export const SET_NEWBOOK = 'SET_NEWBOOK';
export const SET_TOPBOOK = 'SET_TOPBOOK';

export const initialState = {
  newBook: '',
  topBook: '',
};

export const booksReducer = (state, action) => {
  switch (action.type) {
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

    default:
      return state;
  }
}