import React from "react";
import styles from './SeperatorStyles.module.css';

function Seperator({ children, ...restProps }) {
  return (
    <div className={styles.seperator} {...restProps}>
      {children}
    </div>
  );
}

export default Seperator;
