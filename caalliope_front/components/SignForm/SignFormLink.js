import React from "react";
import styles from './SignFormLink.module.css';

function SignFormLink({ children, ...restProps }) {
  return (
    <a className={styles['sign-form-link']} {...restProps}>
      {children}
    </a>
  );
}

export default SignFormLink;
