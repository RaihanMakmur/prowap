<!doctype html>
<html lang="en">
<head>
    <?php include('header.php') ?>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
<style>
body {
    font-family: 'League Spartan';font-size: 50px;
}
</style>
</head>

<body>
    <main role="main " class="container">
        

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-4">Sign Up</h2>
                    <form action="connection/auth.php?action=register" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" style="height: 150px" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" style="font-size: 35px; height: 70px; width: 500px;" placeholder="Input your name" name="name">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" style="font-size: 35px; height: 70px; width: 500px;" placeholder="Input your email" name="email">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"style="font-size: 35px; height: 70px; width: 500px;" placeholder="Input your password" name="password">
                        </div>
                        <br>
                        <div class="mb-3">
                            <button type="signup" class="btn btn-primary"style="font-size: 40px">
                                Sign-Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


</body>

</html>