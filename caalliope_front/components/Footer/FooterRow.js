import React from "react";
import styles from './FooterRow.module.css';

function FooterRow({ children, ...restProps }) {
  return (
    <div className={styles.row} {...restProps}>
      {children}
    </div>
  );
}

export default FooterRow;
