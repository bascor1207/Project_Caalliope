import { useRouter } from "next/router";
import { useAuth } from "../context/authUserProvider";
import NavBar from "../components/Header/NavBar";
import UserCard from '../components/MonCompte/userCard';

const userPage = () => {
    const { autUser, loading } = useAuth();
    const router = useRouter();
    const { userId } = useParams();

    useEffect(() => {
        if (!loading && !autUser)
            router.push('/user/:userId')
    }, [autUser, loading]);

    return(
        <>
        <HeaderWrapper className={styles['header-wrapper-browse']}>
          <NavBar/>
          <FeatureWrapper>
            <UserCard key={userId} book={userId}/>
          </FeatureWrapper>
        </HeaderWrapper>
        <FooterCompound />
      </>
    );
}

export default userPage;