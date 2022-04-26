import React from "react";
import Logo from "./Logo";
import { useAuth } from "../../context/authUserProvider";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';
import Link from "next/link";
import Bibliotheque from '../../pages/BrowsePage';

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
      <Link href="/">
      <a><Logo/></a>
      </Link>
    </div>
    <div className="col">
    <Link href="/BrowsePage" >
      <a><span> Bibliothèque </span></a>
    </Link>
    </div>
    <div className={styles.sign}>
      <div clasName="col">
    <a><SignInButton/></a>
    </div>
    <></>
    <div className="col">
    <Link href="/inscriptionPage" passHref>
    <a><span className={styles.sign}> Sign up </span></a>
      </Link>
    </div>
    </div>
    </div>
  )
}

export default NavBar;