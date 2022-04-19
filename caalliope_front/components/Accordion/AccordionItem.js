import React, { useState } from "react";
import AccordionContext from "./AccordionContext";
import styles from './AccordionItem.module.css';

function AccordionItem({ children, ...restProps }) {
  const [AccordionShow, setAccordionShow] = useState(false);
  return (
    <AccordionContext.Provider
      value={[AccordionShow, setAccordionShow]}
      {...restProps}
    >
      <div className={styles.item}>{children}</div>
    </AccordionContext.Provider>
  );
}

export default AccordionItem;
