import React, { useState } from "react";
import { useRouter } from "next/router";
import { signInWithEmailAndPassword } from "firebase/auth";
import { auth, signInWithGoogle } from "../firebase/firebase";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import FooterCompound from "../compounds/FooterCompound";
import SignFormWrapper from "../components/SignForm/SignFormWrapper";
import SignFormBase from "../components/SignForm/SignFormBase";
import SignFormTitle from "../components/SignForm/SignFormTitle";
import SignFormInput from "../components/SignForm/SignFormInput";
import SignFormButton from "../components/SignForm/SignFormButton";
import SignFormText from "../components/SignForm/SignFormText";
import SignFormLink from "../components/SignForm/SignFormLink";
import SignFormError from "../components/SignForm/SignFormError";
import styles from '../components/Header/HeaderStyles.module.css';
import Link from "next/link";

function ConnectForm() {
  const router = useRouter();

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState(null);

  const IsInvalid = password === "" || email === "";

  const signInWithEmailAndPasswordHandler = (event,email, password) => {
    event.preventDefault();
    signInWithEmailAndPassword(auth, email, password)
    .then((user) => {
      sessionStorage.setItem('user', user);
      console.log('User', user, 'logged!');
      router.push("/homePage");
    })
    .catch(function (error) {
      var errorCode = error.code;
      var errorMessage = error.message;

      if (errorCode === 'auth/wrong-password') {
        alert("Wrong password!");
      } else {
        alert(errorMessage);
      }
      console.log(error);
    });
  };

  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-home']}>
        <NavBar/>
        <SignFormWrapper>
          <SignFormBase method="POST">
            <SignFormTitle> Sign in </SignFormTitle>
            {error ? <SignFormError>{error}</SignFormError> : null}
            <SignFormInput
              type="text"
              placeholder="Email"
              value={email}
              onChange={({ target }) => setEmail(target.value)}
            />
            <SignFormInput
              type="password"
              placeholder="Password"
              autoComplete="off"
              value={password}
              onChange={({ target }) => setPassword(target.value)}
            />
            <SignFormButton 
            onClick={(event) => {signInWithEmailAndPasswordHandler(event, email, password)}}>
              Login
            </SignFormButton>
            <SignFormButton 
            onClick={() => {
              signInWithGoogle();
            }}>
              Login with Google
            </SignFormButton>
            <div>
              <Link href="/reset">Forgot Password?</Link>
            </div>
            <SignFormText>
              Don't have an account ?
              <SignFormLink href="/inscriptionPage">Register</SignFormLink> now.
            </SignFormText>
          </SignFormBase>
        </SignFormWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default ConnectForm;
