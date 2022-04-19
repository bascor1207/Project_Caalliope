import React from "react";
import styles from './JumboImageWrapper.module.css';

function JumboImageWrapper({ children, ...restProps }) {
  return (
    <div className={styles['jumbo-imagewrapper']} {...restProps}>
      {children}
    </div>
  );
}

export default JumboImageWrapper;
