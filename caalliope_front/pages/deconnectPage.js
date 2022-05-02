import { useAuthState } from "react-firebase-hooks/auth";
import { auth, logout } from "../firebase/firebase";

const SignOut = () => {
    logout();
};

export default SignOut;