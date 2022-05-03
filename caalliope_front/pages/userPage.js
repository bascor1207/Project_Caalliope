import { auth } from "../firebase/firebase";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FooterCompound from "../compounds/FooterCompound";
import NavBar from "../components/Header/NavBar";
import UserCard from '../components/MonCompte/userCard';
import styles from '../components/Header/HeaderStyles.module.css'


const UserPage = () => {
  const user = auth.currentUser;
  if (user) {
    console.log(user)
  }

    return(
        <>
        <HeaderWrapper className={styles['header-wrapper-home']}>
          <NavBar/>
          <FeatureWrapper>
            <UserCard user={user}/>
          </FeatureWrapper>
        </HeaderWrapper>
        <FooterCompound />
      </>
    );
}

export default UserPage;