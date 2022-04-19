import React from "react";
import styles from './OptFormEmail.module.css';

function optFormEmail({ ...resProps }) {
  return <input className={styles['otpform-email']} {...resProps} />;
}

export default optFormEmail;
