import React from "react";
import styles from './SignFormButton.module.css';

function SignFormButton({ children, ...restProps }) {
  return (
    <button className={styles['sign-form-Button']}type="submit" {...restProps}>
      {children}
    </button>
  );
}

export default SignFormButton;
