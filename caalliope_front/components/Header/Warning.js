import React from "react";
import styles from './HeaderStyles.module.css';

function Warning({ children, ...restProps }) {
  return (
    <h2 className={styles.warning} {...restProps}>
      {children}
    </h2>
  );
}

export default Warning;
