# learn-websocket
learning websocket using ratchet php


## usage
  - clone the repo
  - just make sure to composer install first
  - open your CLI in the project and run php bin/chat-server.php
  - open browser
  - open your console logging
  - paste this code 
  ```
  var conn = new WebSocket('ws://localhost:8080');
  conn.onopen = function(e) {
      console.log("Connection established!");
  };

  conn.onmessage = function(e) {
      console.log(e.data);
  };
  ```
  - press enter to start the conversation
  - start by typing this ```conn.send('hello world');``` into the console
  - then watch its works.
  
  
## Credits
  - Ratchet http://socketo.me
