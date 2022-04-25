import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import SigninButton from "../components/Header/SigninButton";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureTitle from "../components/Header/FeatureTitle";
import SearchBook from "../components/Header/SearchBook";
import Logo from '../components/Header/Logo';

import styles from '../components/Header/HeaderStyles.module.css';
import Link from "next/link";

function HeaderCompound({ children }) {
  return (
    <HeaderWrapper className={styles['header-wrapper-home']}>
      <div>
        <Logo/>
      <NavBar className={styles['navbar-home']}>
        <Link href="/connectPage" passHref>
          <SigninButton>Sign In</SigninButton>
        </Link>
      </NavBar>
      </div>
      <div>
      <FeatureWrapper className={styles['feature-wrapper-home']}>
        <div className={styles.title}>
        <FeatureTitle className={styles['feature-title-home']}>
          Unlimited books, comics and more.
        </FeatureTitle>
        </div>
      </FeatureWrapper>
      </div>
      {children}
    </HeaderWrapper>
  );
}

export default HeaderCompound;
