import Link from "next/link";
import React from "react";

function SigninButton({}) {
  return (
    <div>
       <Link href="/connectPage" passHref>
          <span>Sign In</span>
        </Link>
    </div>
  );
}

export default SigninButton;
