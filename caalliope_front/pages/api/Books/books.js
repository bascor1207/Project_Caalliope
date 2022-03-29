export const fetchBooks = async () => {
    try {
      const response = await fetch('https://www.googleapis.com/books/v1/volumes?q={search terms}');
  
      if (!response.ok) {
        throw new Error('An error occurred while fetching books.');
      }
  
      return await response.json();
    } catch (e) {
      console.error(e);
    }
  }