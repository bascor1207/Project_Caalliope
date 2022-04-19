import React from "react";
import styles from './FooterWrapper.module.css';

function FooterWrapper({ children, ...restProps }) {
  return (
    <footer className={styles.wrapper} {...restProps}>
      {children}
    </footer>
  );
}

export default FooterWrapper;
