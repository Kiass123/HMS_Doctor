<!DOCTYPE html>
<html>
  <head>
    <title>Telemedicine</title>
    <link rel="stylesheet" href="style.css">

    <style>
      /* Styling for header */
      header {
        background-color: DodgerBlue;
        color: white;
        text-align: center;
        padding: 20px;
      }

      /* Styling for FAQ section */
      #faq {
        margin: 50px;
      }

      #faq h2 {
        text-align: center;
        font-size: 28px;
      }

      #faq label {
        display: block;
        margin: 20px 0;
        font-size: 18px;
      }

      #faq select {
        font-size: 16px;
        padding: 5px;
      }

      #faq textarea {
        font-size: 16px;
        padding: 10px;
        width: 100%;
        height: 200px;
      }

      #faq button[type="submit"] {
        display: block;
        margin: 20px auto;
        font-size: 18px;
        padding: 10px 20px;
        background-color: DodgerBlue;
        color: white;
        border: none;
        cursor: pointer;
      }

      #faq button[type="submit"]:hover {
        background-color: DeepSkyBlue;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Send Message</h1>
    </header>
    <section id="faq">
      <h2>Frequently Asked Questions</h2>
      <form id="faq-form" action="../controlers/teleCheck.php" method="POST">
        <label for="category">Select a Category:</label>
        <select id="choice" name="choice">
          <option value="Doctor">Doctor</option>
          <option value="Patient">Patient</option>
        </select>
        <br>
        <label for="question">Enter Your Message:</label>
        <textarea id="question" name="question"></textarea>
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>



</script>
    </section>
  </body>
</html>
