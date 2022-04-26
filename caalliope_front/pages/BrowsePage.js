import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FooterCompound from "../compounds/FooterCompound";
import SearchBookList from '../components/bibliotheque/searchBookList';

function BrowsePage() {
  return (
    <>
      <HeaderWrapper>
        <NavBar/>
        <FeatureWrapper>
        <FeatureSubTitle>
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
