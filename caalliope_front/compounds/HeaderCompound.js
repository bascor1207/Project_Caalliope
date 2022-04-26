import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import styles from '../components/Header/HeaderStyles.module.css';
import JumboTitle from "../components/Jumbotron/JumboTitle";

function HeaderCompound({ children }) {
  return (
    <HeaderWrapper className={styles['header-wrapper-home']}>
      <div>
        <NavBar/>
      </div>
      <JumboTitle className={styles['jumbo-title']}>Unlimited books, comics and more</JumboTitle>
    </HeaderWrapper>
  );
}

export default HeaderCompound;
