const bookListItem = ({book}) => {
    return(
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="..."/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">book.title</h5>
                        <p>book.authors</p>
                        <p>book.pageCount</p>
                        <p>book.ratingCount</p>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default bookListItem;