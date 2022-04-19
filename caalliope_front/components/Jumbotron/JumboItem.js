import React from "react";
import styles from './JumboItem.module.css';

function JumboItem({ children, ...restProps }) {
  return (
    <div className={styles['jumbo-item']}{...restProps}>
      {children}
    </div>
  );
}

export default JumboItem;
