import React from "react";
import styles from './SignFormTitle.module.css';

function SignFormTitle({ children, ...restProps }) {
  return (
    <h1 className={styles['sign-form-title']}{...restProps}>
      {children}
    </h1>
  );
}

export default SignFormTitle;
