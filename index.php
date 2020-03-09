
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ANPR system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
</head>

<body style = "background-color: #102c2e; color: #f1f1f1;">

    <div class="container">
        <br>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email"><strong>Email:</strong></label>
                <input type="email" class="form-control" id="email-login" placeholder="Enter email" name="email" required>

            </div>
            <div class="form-group">
                <label for="password"><strong>Password:</strong></label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <label><strong>OR</strong></label>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Sign Up</button>
        </form>
        <!-- <a href="./main_page.html">Main Page</a> -->
    </div>

    <div class="container">

        <div id="myModal" class="modal fade" style = "color: #000;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form name="user" action="connection.php" method="POST">

                        <div class="modal-header">
                            <h4 class="modal-title">Sign Up</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Please fill in this form to create an account.</p>
                            <div class="form-group">
                                <label for="email"><strong>Email</strong></label>
                                <br>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                            </div>
                            <div class="form-group" >
                                <label for="psw"><strong>Password</strong></label>
                                <br>
                                <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                            </div>

                            <div class="form-group">
                                <label for="psw-repeat"><strong>Repeat Password</strong></label>
                                <br>
                                <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat " required>
                            </div>
                            <div class="form-group">
                                <label for="unitAddress"><strong>Unit Address</strong></label>
                                <br>
                                <input type="text" class="form-control" placeholder="Unit Address" name="unitAddress">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal footer
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</body>

</html>