<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Snippet - BBBootstrap</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/login.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                
    </head>
    
    <body oncontextmenu='return false' class='snippet-body'>
    <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <div class="login">
                            
                        <form action="assets/autenticacion.php" method="post">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" name="usuario" type="text" class="input" placeholder="Enter your username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="contrasenia" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <a href="#">Forgot Password?</a> </div>
                        </form>
                            
                        </div>
                        <div class="sign-up-form">
                        <form action="assets/guardarNuevoUsuario.php" method="post">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" name="usuario" type="text" class="input" placeholder="Create your Username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Create your password"> </div>
                            <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" name="repeatPassword" type="password" class="input" data-type="password" placeholder="Repeat your password"> </div>
                            <!-- <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="text" class="input" placeholder="Enter your email address"> </div> -->
                            <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                 
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                
<script type='text/javascript'></script>
    
</body>
</html>