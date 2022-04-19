import React from "react";
import styles from './HeaderStyles.module.css';

function PlayButton({ children, ...restProps }) {
  return (
    <button className={styles['play-button']} type="button" {...restProps}>
      {children}
    </button>
  );
}

export default PlayButton;
