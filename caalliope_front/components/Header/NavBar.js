import React from "react";
import Logo from "./Logo";
import SearchBook from "./SearchBook";

function NavBar({ children, ...restProps }) {
  return (
  <div className="container">
    <div className="col">
      <Logo/>
    </div>
    <div className="col">
    <a href="/"/> 
      <span> Bibliothèque </span>
    </div>
    <div className="col">
      <SearchBook></SearchBook>
    </div>
  </div>
  )
}

export default NavBar;
