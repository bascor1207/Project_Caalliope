import React, { useState } from "react";
import Logo from "./Logo";
import { auth } from "../../firebase/firebase";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';
import Link from "next/link";
import { Button } from "@mui/material";
import {logOut} from '../../pages/utilis/logOut';

function NavBar({ children, ...restProps }) {
  const [userLogged, setUserLogged] = useState(false);

  const user = auth.currentUser;
  if (user) {
    setUserLogged(true);
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
      <a><span> Library </span></a>
    </Link>
    </div>
    {userLogged ? (
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
    ) : (
      <>
      <div className="col">
        <Link href="/userPage" passHref>
          <span> My space </span>
        </Link>
      </div>
      <div className="col">
          <Button onClick = {logOut}> Sign out </Button>
      </div>
      </>
    )}
    </div>
  )
}

export default NavBar;