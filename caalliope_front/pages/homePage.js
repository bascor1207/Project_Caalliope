import React from "react";
import HeaderCompound from "../compounds/HeaderCompound";
import JumboCompound from "../compounds/JumboCompound";
import Seperator from "../components/Seperator/Seperator";
import AccordionCompound from "../compounds/AccordionCompound";
import FooterCompound from "../compounds/FooterCompound";
import styles from '../styles/Home.module.css';

function HomePage() {
  return (
    <div className={styles.container}>
      <HeaderCompound/>
      <JumboCompound />
      <AccordionCompound />
      <Seperator />
      <FooterCompound />
    </div>
  );
}

export default HomePage;