import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import SigninButton from "../components/Header/SigninButton";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureTitle from "../components/Header/FeatureTitle";

import styles from '../components/Header/HeaderStyles.module.css';

function HeaderCompound({ children }) {
  return (
    <HeaderWrapper className={styles['header-wrapper-home']}>
      <div>
      <NavBar className={styles['navbar-home']}>
        <div>
          <button className={styles['home-button']}>Hello</button> 
          <button className={styles['home-button']}>Hello</button> 
          <button className={styles['home-button']}>Hello</button>
        </div>
        <SigninButton>Sign In</SigninButton>
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
