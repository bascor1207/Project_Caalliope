import firebase, { initializeApp, getApps, getApp } from "firebase/app";
import { getAuth, GoogleAuthProvider } from "firebase/auth";
import { getFirestore } from "firebase/firestore";

const firebaseConfig = {
  apiKey: "AIzaSyCYDHwNcQ4NXjcQuCNo1WW24ScBv9o2OCM",
  authDomain: "caalliope-d5758.firebaseapp.com",
  projectId: "caalliope-d5758",
  storageBucket: "caalliope-d5758.appspot.com",
  messagingSenderId: "930050831617",
  appId: "1:930050831617:web:be995b5b07d5f1b6c25700",
  measurementId: "G-ZS5VVC2DC1"
};

var firebaseApp = null;

// Initialize Firebase
if (!getApps().length) {
  firebaseApp = initializeApp(firebaseConfig, "caalliope");
} else {
  firebaseApp = getApp();
}

export const auth = getAuth(firebaseApp);
export const firestore = getFirestore(firebaseApp);

const provider = new GoogleAuthProvider();
export const signInWithGoogle = () => {
  auth.signInWithPopup(provider);
};

export const generateUserDocument = async (user, additionalData) => {
  if (!user) return;

  const userRef = firestore().collection('users').doc(user.uid);
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