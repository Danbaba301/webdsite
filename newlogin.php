<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="newlogin.css">
</head>
<body>
    <div class="container" id="container">
    <div class="form-container sign-up">
    <form>
    <h1>Create Account</h1>
    <div class="social-icon">
    <a href="#" class="icon"> <i class="fa-brands fa-google-plus-g"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-facebook-f"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-github"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-linkedin-in"></i></a>
    
    </div>
    <span>or User Email to Register</span>
    <input type="text" placeholder="Name">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Passsword">
   <button>Sing Up</button>
    
    </form>
    </div>
    <div class="form-container sign-in">
    <form>
    <h1>Sign In</h1>
    <div class="social-icon">
    <a href="#" class="icon"> <i class="fa-brands fa-google-plus-g"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-facebook-f"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-github"></i></a>
    <a href="#" class="icon"> <i class="fa-brands fa-linkedin-in"></i></a>
    
    </div>
    <span>or User Email Password</span>
    
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Passsword">
    <a href="#">Forget Your Password</a>
   <button>Sing in</button>
    
    </form>
    </div>

    <div class="toggle-container">
    <div class="toggle">
    <div class="toggle-panel toggle-left">
    <h1>WelCome Back!</h1>
    <p>Enter your personal details to use all the site feature</p>
    <button class="heddin" id="login">Sign In</button>
    </div>

    <div class="toggle-panel toggle-right">
    <h1>Hello, Friend!</h1>
    <p>Register with your personal details to use all the site feature</p>
    <button class="heddin" id="register">Sign up</button>
    </div>

    </div>
    </div>




    </div>




    <script src="newlogin.js"></script>
</body>
</html>