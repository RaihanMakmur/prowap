<!doctype html>
<html lang="en">
<head>
    <?php include('header.php') ?>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
<style>
body {
    font-family: 'League Spartan';font-size: 50px;
      background-size:cover;
      background-repeat:no-repeat;
      backdrop-filter: contrast(1);
}

</style>
</head>

<body>
    
    <main role="main " class="container">

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-4">Login</h2>
                    <form action="connection/auth.php?action=login" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><img src="icon/login_logo.png" style="height: 150px"  label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input your email" style="font-size: 50px; height: 100px; width: 500px;" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" 
                            class="form-label"><img src="icon/password_logo.png"style="height: 150px" label> 
                            <input type="password" class="form-control" id="exampleFormControlInput1" style="font-size: 50px; height: 100px; width: 500px;"placeholder="Input your password" name="password">
                        </div>
                        <br>
                        <div class="mb-3">
                            <button style="font-size: 150px: height: 70px; min-width: 150px">
                            <type="login" class="btn btn-primary"style="font-size: 40px">
                                login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>