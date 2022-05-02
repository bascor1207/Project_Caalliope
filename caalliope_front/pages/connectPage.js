import React, { useState, useEffect } from "react";
import { useRouter } from "next/router";
import { useAuthState } from "react-firebase-hooks/auth";
import { auth, signInWithEmailAndPassword, signInWithGoogle } from "../firebase/firebase";
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
import { Button } from "bootstrap";
import Link from "next/link";

function ConnectForm() {
  const router = useRouter();

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [user, loading, error] = useAuthState(auth);

  const IsInvalid = password === "" || email === "";

  useEffect(() => {
    if (loading) {
      return <h2>Loading...</h2>
    }
    if (user) router.push("/homePage")
  }, [user, loading]);

  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-home']}>
        <NavBar/>
        <SignFormWrapper>
          <SignFormBase onSubmit={onSubmit} method="POST">
            <SignFormTitle> Veuillez-vous identifier </SignFormTitle>
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
            disabled={IsInvalid} 
            onClick={() => signInWithEmailAndPassword(email, password)}>
              Login
            </SignFormButton>
            <Button 
            className="login_btn login__google"
            disabled={IsInvalid} 
            onClick={signInWithGoogle}>
              Login with Google
            </Button>
            <div>
              <Link href="/reset">Forgot Password</Link>
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
