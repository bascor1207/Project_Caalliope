import React from "react";
import styles from './FooterLink.module.css';

function FooterLink({ children, ...restProps }) {
  return (
    <a href="#" className={styles.link} {...restProps}>
      {children}
    </a>
  );
}

export default FooterLink;
