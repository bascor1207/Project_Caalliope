import React from "react";
import styles from './HeaderStyles.module.css';

function Logo({ children, ...restProps }) {
  return (
    <div>
      <a href="/" {...restProps}>
        {children}
        <img className={styles.logo} href="/" src="./images/misc/logo.svg" alt="Netflix logo" />
      </a>
    </div>
  );
}

export default Logo;
