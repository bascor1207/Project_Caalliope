import React from "react";
import JumboWrapper from "../components/Jumbotron/JumboWrapper";
import JumboItem from "../components/Jumbotron/JumboItem";
import JumboTextWrapper from "../components/Jumbotron/JumpoTextWrapper";
import JumboTitle from "../components/Jumbotron/JumboTitle";
import JumboSubTitle from "../components/Jumbotron/JumboSubTitle";
import JumboData from "../data/jumbo.json";
import Seperator from "../components/Seperator/Seperator";
import CarouselDesktop from "../components/HomePage/Carousel";
import AudioBook from "../components/HomePage/AudioBook";
import NewBookList from "../components/HomePage/NewBookList";
import TopBookList from "../components/HomePage/TopBookList";

function JumboCompound() {
  return (
    <JumboWrapper>
      {JumboData.map((item) => (
        <>
        <AudioBook/>
          <JumboItem key={item.id}>
            <JumboSubTitle>
              <NewBookList/>
            </JumboSubTitle>
            <TopBookList/>
          </JumboItem>
          <Seperator />
        </>
      ))}
    </JumboWrapper>
  );
}

export default JumboCompound;
