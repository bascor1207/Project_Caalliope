import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import styles from '../components/Header/HeaderStyles.module.css';

function HeaderCompound({ children }) {
  return (
    <HeaderWrapper className={styles['header-wrapper-home']}>
      <div>
        <NavBar/>
      </div>
      {children}
    </HeaderWrapper>
  );
}

export default HeaderCompound;
