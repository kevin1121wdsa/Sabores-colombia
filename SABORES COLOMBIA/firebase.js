 // Import the functions you need from the SDKs you need
 import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
 import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-analytics.js";
 // TODO: Add SDKs for Firebase products that you want to use
 // https://firebase.google.com/docs/web/setup#available-libraries

 // Your web app's Firebase configuration
 // For Firebase JS SDK v7.20.0 and later, measurementId is optional
 const firebaseConfig = {
   apiKey: "AIzaSyCzp-P4PqeZlPTyMnk3BPZNKSJ_KMJQwfg",
   authDomain: "sabores-colombia.firebaseapp.com",
   projectId: "sabores-colombia",
   storageBucket: "sabores-colombia.appspot.com",
   messagingSenderId: "551248307885",
   appId: "1:551248307885:web:9397741b7d5af4d7f2c824",
   measurementId: "G-XS8EDCMG30"
 };

 // Initialize Firebase
 const app = initializeApp(firebaseConfig);
 const analytics = getAnalytics(app);