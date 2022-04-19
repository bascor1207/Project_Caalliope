import React from "react";
import JumboWrapper from "../components/Jumbotron/JumboWrapper";
import JumboItem from "../components/Jumbotron/JumboItem";
import JumboTextWrapper from "../components/Jumbotron/JumpoTextWrapper";
import JumboTitle from "../components/Jumbotron/JumboTitle";
import JumboSubTitle from "../components/Jumbotron/JumboSubTitle";
import JumboData from "../data/jumbo.json";
import Seperator from "../components/Seperator/Seperator";

function JumboCompound() {
  return (
    <JumboWrapper>
      {JumboData.map((item) => (
        <>
          <JumboItem key={item.id}>
            <JumboTextWrapper>
              <JumboTitle>{item.title}</JumboTitle>
              <JumboSubTitle>{item.subTitle}</JumboSubTitle>
            </JumboTextWrapper>
          </JumboItem>
          <Seperator />
        </>
      ))}
    </JumboWrapper>
  );
}

export default JumboCompound;
