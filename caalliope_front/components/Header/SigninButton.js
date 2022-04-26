import Link from "next/link";
import React from "react";
import styles from './SignInButton.module.scss';

function SigninButton({}) {
  return (
    <div>
       <Link href="/connectPage" passHref>
          <span className={styles.span}>Sign In</span>
        </Link>
    </div>
  );
}

export default SigninButton;
