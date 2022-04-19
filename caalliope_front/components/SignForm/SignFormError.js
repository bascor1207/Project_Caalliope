import React from "react";
import styles from './SignFormError.module.css';

function SignFormError({ children, ...restProps }) {
  return (
    <div className={styles['sign-form-error']}{...restProps}>
      {children}
    </div>
  );
}

export default SignFormError;
