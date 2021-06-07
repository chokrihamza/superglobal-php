<form action="" method="post" enctype="multipart/form-data">
  <input type="text" placeholder="enter your name" name="name" />
  <input type="email" placeholder="enter your email" name="email" />
  <input type="password" placeholder="enter your password" name="password" />
  <input name="userfile" type="file" />
  <input type="submit" value="Send" name="submit" />
</form>

<?php

var_dump($_POST, $_FILES);