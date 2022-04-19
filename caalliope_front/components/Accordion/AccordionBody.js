import React, { useContext } from "react";
import AccordionContext from "./AccordionContext";
import styles from './AccordionBody.module.css';

function AccordionBody({ children, ...restProps }) {
  const [AccordionShow, setAccordionShow] = useContext(AccordionContext);

  return AccordionShow ? (
    <div className={styles.body} {...restProps}>
      {children}
    </div>
  ) : null;
}
export default AccordionBody;
