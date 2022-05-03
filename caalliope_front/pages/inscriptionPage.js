import React, { useState } from "react";
import { useRouter } from "next/router";
import { createUserWithEmailAndPassword, signInWithEmailAndPassword, setPersistence, browserSessionPersistence } from "firebase/auth";
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
      const {user} = await createUserWithEmailAndPassword(auth, email, password);
      generateUserDocument(user, {nom, prenom});

      setPersistence(auth, browserSessionPersistence)
        .then(() => {
          return signInWithEmailAndPassword(auth, email, password);
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          alert(errorMessage);
        })
        console.log(error);

      router.push("/homePage");
    }
    catch(error){
      var errorMessage = error.message;

      alert(errorMessage);

      console.log(error);
    }
      
    setEmail("");
    setPassword("");
    setNom("");
    setPrenom("");
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