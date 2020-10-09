<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel='stylesheet' href='css/uikit.min8a54.css' type='text/css' />
   <link rel='stylesheet' id='elementor-frontend-css' href='css/custom-frontend.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='pr-style-css' href='css/pr-style.css' type='text/css' media='all' />
   <link rel='stylesheet' id='pixe-main-style-css' href='css/style5156.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-326-css' href='css/post-326e189.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-326-css' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script type='text/javascript' src='js/jquery4a5f.js' id='jquery-js'></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=send] {
  background-color: orange;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  font-size: 18px;
}

input[type=send]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h1{
    font-size: 45px;
    font-weight: 900;
    font-family:Arial, Helvetica, sans-serif;
    text-align: left;
}
.center {
         position: initial;
         display: inline-block;
         /* left: 100%; */
         margin-left: 35%;
         top: 50%; 
      }
</style>
</head>
<body>
    
   <div class="center"> 
    <img src="images/contact.png" alt="contact" hspace="30">
</div>
<h1>Let's Talk? </h1>
<p>+92 318 2333845 <br> <br> +92 213-4981712</p>

<h1>Or Visit</h1>
<p>Off #507, 5th floor, RBS Mall, Main Universty Road, Karachi.</p>

<h1>Or Fill the Form</h1>
<br><br>
<div class="container">
    <form action="mailto:farazbiskhan@gmail.com" method="post" enctype="text/plain">
  <!-- <form action="/action_page.php"> -->
    <label for="fname">YOUR NAME</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">YOUR EMAIL</label>
    <input type="text" id="lname" name="lastname" placeholder="Your email id">

    <label for="lname">SUBJECT</label>
    <input type="text" id="lname" name="lastname" placeholder="Your email id">

    <label for="country">BUDGET</label>
    <select id="country" name="country">
      <option value="Select Budget">Select Budget</option>
      <option value="Low Budget">Low Budget</option>
      <option value="$ 1,000 - $ 2,000">$ 1,000 - $ 2,000</option>
      <option value="$ 1,000 - $ 2,000">$ 2,000 - $ 5,000</option>
      <option value="$ 1,000 - $ 2,000">$ 5,000 - $ 10,000</option>
      <option value="$ 1,000 - $ 2,000">$ 10,000 + </option>
    </select>

    <label for="Your Message">YOUR MESSAGE</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="send" value="Send">
  </form>
</div>

</body>
</html>
