<html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
    </head>
    <body>
        <div class="row heading">
            <div class="col-md-4"></div>
            <div class="col-md-4 w3-card-4 w3-round">
                <h2>CRUD FORM</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form name = "form1" action="insert.php" method = "post" enctype = "multipart/form-data" class="form-horizontal w3-card-4 w3-round w3-animate-top" onsubmit="return validateForm()">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2"  for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"  for="mobile">Mobile:</label>
                        <div class="col-sm-10">
                            <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number (max 10)" name="mobile" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"  for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"  for="dateofbirth">Date Of Birth:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="dateofbirth" placeholder="Enter DOB" name="dateofbirth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"  for="pin">Pin:</label>
                        <div class="col-sm-10">
                            <input type="pin" class="form-control" id="pin" placeholder="Enter pin (max 6)" name="pin" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <script type="text/javascript" src="script.js" ></script>
    </body>
</html>