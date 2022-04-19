import React from "react";
import styles from './JumboImage.module.css';

function JumboImage({ ...restProps }) {
  return <img className={styles['jumbo-image']} alt="" {...restProps} />;
}

export default JumboImage;
