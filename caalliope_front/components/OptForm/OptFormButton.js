import Image from "next/image";
import React from "react";
import styles from './OptFormButton.module.css';

function optFormButton({ children, ...restProps }) {
  return (
    <div>
      <a className={styles['otpform-button']} href="/signup" {...restProps}>
        {children}
        <img
          className={styles['otpform-button-image']}
          src="../images/icons/chevron-right.png"
          alt="Try Now"
        />
      </a>
    </div>
  );
}

export default optFormButton;
