import React from "react";
import styles from './HeaderStyles.module.css';

function FeatureSubTitle({ children, ...restProps }) {
  return (
    <h2 className={styles['feature-subtitle']} {...restProps}>
      {children}
    </h2>
  );
}

export default FeatureSubTitle;
