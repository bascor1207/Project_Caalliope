import { signOut } from "firebase/auth";
import { auth } from "../../firebase/firebase";

export function logOut () {
    signOut(auth)
     .then(data => console.log(data))
     .catch(error => console.log(error));
};