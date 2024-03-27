<div class="container">
    <h2 class="text-center">Welcome to the Blog</h2>

    <div class="row gx-0">
        <div class="card col col-5">
            <div class="card-header">
                Register
            </div>

            <ul class="bg-danger">

                <li class="text-light">error</li>

            </ul>

       
            <h5 class="text-success text-center">register success</h5>

            <form action="process.php" method="POST" class="card-body ">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="firstName">
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="lastName" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" >
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirmPassword" >
                </div>

                <input type="submit" name="register" value="Register" class="btn btn-primary">
            </form>
        </div>

        <div class="card col-auto col-5 offset-2">
            <div class="card-header">
                Login
            </div>

            <ul class="bg-danger">

                <li class="text-light">error</li>

            </ul>

        <form action="process.php" method="POST" class="card-body">

                <div class="mb-3">
                    <label for="email" class="form-label">Contact Number</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" >
                </div>

                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </form>
        </div>


</div>


