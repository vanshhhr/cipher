<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <title>User</title>
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
        ul{
            list-style-type: none;
        }
        li{
            padding: 0px 20px 0px 20px;
        }
        a{
            color: white;
        }
        .vr{
            color: white;
        }
        .drawer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #0b0b0b;
            transition: left 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
            padding-top: 50px;
            font-family: 'DM Sans', sans-serif;
        }

        .drawer-content {
            padding: 20px;
            color: white;
        }

        .drawer-toggle {
            position: fixed;
            top: 50%;
            left: -40px;
            transform: translateY(-50%);
            background-color: #0b0b0b;
            color: white;
            border: none;
            cursor: pointer;
            z-index: 1001;
            padding: 10px;
            border-radius: 0 10px 10px 0;
            transition: left 0.3s ease;
        }

        .drawer-toggle:hover {
            left: 0;
            background-color: #1a1a1a;
        }

        .drawer-link {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .drawer-link:hover {
            background-color: #1a1a1a;
        }

        .main-form {
            padding-left: 50px;
        }
        .container-fluid {
            margin-left: 25%;
        }
        
    </style>
</head>
<body>
    <div class="drawer-container">
        <div class="drawer-content">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="controlpanel.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="#">User Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="orderform.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="orderdetails.php">Order Details</a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-auto fw-bold" style="font-size: larger;">User Login</div>
        </div>
        <div class="row pt-3">
            <div class="col-2"><label>User Id</label></div>
            <div class="col-auto"><input class="mandatory" type="text" id="uid" name="User Id"><span></span></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"><label>Username</label></div>
            <div class="col-auto"><input class="mandatory" type="text" id="username" name="Username"><span></span></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"><label>Password</label></div>
            <div class="col-auto"><input class="mandatory" type="password" id="password"  name="Password"><span></span></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"><label>Email</label></div>
            <div class="col-auto"><input class="mandatory" type="email" name="Email" pattern="/^([a-z0-9_\-\.])+\@([a-z_\-\.])+\.([a-z]{2,4})$/" id="email"><span id="emailSpan"></span></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"><label>Role</label></div>
            <div class="col-auto"><input class="mandatory" type="text" id="role"  name="Role"><span></span></div>
        </div>
        <div class="row pt-3">
            <div class="col-auto">
                <button type="submit" class=" border border-white py-1 px-3 rounded-3 text-white " id="submitBtn" onclick="submitForm()" style="background-color: #0b0b0b">Submit</button>
            </div>
        </div>
    </div>

    <button class="drawer-toggle" id="drawer-toggle" onclick="toggleDrawer()">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="180" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
          <path d="M5.854 3.646a.5.5 0 0 1 .708 0L11 8.293l-4.854 4.853a.5.5 0 1 1-.708-.708L9.293 8 5.146 3.854a.5.5 0 0 1 0-.708z"/>
          <path d="M10.854 3.646a.5.5 0 0 1 .708 0L16 8.293l-4.146 4.147a.5.5 0 1 1-.708-.708L15.293 8 11.146 3.854a.5.5 0 0 1 0-.708z"/>
        </svg>
    </button>

    <script>
    mandatory = document.getElementsByClassName("mandatory");
    email = document.getElementById("email");
    emailPtrn = /^([a-z0-9_\-\.])+\@([a-z_\-\.])+\.([a-z]{2,4})$/;
    filled = true;
    function submitForm(){
        filled = true;
        for (i = 0; i < mandatory.length; i++){
            if (mandatory[i].value == ""){
                filled = false;
                mandatory[i].nextSibling.innerHTML ="* "+ mandatory[i].name + " can't be empty *";
            } else {
                mandatory[i].nextSibling.innerHTML = "";
                if (email.value.match(emailPtrn)){
                    email.nextSibling.innerHTML = "";
                }else {
                    email.nextSibling.innerHTML = "* Invalid Email *";
                    filled = false;
                }
            }
        }
        if (filled == true){
            alert("Form Submited");
        } else {
            return false;
        }
    }
        function toggleDrawer() {
            var drawer = document.querySelector('.drawer-container');
            drawer.style.left = drawer.style.left === '0px' ? '-250px' : '0px';
        }
    </script>
</body>
</html>
