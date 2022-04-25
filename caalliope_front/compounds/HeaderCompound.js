import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import styles from '../components/Header/HeaderStyles.module.css';
import FeatureWrapper from '../components/Header/FeatureWrapper';
import FeatureTitle from '../components/Header/FeatureTitle';


function HeaderCompound({ children }) {
  return (
    <HeaderWrapper className={styles['header-wrapper-home']}>
      <div>
        <NavBar/>
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
