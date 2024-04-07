<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chatbot with PHP, MySQL and JS fetch</title>
  <link rel="stylesheet" href="bot.css">
</head>
<body>
  <div id="container">
    <div id="header">Php Chatbot</div>
    <div id="conversation">
      <!-- This section will be dynamically inserted from JavaScript -->
    </div>
    <div id="inputArea">
      <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
      <button id="send">Send</button>
    </div>
  </div>

  <script>
    document.querySelector("#send").addEventListener("click", async () => {
      let xhr = new XMLHttpRequest();
      let userMessage = document.querySelector("#userInput").value.trim();

      if (userMessage === '') {
        alert('Please enter a message');
        return;
      }

      let userHtml = '<div class="message user-message">' + userMessage + '</div>';
      document.querySelector('#conversation').innerHTML += userHtml;

      xhr.open("POST", "query.php");
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send(`messageValue=${encodeURIComponent(userMessage)}`);

      xhr.onload = function () {
        if (this.status === 200) {
          let botHtml = '<div class="message bot-message">' + this.responseText + '</div>';
          document.querySelector('#conversation').innerHTML += botHtml;
          document.querySelector("#conversation").scrollTop = document.querySelector("#conversation").scrollHeight;
        } else {
          console.error('Error:', this.statusText);
          alert('An error occurred. Please try again later.');
        }
      };

      xhr.onerror = function () {
        console.error('Network Error');
        alert('A network error occurred. Please check your internet connection and try again.');
      };

      document.querySelector("#userInput").value = "";
    });
  </script>
</body>
</html>