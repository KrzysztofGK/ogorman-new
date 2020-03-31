<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>
  </head>
  <body>
    <p>send emial</p>

    <form class="contact-form" action="contactform.php" method="post">
      <input type="text" name="name" placeholder="Full Name">
      <input type="text" name="mail" placeholder="your e-mail">
      <input type="text" name="subject" placeholder="Subject">
     <textarea name="message" placeholder="Message"></textarea>
     <button type="submit" name="Submit">Send</button>

    </form>
  </body>
</html>
