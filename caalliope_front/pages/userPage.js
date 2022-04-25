import HeaderCompound from "../compounds/HeaderCompound";
import Seperator from "../components/Seperator/Seperator";
import FooterCompound from "../compounds/FooterCompound";
import { useEffect } from "react";
import { useRouter } from "next/router";
import { useAuth } from "../firebase/context/authUserProvider";

const userPage = () => {
    const { autUser, loading } = useAuth();
    const router = useRouter();

    useEffect(() => {
        if (!loading && !autUser)
            router.push('/userPage')
    }, [autUser, loading])

    return(
        <>
            <HeaderCompound/>
            <Seperator />

            <Seperator />
            <FooterCompound />
        </>
    );
}

export default userPage;