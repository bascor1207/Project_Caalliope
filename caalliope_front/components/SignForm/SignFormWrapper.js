import React from "react";
import styles from './SignFormWrapper.module.css';

function SignFormWrapper({ children, ...restProps }) {
  return (
    <div className={styles['sign-form-wrapper']} {...restProps}>
      {children}
    </div>
  );
}

export default SignFormWrapper;
