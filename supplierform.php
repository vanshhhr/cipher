<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Supplier</title>
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
            left: -250px;
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
            background-color: #0b0b0b;
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
            margin-left: 20%
        }
    </style>
</head>
<body>
    <div class="drawer-container">
        <div class="drawer-content">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="controlstock.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="itemcategory.php">Item Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="itemform.php">Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="measurementform.php">Measurement Unit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="#">Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link drawer-link" href="qrcode.php">QR Code</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid "> 
        <div class="row p-5">
            <div class="col-10">
                <div class="row pt-3">
                    <div class="col-auto fw-bold" style="font-size: larger;">Supplier</div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Supplier Id</label></div>
                    <div class="col-auto"><input class="mandatory" type="text" id="supplierId" name="Supplier Id"><span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Supplier Name</label></div>
                    <div class="col-auto"><input class="mandatory" type="text" id="supplierName" name="Supplier Name"><span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Item Id</label></div>
                    <div class="col-auto">
                        <select class="selectOption px-2" id="itemId" name="Item Id">
                            <option value="0" selected>--- Open to select ---</option>
                            <option value="1">Item_Id__1</option>
                            <option value="2">Item_Id__2</option>
                            <option value="3">Item_Id__3</option>
                        </select>
                        <span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Contact</label></div>
                    <div class="col-auto"><input class="int mandatory" type="text" id="contact" name="Contact"><span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Email</label></div>
                    <div class="col-auto"><input class="email mandatory" type="email" name="Email" pattern="/^([a-z0-9_\-\.])+\@([a-z_\-\.])+\.([a-z]{2,4})$/" id="email"><span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-2"><label>Address</label></div>
                    <div class="col-auto"><input class="mandatory" type="text" id="address" name="Address"><span></span></div>
                </div>
                <div class="row pt-3">
                    <div class="col-auto">
                        <button type="submit" class="border border-white py-1 px-3 rounded-3 text-white " id="submitBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="drawer-toggle" id="drawer-toggle" onclick="toggleDrawer()">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="180" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
          <path d="M5.854 3.646a.5.5 0 0 1 .708 0L11 8.293l-4.854 4.853a.5.5 0 1 1-.708-.708L9.293 8 5.146 3.854a.5.5 0 0 1 0-.708z"/>
          <path d="M10.854 3.646a.5.5 0 0 1 .708 0L16 8.293l-4.146 4.147a.5.5 0 1 1-.708-.708L15.293 8 11.146 3.854a.5.5 0 0 1 0-.708z"/>
        </svg>
    </button>
    </div>
    </body>

    <script>
        mandatory = $(".mandatory");
        selectMenu = $(".selectOption");
        email = $(".email");
        emailPtrn = /^([a-z0-9_\-\.])+\@([a-z_\-\.])+\.([a-z]{2,4})$/;
        integer = $(".int");
        intPtrn = /^([0-9]{10,10})$/;
        $("#submitBtn").click(function(){
            filled = true;
            mandatory.each(function(){
                if ($(this).val() == ""){
                    filled = false;
                    $(this).next().html("* " + $(this).attr("name") + " can't be empty *");
                } else {
                    $(this).next().html("");
                }
            });
            selectMenu.each(function(){
                if ($(this).val() == "0"){
                    filled = false;
                    $(this).next().html("* Select one Item Id *");
                } else {
                    $(this).next().html("");
                }
            })
            integer.each(function(){
                if(integer.val() == ""){
                    filled = false;
                    $(this).next().html("* " + $(this).attr("name") + " can't be empty *");
                } else if (intPtrn.test($(this).val())){
                    $(this).next().html("");
                } else {
                    filled = false;
                    $(this).next().html("* Invalid contact details *");
                }
            })
            email.each(function(){
                if(email.val() == ""){
                    filled = false;
                    $(this).next().html("* " + $(this).attr("name") + " can't be empty *");
                } else if (emailPtrn.test($(this).val())){
                    $(this).next().html("");
                } else {
                    filled = false;
                    $(this).next().html("* Invalid email id *");
                }
            })
            if ( filled == true){
                alert ("Form Submited");
            }else {
                return false;
            }
        })
        function toggleDrawer() {
            var drawer = $('.drawer-container');
            drawer.css('left', drawer.css('left') === '0px' ? '-250px' : '0px');
        }
</script>
</html>
