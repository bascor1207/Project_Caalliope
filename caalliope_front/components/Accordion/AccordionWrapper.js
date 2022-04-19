import React from "react";
import styles from './AccordionWrapper.module.css';

function AccordionWrapper({ children, ...restProps }) {
  return (
    <section className={styles.wrapper}{...restProps}>
      {children}
    </section>
  );
}

export default AccordionWrapper;
