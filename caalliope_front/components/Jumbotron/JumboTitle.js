import React from "react";
import styles from './JumboTitle.module.css';

function JumboTitle({ children, ...restProps }) {
  return (
    <h1 className={styles['jumbo-title']} {...restProps}>
      {children}
    </h1>
  );
}

export default JumboTitle;
