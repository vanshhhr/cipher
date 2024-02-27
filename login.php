<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        html,body {
            font-family: 'DM Sans', sans-serif;
            user-select: none;
            background-color: #f8f9fa;
        }
        span{
            color: red;
            font-size: small;
            padding-left: 15px;
        }
        button{
            background-color: #0b0b0b;
        }
        .welcome-text {
            text-align: center;
            margin-top: 15%;
            font-size: 3.3rem;
            color: #333;
        }
        .login-box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4">
                <div class="login-box">
                    <div class="row pt-3">
                        <div class="col-auto fw-bold h1">Login</div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12"><label>User ID :</label></div>
                        <div class="col-12"><input class="mandatory form-control" type="text" id="userId" name="User ID"></div>
                        <span class="col-12"></span>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12"><label>Password</label></div>
                        <div class="col-12"><input class="mandatory form-control" type="password" id="password" name="Password"></div>
                        <span class="col-12"></span>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12"><label>Select Role</label></div>
                        <div class="col-12">
                            <select class="form-select" id="roleSelect">
                                <option value="user">User</option>
                                <option value="stock_manager">Stock Manager</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-auto">
                            <button type="submit" class="border border-white py-1 px-3 rounded-3 text-white" id="submitBtn"><a href="#" style="text-decoration: none;color: #fff;">Submit</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    mandatory = $(".mandatory");
    $("#submitBtn").click(function(){
        filled = true;
        mandatory.each(function(){
            if ($(this).val() == ""){
                filled = false;
                $(this).parent().next().html("* " + $(this).attr("name") + " can't be empty *");
            } else {
                $(this).parent().next().html("");
            }
        });
        if ( filled == true){
            var role = $("#roleSelect").val();
            if (role == "admin") {
                window.location.href = "admin_panel.html";
            } else if (role == "user") {
                window.location.href = "user_panel.html";
            } else if (role == "stock_manager") {
                window.location.href = "stock_manager_panel.html";
            }
        } else {
            return false;
        }
    })
</script>
</html>
