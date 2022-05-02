import SuggestList from './suggestList';

const userAccueilCard = () => {
    return(
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recommandation de livres</h5>
                <a href="#" class="btn btn-primary">Actualiser</a>
                < SuggestList />
            </div>
        </div>
    );
}

export default userAccueilCard;