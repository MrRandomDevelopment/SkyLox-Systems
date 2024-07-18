# MyPortal Authentication Example

This repository provides an example of how to set up an authentication system using Roblox OAuth 2.0 and Firebase Auth, with user data stored in Firestore. The example includes both email/password sign-in and Roblox OAuth sign-in.

## Setup

### Firebase Configuration

1. Create a Firebase project at [Firebase Console](https://console.firebase.google.com/).
2. Enable Authentication and Firestore Database.
3. Add your web app to Firebase and copy the Firebase configuration.

### Roblox OAuth 2.0 Setup

1. Register a new application at the [Roblox Developer Portal](https://developer.roblox.com/).
2. Obtain your `clientId` and `clientSecret`.
3. Set the redirect URI to your callback URL (e.g., `https://auth.skylox.org/sign-up`).

### Installation

1. Clone this repository:

```sh
git clone https://github.com/MrRandomDevelopment/SkyLox-Systems/tree/main/Authentication%20System.git
```

2. Replace the placeholders in the HTML files with your actual Firebase and Roblox configuration details.

## Usage

### Sign-Up Page

The sign-up page allows users to sign up using their Roblox account. The user data is stored in Firestore.

```html
<!-- Include this attribution in your HTML code -->
<!-- Auth inspired by MrRandom -->

<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-auth-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore-compat.js"></script>

<!-- Initialize Firebase -->
<script>
  var firebaseConfig = {
    apiKey: "YOUR_FIREBASE_API_KEY",
    authDomain: "YOUR_FIREBASE_AUTH_DOMAIN",
    projectId: "YOUR_FIREBASE_PROJECT_ID",
    storageBucket: "YOUR_FIREBASE_STORAGE_BUCKET",
    messagingSenderId: "YOUR_FIREBASE_MESSAGING_SENDER_ID",
    appId: "YOUR_FIREBASE_APP_ID"
  };
  firebase.initializeApp(firebaseConfig);
</script>
```

### Sign-In Page

The sign-in page allows users to sign in using either email/password or their Roblox account.

```html
<!-- Include this attribution in your HTML code -->
<!-- Auth inspired by MrRandom -->
```

## License

This project is licensed under the terms of the Example License. See the [LICENSE](LICENSE.md) file for details.

## Code of Conduct

Please see our [Code of Conduct](CODE_OF_CONDUCT.md) for more information.
