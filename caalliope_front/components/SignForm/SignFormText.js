import React from "react";
import styles from './SignFormText.module.css';

function SignFormText({ children, ...restProps }) {
  return (
    <p className={styles['sign-form-text']} {...restProps}>
      {children}
    </p>
  );
}

export default SignFormText;
