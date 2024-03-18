<?php
session_start();
$pid = "";
if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearWell</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

</head>

<body class="font-serif">

<?php 
    include "navbar2.php";
?>

    <!-- Component Start -->
    <div class="flex flex-col items-center justify-center h-[600px] bg-gray-200 text-gray-700">
        <h1 class="font-bold text-2xl">LOGIN HERE 💻</h1>
        <form class="flex flex-col  bg-white rounded shadow-lg p-12 mt-12 lg:w-[500px] lg:h-[450px]" action=""
            method="post">
            <div id="sendDiv">
                <label class="font-semibold lg:text-[20px] text-sm" for="usernameField">Email</label>
                <input
                    class="flex items-center h-12 px-4 lg:w-[400px] w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="email" name="email" type="text">

                <button type="button"
                    class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-md text-blue-100 hover:bg-blue-700"
                    name="getotp" id="getotp" value="1" onclick="handleClick()">
                    <!-- <h1 class="block" id="button"> -->
                    Get OTP
                    <!-- </h1> -->
                    <!-- <span id="loader"
                        class="animate-spin w-6 h-6 border-4 border-slate-400 border-t-slate-100  rounded-full hidden"></span> -->
                </button>
            </div>
            <div id="verifyDiv" class="mt-3">
                <label class="font-semibold lg:text-[20px] text-sm mt-3" for="passwordField">Enter OTP </label>
                <input
                    class="flex items-center h-12 px-4 lg:w-[400px] w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="enterOTP" name="enterOTP" type="text">

                <button
                    class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-md text-blue-100 hover:bg-blue-700 flex justify-center items-center"
                    type="button" name="sbmt" id="sbmt" onclick="handleSubmit()" value="1">
                    <span class="h-2 w-2"></span>
                    <span>Login</span>
                </button>
            </div>
            <div class="flex mt-6 justify-center lg:text-[15px] text-sm">
                <p>if don't have any account </p>
                <span class="mx-2 text-gray-300">/</span>
                <a class="text-blue-400 hover:text-blue-500" href="signup.php">Sign Up</a>
                <input type="text" class="hidden" name="loginOtp" id="loginOtp" />
                <input type="text" class="hidden" name="responseText" id="responseText" />
                <input type="text" class="hidden" name="pid" id="pid" value="<?php echo $pid ?>">
            </div>
        </form>
    </div>
    <!-- Component End  -->


    <script>
        function ajaxCall(method, url, data, destination, isHtml) {
            var xhttp = new XMLHttpRequest();

            xhttp.onload = function () {
                if (isHtml) {
                    document.getElementById(destination).innerHTML = this.responseText;
                } else {
                    document.getElementById(destination).value = this.responseText;
                }
            };

            xhttp.open(method, url, false);
            xhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");

            xhttp.send(data);
        }

        async function handleClick() {
            // const button = document.getElementById("button")
            // const loader = document.getElementById("loader")
            // button.classList.remove("block")
            // loader.classList.remove("hidden")

            // loader.classList.add("block")
            // button.classList.add("hidden")

            var email = document.getElementById("email").value;

            let result = checkEmpty(email)

            if (result) {



                ajaxCall("POST", "mail.php", "getotp=1&email=" + email, "loginOtp", false);
                let value = document.getElementById("loginOtp").value;
                if (value === "" || value === null) {
                    alert("OTP is not send something went wrong!");
                } else {
                    if (value === "enter valid email") {
                        alert("enter valid email");
                    } else {

                        alert("The OTP is send your Email ID");
                        document.getElementById("enterOTP").focus();
                    }
                }
            } else {
                alert("please enter email")
            }
        }

        function handleSubmit() {

            var email = document.getElementById("email").value;
            var userOTP = document.getElementById("enterOTP").value;
            var systemOTP = document.getElementById("loginOtp").value;
            var submitButton = document.getElementById("sbmt").value;
            var pid = document.getElementById("pid").value;

            ajaxCall(
                "POST",
                "mail.php",
                `email=${email}&userOTP=${userOTP}&systemOTP=${systemOTP}&submitValue=${submitButton}`,
                "responseText",
                false
            );

            let responseValue = document.getElementById("responseText").value
            if (responseValue === '1') {
                alert("successfully")
                if (pid !== "" || pid !== undefined) {
                    window.location.href = "home.php";
                }
                else{
                    window.location.href = "product_detail.php?pid=" + pid;
                }
            } else {
                alert("otp not matched")
            }

            return false;
        }

        function checkEmpty(emailString) {
            if (emailString !== "" && emailString !== null) return true
            return false
        }
    </script>
</body>

</html>