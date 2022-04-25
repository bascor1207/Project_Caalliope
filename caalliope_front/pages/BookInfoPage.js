import React from "react";
import BookItem from '../components/Books/bibliotheque/BookItem';

function BookInfoPage() {
    const { bookId } = useParams();

    return (
        <>
            <HeaderWrapper className={styles['header-wrapper-browse']}>
                <NavBar className={styles['navbar-browse']}>
                <Logo />
                </NavBar>
                <FeatureWrapper>
                <FeatureTitle className={styles['feature-title-browse']}>
                    Information sur le livre
                </FeatureTitle>
                <BookItem key={bookId} book={bookId} />
                </FeatureWrapper>
            </HeaderWrapper>
            <FooterCompound />
        </>
    );
}

export default BookInfoPage;