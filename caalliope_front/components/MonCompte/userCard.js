import LeftNavBar from "./navBar";

const userCard = ({user}) => {
    return(
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{user}</h5>
            </div>
            <ul class="list-group list-group-flush">
                < LeftNavBar />
            </ul>
        </div>
    );
}

export default userCard;