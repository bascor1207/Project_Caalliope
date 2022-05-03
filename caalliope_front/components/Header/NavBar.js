import React, { useState } from "react";
import Logo from "./Logo";
import { auth } from "../../firebase/firebase";
import SignInButton from "./SigninButton";
import styles from './Navbar.module.scss';
import Link from "next/link";
import { Button } from "@mui/material";
import { signOut } from "firebase/auth";
import { useRouter  } from "next/router";

function NavBar({ children, ...restProps }) {
  const [userLogged, setUserLogged] = useState(false);

  const router = useRouter();

  const user = auth.currentUser;
  if (user) {
    setUserLogged(true);
  }

  const logOut = (e) => {
    e.preventDefault();
    
    signOut(auth).then(function() {
      setUserLogged(false);
      console.log("Successfully signed out.");
      
      router.push("/homePage");
    }).catch(function(error) {
      console.log(error);
      console.log("An error occured");
    })
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