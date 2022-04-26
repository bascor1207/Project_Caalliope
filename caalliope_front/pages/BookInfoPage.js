import React from "react";
import BookItem from '../components/bibliotheque/BookItem';
import FeatureSubTitle from "../components/Header/FeatureSubTitle";
import FeatureWrapper from "../components/Header/FeatureWrapper";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import Logo from "../components/Header/Logo";
import NavBar from "../components/Header/NavBar";
import FooterCompound from "../compounds/FooterCompound";

function BookInfoPage() {
    const { bookId } = useParams();

    return (
        <>
            <HeaderWrapper className={styles['header-wrapper-browse']}>
                <NavBar className={styles['navbar-browse']}>
                <Logo />
                </NavBar>
                <FeatureWrapper>
                <FeatureSubTitle className={styles['feature-title-browse']}>
                    Information sur le livre
                </FeatureSubTitle>
                <BookItem key={bookId} book={bookId} />
                </FeatureWrapper>
            </HeaderWrapper>
            <FooterCompound />
        </>
    );
}

export default BookInfoPage;