import Image from "next/image";
import React, { useContext } from "react";
import AccordionContext from "./AccordionContext";
import styles from './AccordionHeader.module.css';

function AccordionHeader({ children, ...restProps }) {
  const [AccordionShow, setAccordionShow] = useContext(AccordionContext);

  function handleClick() {
    setAccordionShow(!AccordionShow);
  }

  return (
    <div className={styles.header} onClick={handleClick} {...restProps}>
      {children}
      {AccordionShow ? (
       null
      ) : (
        null
      )}
    </div>
  );
}

export default AccordionHeader;
