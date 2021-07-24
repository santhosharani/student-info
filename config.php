<?php
$host=get_env("MARIADB_SERVICE_HOST");
$user=get_env("db-user");
$pass=get_env("db-password");
$con=mysqli_connect($host,$user,$pass,"student_registration");
 ?>