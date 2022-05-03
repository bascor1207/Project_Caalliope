import { auth } from "../firebase/firebase";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FooterCompound from "../compounds/FooterCompound";
import NavBar from "../components/Header/NavBar";
import UserCard from '../components/MonCompte/userCard';

const userPage = () => {
  const user = auth.currentUser;
  if (user) {
    console.log(user)
  }

    return(
        <>
        <HeaderWrapper>
          <NavBar/>
          <FeatureWrapper>
            <UserCard user={user}/>
          </FeatureWrapper>
        </HeaderWrapper>
        <FooterCompound />
      </>
    );
}

export default userPage;