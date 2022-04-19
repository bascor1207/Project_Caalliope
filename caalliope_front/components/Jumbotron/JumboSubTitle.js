import React from "react";
import styles from './JumboSubtitle.module.css';

function JumboSubTitle({ children, ...restProps }) {
  return (
    <h2 className={styles['jumbo-subtitle']} {...restProps}>
      {children}
    </h2>
  );
}

export default JumboSubTitle;
