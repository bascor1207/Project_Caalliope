import navBar from "./navBar";

const userCard = ({user}) => {
    return(
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap"/>
            <div class="card-body">
                <h5 class="card-title">{user.nom} {user.prenom}</h5>
            </div>
            <ul class="list-group list-group-flush">
                < navBar />
            </ul>
        </div>
    );
}

export default userCard;