<?php
//this condition is executed once the user submits the username and password
//this login page is a simple implementation of the process of signing in and 
//authentication. 

?>
<link href='http:\\localhost\WhiteHats\public\assets\css\wh.css' rel='stylesheet' />

<!-- The code given below is responsible for the display of a simple login page -->
<div class="login-page">

  <div class="form">
  WhiteHats Platform</br></br>
    <form class="register-form" action ='http://localhost/WhiteHats/welcome/register' method='POST'>
	<!-- username and password input-->
      <input type="text" name='name' placeholder="name"/>
      <input type="password" name='password' placeholder="password"/>
      <input type="text" name='email' placeholder="email address"/>
      <button type='submit'>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action ='http://localhost/WhiteHats/welcome/login' method='POST'>
      <input type="text" name = 'name' placeholder="username"/>
      <input type="password" name='password'placeholder="password"/>
      <button type='submit'>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>