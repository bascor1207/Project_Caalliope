import { auth } from "../firebase/firebase";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FooterCompound from "../compounds/FooterCompound";
import NavBar from "../components/Header/NavBar";
import AccueilCard from '../components/MonCompte/Accueil/AccueilCard';

const userAccueil = () => {
  const user = auth.currentUser;
  if (user) {
    console.log(user)
  }

    return(
        <>
        <HeaderWrapper>
          <NavBar/>
          <FeatureWrapper>
            <AccueilCard user={user}/>
          </FeatureWrapper>
        </HeaderWrapper>
        <FooterCompound />
      </>
    );
}

export default userAccueil;