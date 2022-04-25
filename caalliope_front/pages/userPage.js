import Seperator from "../components/Seperator/Seperator";
import { useEffect } from "react";
import { useRouter } from "next/router";
import { useAuth } from "../firebase/context/authUserProvider";
import NavBar from "../components/Header/NavBar";

const userPage = () => {
    const { autUser, loading } = useAuth();
    const router = useRouter();

    useEffect(() => {
        if (!loading && !autUser)
            router.push('/userPage')
    }, [autUser, loading])

    return(
        <>
            <NavBar/>
            <Seperator />
        </>
    );
}

export default userPage;