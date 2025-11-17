<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    
    <div class="login">


        <form class="form-signin" action="loginLogic.php" method="post">
        
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>


            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>



            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            
            <small>Don't have account ? <a href="signup.php">Sign Up</a></small>


            <p class="mt-5 mb-3 text-muted">Digital School  &copy; 2023</p>

<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];

		
        $sql = "insert into users (name, surname, email) values (:name, :surname, :email)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':surname', $surname); 
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <a href="dashboard.php">Dashboard</a>
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="name"></br>
            <input type="text" name="surname" placeholder="surname"></br>
            <input type="email" name="email" placeholder="email"></br>
        </form>

    </body>
</html>



        </form>


    </div>

