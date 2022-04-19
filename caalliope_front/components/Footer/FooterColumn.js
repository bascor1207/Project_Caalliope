import React from "react";
import styles from './FooterColumn.module.css';

function FooterColumn({ children, ...restProps }) {
  return (
    <div className={styles.column} {...restProps}>
      {children}
    </div>
  );
}

export default FooterColumn;
