const express = require('express');
const app = express();

app.use(express.static('public'));
  
const port = process.env.port || 3000;
app.listen(port, () => {
  console.log(`listining att http://localhost: ${port}`);
});