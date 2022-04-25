export const fetchBooks = async () => {
    try {
      const response = await fetch('https://www.googleapis.com/books/v1/volumes?q=search+terms&key=AIzaSyAo0g_07hgg3VLl_cWbJjzAbz8S3-Abkt4');
  
      if (!response.ok) {
        throw new Error('An error occurred while fetching books.');
      }
  
      return await response.json();
    } catch (e) {
      console.error(e);
    }
  }