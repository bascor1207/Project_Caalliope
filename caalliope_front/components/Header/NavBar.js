import React from "react";
import Logo from "./Logo";
import { useAuth } from "../../context/authUserProvider";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';
import Link from "next/link";


function NavBar({ children, ...restProps }) {
  const { autUser, loading } = useAuth();

  const isLog = () => {
    if (!loading && !autUser){
      <><div className="col">
        <Link href="/connect" passHref>
          <span> Se déconnecter </span>
        </Link>
      </div>
      <div className="col">
          <Link href="/browse" passHref>
            <span> Votre compte </span>
          </Link>
        </div></>
    } else {
      <><div className="col">
        <Link href="/connect" passHref>
          <span> Se connecter </span>
        </Link>
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
  </div>
  )
}

export default NavBar;