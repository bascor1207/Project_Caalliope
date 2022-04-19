import React from "react";
import styles from './FooterTitle.module.css';

function FooterTitle({ children, ...restProps }) {
  return (
    <a href="#" className={styles.title} {...restProps}>
      {children}
    </a>
  );
}

export default FooterTitle;
