import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import SigninButton from "../components/Header/SigninButton";
import styles from '../components/Header/HeaderStyles.module.css';
import Link from "next/link";

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
