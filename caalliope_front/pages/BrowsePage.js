import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import Logo from "../components/Header/Logo";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureTitle from "../components/Header/FeatureTitle";
import FooterCompound from "../compounds/FooterCompound";
import SearchBookList from '../components/Books/bibliotheque/searchBookList';

function BrowsePage() {
  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-browse']}>
        <NavBar/>
        <FeatureWrapper>
        <FeatureTitle className={styles['feature-title-browse']}>
            Rechercher un livre
        </FeatureTitle>
        <SearchBookList />
        </FeatureWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default BrowsePage;
