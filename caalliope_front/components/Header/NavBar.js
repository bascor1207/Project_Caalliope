import React from "react";
import Logo from "./Logo";
import { useAuth } from "../../context/authUserProvider";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';


function NavBar({ children, ...restProps }) {
  const { autUser, loading } = useAuth();

  const isLog = () => {
    if (!loading && !autUser){
      <><div className="col">
        <a href="/connect">
          <span> Se déconnecter </span>
        </a>
      </div>
      <div className="col">
          <a href="/browse">
            <span> Votre compte </span>
          </a>
        </div></>
    } else {
      <><div className="col">
        <a href="/connect">
          <span> Se connecter </span>
        </a>
      </div></>
    }
  }

  return (
  <div className={styles.container}>
    <div className="col">
      <a href="#">
        <Logo/>
      </a>
    </div>
    <div className="col">
    <a href="/browse"> 
      <span> Bibliothèque </span>
    </a>
    </div>
    <div className="col">
      <SignInButton/>
    </div>
    {isLog}
  </div>
  )
}

export default NavBar;