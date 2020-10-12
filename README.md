# Random Ferret
![Available at randomferret.fun](https://img.shields.io/badge/available%20at-randomferret.fun-purple)

> A website (and API) that displays a random image of a ferret.

## API Usage

The API is very simple to use; just make a GET request to https://randomferret.fun/dook/. The server will return a direct link to an image of a ferret (`image`) and a URL that you can use to view that image on the main page (`link`).

Example code for Node.js:

```js
// requires node-fetch to be installed
const fetch = require('node-fetch');

async function getImage() {
   const res = await fetch('https://randomferret.fun/dook/');
   const data = await res.json();
   
   console.log(`Direct image link: ${data.image}`);
   console.log(`View this image on randomferret.fun: ${data.link}`);
}

getImage();
```
