import * as firebase from 'firebase';
import '@firebase/auth';
import '@firebase/firestore';

const firebaseConfig = {
    apiKey: "AIzaSyAwiUnjHNL3vfMxousSfJdu9OpG5k0cZPE",
    authDomain: "reactnativefirebase-fea47.firebaseapp.com",
    databaseURL: "https://reactnativefirebase-fea47.firebaseio.com",
    projectId: "reactnativefirebase-fea47",
    storageBucket: "reactnativefirebase-fea47.appspot.com",
    messagingSenderId: "259630723312",
    appId: "1:259630723312:web:5e74a39166deefc8e1d235"
};

if (!firebase.apps.length) {
    firebase.initializeApp(firebaseConfig);
}

export { firebase };
