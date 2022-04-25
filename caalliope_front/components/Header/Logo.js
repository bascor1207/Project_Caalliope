import Image from "next/image";
import Link from "next/link";
import React from "react";
import styles from './HeaderStyles.module.css';

function Logo() {
  return (
    <div>
      <Link href="/homePage" passHref>
        <Image className={styles.logo} href="/" src='/../public/logo.png' alt=" logo" width="50" height="50"/>
      </Link>
    </div>
  );
}

export default Logo;