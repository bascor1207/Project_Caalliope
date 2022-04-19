import React from "react";
import styles from './OptFormText.module.css';


function optFormText({ children, ...restProps }) {
  return (
    <div className={styles['otpform-text']} {...restProps}>
      {children}
    </div>
  );
}

export default optFormText;
