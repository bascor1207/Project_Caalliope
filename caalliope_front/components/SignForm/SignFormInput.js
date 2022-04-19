import React from "react";
import styles from './SignFormInput.module.css';

function SignFormInput({ ...restProps }) {
  return <input className={styles['sign-form-input']} {...restProps} />;
}

export default SignFormInput;
