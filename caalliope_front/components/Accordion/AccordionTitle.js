import React from "react";
import styles from './AccordionTitle.module.css';

function AccordionTitle({ children, ...restProps }) {
  return (
    <h1 className={styles.title} {...restProps}>
      {children}
    </h1>
  );
}

export default AccordionTitle;
