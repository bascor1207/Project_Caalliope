import React, { useState, useEffect } from "react";
import { useRouter } from "next/router";
import { auth, signInWithGoogle, generateUserDocument } from "../firebase/firebase";
import NavBar from "../components/Header/NavBar";
import HeaderWrapper from "../components/Header/HeaderWrapper";
import FooterCompound from "../compounds/FooterCompound";
import SignFormWrapper from "../components/SignForm/SignFormWrapper";
import SignFormBase from "../components/SignForm/SignFormBase";
import SignFormText from "../components/SignForm/SignFormText";
import SignFormLink from "../components/SignForm/SignFormLink";
import SignFormTitle from "../components/SignForm/SignFormTitle";
import SignFormInput from "../components/SignForm/SignFormInput";
import SignFormButton from "../components/SignForm/SignFormButton";
import SignFormError from "../components/SignForm/SignFormError";
import styles from '../components/Header/HeaderStyles.module.css';
import { Button } from "@mui/material";

function SignUp() {
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState(null);

  const router = useRouter();

  const IsInvalid = nom === "" || prenom === "" || email === "" || password === "";

  const createUserWithEmailAndPasswordHandler = async (event, email, password) => {
    event.preventDefault();
    try{
      const {user} = await auth.createUserWithEmailAndPassword(email, password);
      generateUserDocument(user, {nom, prenom});
    }
    catch(error){
      setError('Error Signing up with email and password');
    }
      
    setEmail("");
    setPassword("");
    setNom("");
    setPrenom("");
  };

  const onChangeHandler = event => {
    const { name, value } = event.currentTarget;

    if (name === "userEmail") {
      setEmail(value);
    } else if (name === "userPassword") {
      setPassword(value);
    } else if (name === "nom") {
      setNom(value);
    } else if (name === "prenom") {
      setPrenom(value);
    }
  };



  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-home']}>
        <NavBar/>
        <SignFormWrapper>
          <SignFormBase method="POST">
            <SignFormTitle> Create your account </SignFormTitle>
            {error ? <SignFormError>{error}</SignFormError> : null}
            <SignFormInput
              type="text"
              placeholder="lastname"
              onChange={event => onChangeHandler(event)}
            />
            <SignFormInput
              type="text"
              placeholder="firstname"
              onChange={event => onChangeHandler(event)}
            />
            <SignFormInput
              type="text"
              placeholder="email"
              onChange={event => onChangeHandler(event)}
            />
            <SignFormInput
              type="password"
              placeholder="Mot de passe"
              autoComplete="off"
              onChange={event => onChangeHandler(event)}
            />
            <SignFormButton 
            onClick={event => {
              createUserWithEmailAndPasswordHandler(event, email, password);
            }}>
              Register
              </SignFormButton>
            <SignFormButton 
            variant="contained" 
            onClick={() => {
              try {
                signInWithGoogle();
              } catch (error) {
                console.error("Error signing in with Google", error);
              }
            }}>
              Register with Google
            </SignFormButton>
            <SignFormText>
              Already have an account ?
              <SignFormLink href="/connectPage">Login</SignFormLink>now.
            </SignFormText>
          </SignFormBase>
        </SignFormWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default SignUp;