const userSagaCard = ({book, title}) => {
    return(
        <div class="card">
            <h5 class="card-header">title</h5>
            <div class="card-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            book.title
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                nombre de tomes : 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default userSagaCard;