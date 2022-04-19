import React from "react";
import styles from './HeaderStyles.module.css';

function SigninButton({ children, ...restProps }) {
  return (
    <div>
      <a className={styles['play-button']} href="/signin" {...restProps}>
        {children}
      </a>
    </div>
  );
}

export default SigninButton;
