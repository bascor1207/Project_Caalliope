import firebase from "firebase/compat/app";
import "firebase/compat/auth";
import "firebase/compat/firestore";

const firebaseConfig = {
  apiKey: "AIzaSyCYDHwNcQ4NXjcQuCNo1WW24ScBv9o2OCM",
  authDomain: "caalliope-d5758.firebaseapp.com",
  projectId: "caalliope-d5758",
  storageBucket: "caalliope-d5758.appspot.com",
  messagingSenderId: "930050831617",
  appId: "1:930050831617:web:be995b5b07d5f1b6c25700",
  measurementId: "G-ZS5VVC2DC1"
};

// Initialize Firebase
if (firebase.apps.length) {
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  const auth = firebase.auth();
  const firestore = firebase.firestore();
}

const provider = new firebase.auth.GoogleAuthProvider();
export const signInWithGoogle = () => {
  auth.signInWithPopup(provider);
};

export const generateUserDocument = async (user, additionalData) => {
  if (!user) return;

  const userRef = firestore.doc(`users/${user.uid}`);
  const snapshot = await userRef.get();

  if (!snapshot.exists) {
    const { email, lastname, firstname } = user;
    try {
      await userRef.set({
        lastname,
        email,
        firstname,
        ...additionalData
      });
    } catch (error) {
      console.error("Error creating user document", error);
    }
  }
  return getUserDocument(user.uid);
};

const getUserDocument = async uid => {
  if (!uid) return null;
  try {
    const userDocument = await firestore.doc(`users/${uid}`).get();

    return {
      uid,
      ...userDocument.data()
    };
  } catch (error) {
    console.error("Error fetching user", error);
  }
};