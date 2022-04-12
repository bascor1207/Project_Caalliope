export const SEARCH = "SEARCH";

const initialState = {
  search: '',
  loading: true,
};

const bookReducer = (state = initialState, action) => {
  switch (action.type) {
    case SEARCH:
      return {
        ...state,
        search: action.payload,
      };

    default:
      return state;
  }
};

export default bookReducer;