import React from "react";

function JumboWrapper({ children, ...restProps }) {
  return (
    <section className="" {...restProps}>
      {children}
    </section>
  );
}

export default JumboWrapper;
