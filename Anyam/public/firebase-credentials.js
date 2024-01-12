// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBTMtORpnmh_DI-_gOS_z3lPUhS_GI4NpE",
  authDomain: "anyam-a0fcb.firebaseapp.com",
  databaseURL: "https://anyam-a0fcb-default-rtdb.firebaseio.com",
  projectId: "anyam-a0fcb",
  storageBucket: "anyam-a0fcb.appspot.com",
  messagingSenderId: "796642622003",
  appId: "1:796642622003:web:2723c62edde91802254146",
  measurementId: "G-5HSJ6YCRH1"
};

// export const firebaseConfig={
//   apiKey: "AIzaSyBTMtORpnmh_DI-_gOS_z3lPUhS_GI4NpE",
//   authDomain: "anyam-a0fcb.firebaseapp.com",
//   databaseURL: "https://anyam-a0fcb-default-rtdb.firebaseio.com",
//   projectId: "anyam-a0fcb",
//   storageBucket: "anyam-a0fcb.appspot.com",
//   messagingSenderId: "796642622003",
//   appId: "1:796642622003:web:2723c62edde91802254146",
//   measurementId: "G-5HSJ6YCRH1"

// }

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);