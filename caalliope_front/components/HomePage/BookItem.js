import ReactAudioPlayer from 'react-audio-player';

const BookItem = ({book}) => {

      const handleClick = () => {
        <ReactAudioPlayer
            
        />
      };

    return(
        <div className="card mb-3">
            <div className="row g-0">
                <div className="col-md-4">
                    <img src={book.docs.cover.medium} className="img-fluid rounded-start" alt="..."/>
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title">{book.docs[0].title}</h5>
                        <button value="Ecouter l'extrait audio" onClick={handleClick}></button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BookItem;