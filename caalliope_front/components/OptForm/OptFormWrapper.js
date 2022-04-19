import React from "react";
import styles from './OptFormWrapper.module.css';

function OptFormWrapper({ children, ...restProps }) {
  return (
    <div className={styles['otpform-wrapper']} {...restProps}>
      {children}
    </div>
  );
}

export default OptFormWrapper;
