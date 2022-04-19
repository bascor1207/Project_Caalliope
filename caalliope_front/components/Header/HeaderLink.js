import React from "react";
import styles from './HeaderStyles.css';

function HeaderLink({ children, ...restProps }) {
  return (
    <div className={styles["header-link"]}>
      <a {...restProps}>{children}</a>
    </div>
  );
}

export default HeaderLink;
