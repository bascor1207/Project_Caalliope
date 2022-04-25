import React, { useEffect, useState, useContext } from "react";
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
import SignFormText from "../components/SignForm/SignFormText";
import SignFormLink from "../components/SignForm/SignFormLink";
import SignFormError from "../components/SignForm/SignFormError";
import styles from '../components/Header/HeaderStyles.module.css';

function ConnectForm() {
  const { signInWithEmailAndPassword } = useAuth();
  const router = useRouter();

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const IsInvalid = password === "" || email === "";

  const onSubmit = event => {
    setError(null)
    signInWithEmailAndPassword(email, password)
    .then(authUser => {
      router.push("/homePage")
    })
    .catch(error => {
      setError(error.message)
    });
    event.preventDefault();
  };

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
            <SignFormButton disabled={IsInvalid} onSubmit={handleSubmit} onClick={handleClick}>Valider</SignFormButton>
            <SignFormText>
              Pas de compte ?
              <SignFormLink href="/signup">Inscrivez-vous !</SignFormLink>
            </SignFormText>
          </SignFormBase>
        </SignFormWrapper>
      </HeaderWrapper>
      <FooterCompound />
    </>
  );
}

export default ConnectForm;
