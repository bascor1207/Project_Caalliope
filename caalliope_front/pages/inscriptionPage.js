import React, { useState, useContext } from "react";
import { useRouter } from "next/router";
import { useAuth } from '../context/authUserProvider';
import HeaderWrapper from "../components/Header/HeaderWrapper";
import NavBar from "../components/Header/NavBar";
import Logo from "../components/Header/Logo";
import FooterCompound from "../compounds/FooterCompound";
import SignFormWrapper from "../components/SignForm/SignFormWrapper";
import SignFormBase from "../components/SignForm/SignFormBase";
import SignFormTitle from "../components/SignForm/SignFormTitle";
import SignFormInput from "../components/SignForm/SignFormInput";
import SignFormButton from "../components/SignForm/SignFormButton";
import SignFormError from "../components/SignForm/SignFormError";
import styles from '../components/Header/HeaderStyles.module.css';

function SignUp() {
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");
  const [error, setError] = useState("");

  const router = useRouter();

  const { createUserWithEmailAndPassword } = useAuth();

  const IsInvalid = nom === "" || prenom === "" || email === "" || password === "" || confirmPassword === "";

  const onSubmit = event => {
    setError(null)
    if(password === confirmPassword)
      createUserWithEmailAndPassword(email, password)
      .then(authUser => {
        console.log("Success. The user is ceated in Firebase")
        router.push("/homePage")
      })
      .catch(error => {
        setError(error.message)
      });
    else 
      setError("Password do not match")
    event.preventDefault();
  };

  return (
    <>
      <HeaderWrapper className={styles['header-wrapper-home']}>
        <NavBar className={styles['navbar-sigin']}>
          <Logo />
        </NavBar>
        <SignFormWrapper>
          <SignFormBase onSubmit={onSubmit} method="POST">
            <SignFormTitle> Créer votre compte </SignFormTitle>
            {error ? <SignFormError>{error}</SignFormError> : null}
            <SignFormInput
              type="text"
              placeholder="nom"
              value={nom}
              onChange={({ target }) => setNom(target.value)}
            />
            <SignFormInput
              type="text"
              placeholder="prenom"
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
              placeholder="Confirmer votre mot de passe"
              autoComplete="off"
              value={confirmPassword}
              onChange={({ target }) => setConfirmPassword(target.value)}
            />
            <SignFormButton disabled={IsInvalid}>S'incrire</SignFormButton>
          </SignFormBase>
        </SignFormWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default SignUp;