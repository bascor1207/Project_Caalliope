import { UserContext } from "../providers/UserProvider";
import NavBar from "../components/Header/NavBar";
import UserCard from '../components/MonCompte/userCard';

const userPage = () => {
  const user = useContext(UserContext);
  console.log(user);

    return(
        <>
        <HeaderWrapper className={styles['header-wrapper-browse']}>
          <NavBar/>
          <FeatureWrapper>
            <UserCard key={user.id} user={user}/>
          </FeatureWrapper>
        </HeaderWrapper>
        <FooterCompound />
      </>
    );
}

export default userPage;