import React from "react";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FooterCompound from "../compounds/FooterCompound";
import SearchBook from '../components/bibliotheque/searchBook';

function BrowsePage() {
  return (
    <>
      <HeaderWrapper>
        <NavBar/>
        <FeatureWrapper>
        <FeatureSubTitle>
            Rechercher un livre
        </FeatureSubTitle>
        <SearchBook />
        </FeatureWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default BrowsePage;
