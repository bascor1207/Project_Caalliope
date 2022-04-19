import React from "react";
import styles from './SignFormBase.module.css';

function SignFormBase({ children, ...restProps }) {
  return (
    <form className={styles['sign-form-base']} {...restProps}>
      {children}
    </form>
  );
}

export default SignFormBase;
