import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import Logo from "../components/Header/Logo";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FooterCompound from "../compounds/FooterCompound";
import SearchBookList from '../components/bibliotheque/searchBookList';

function BrowsePage() {
  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-browse']}>
        <NavBar/>
        <FeatureWrapper>
        <FeatureSubTitle className={styles['feature-title-browse']}>
            Rechercher un livre
        </FeatureSubTitle>
        <SearchBookList />
        </FeatureWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default BrowsePage;
