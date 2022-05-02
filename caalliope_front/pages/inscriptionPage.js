import React, { useState, useEffect } from "react";
import { useRouter } from "next/router";
import { useAuthState } from "react-firebase-hooks/auth";
import { auth, registerWithEmailAndPassword, signInWithGoogle } from "../firebase/firebase";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import FooterCompound from "../compounds/FooterCompound";
import SignFormWrapper from "../components/SignForm/SignFormWrapper";
import SignFormBase from "../components/SignForm/SignFormBase";
import SignFormTitle from "../components/SignForm/SignFormTitle";
import SignFormInput from "../components/SignForm/SignFormInput";
import SignFormButton from "../components/SignForm/SignFormButton";
import SignFormError from "../components/SignForm/SignFormError";
import styles from '../components/Header/HeaderStyles.module.css';
import Link from "next/link";

function SignUp() {
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");

  const router = useRouter();

  const [user, loading, error] = useAuthState(auth);

  const IsInvalid = nom === "" || prenom === "" || email === "" || password === "" || confirmPassword === "";

  const register = () => {
    if (IsInvalid) alert("Please enter your innformation");
    if(password === confirmPassword) {
      registerWithEmailAndPassword(nom, prenom, email, password);
    }
  };

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
            <SignFormTitle> Create your account </SignFormTitle>
            {error ? <SignFormError>{error}</SignFormError> : null}
            <SignFormInput
              type="text"
              placeholder="lastname"
              value={nom}
              onChange={({ target }) => setNom(target.value)}
            />
            <SignFormInput
              type="text"
              placeholder="firstname"
              value={prenom}
              onChange={({ target }) => setPrenom(target.value)}
            />
            <SignFormInput
              type="text"
              placeholder="email"
              value={email}
              onChange={({ target }) => setEmail(target.value)}
            />
            <SignFormInput
              type="password"
              placeholder="Mot de passe"
              autoComplete="off"
              value={password}
              onChange={({ target }) => setPassword(target.value)}
            />
            <SignFormInput
              type="password"
              placeholder="confirm your password"
              autoComplete="off"
              value={confirmPassword}
              onChange={({ target }) => setConfirmPassword(target.value)}
            />
            <SignFormButton disabled={IsInvalid} onClick={register}>Register</SignFormButton>
            <Button 
            className="register_btn register__google"
            disabled={IsInvalid} 
            onClick={signInWithGoogle}>
              Register with Google
            </Button>
            <SignFormText>
              Already have an account ?
              <SignFormLink href="/connectPage">Login</SignFormLink> now.
            </SignFormText>
          </SignFormBase>
        </SignFormWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default SignUp;