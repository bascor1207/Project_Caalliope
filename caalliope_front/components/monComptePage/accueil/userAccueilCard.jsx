import SuggestBookList from './suggestBookList';

const userAccueilCard = () => {
    return(
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recommandation de livres</h5>
                <a href="#" class="btn btn-primary">Actualiser</a>
                < SuggestBookList />
            </div>
        </div>
    );
}

export default userAccueilCard;