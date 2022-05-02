import React, {useEffect, useState} from "react";
import Logo from "./Logo";
import { useAuthState } from "react-firebase-hooks/auth";
import { auth, logout } from "../../firebase/firebase";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';
import Link from "next/link";

function NavBar({ children, ...restProps }) {
  const { user, loading, error } = useAuthState();
  const { userLogged, setUserLogged } = useState(false);

  useEffect(() => {
    (async () => {
      if (user) {
        setUserLogged(true);
      }
    })();
  }, [userLogged]);

  return (
  <div className={styles.container}>
    <div className="col">
      <Link href="/">
      <a><Logo/></a>
      </Link>
    </div>
    <div className="col">
    <Link href="/BrowsePage" >
      <a><span> Library </span></a>
    </Link>
    </div>
    {userLogged ? (
      <>
      <div className="col">
        <Link href="/userPage" passHref>
          <span> My space </span>
        </Link>
      </div>
      <div className="col">
        <Link href="/deconnectPage" passHref>
          <span> Sign out </span>
        </Link>
      </div>
      </>
    ) : (
      <>
      <div className="col">
        <Link href="/connectPage" passHref>
          <a><SignInButton/></a>
        </Link>
      </div>
      <div className="col">
        <Link href="/inscriptionPage" passHref>
          <a><span className={styles.sign}> Sign up </span></a>
        </Link>
      </div>
      </>
    )}
    </div>
  )
}

export default NavBar;