<?php
session_start();
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

<body>
    <?php
    include "navbar.php";
    ?>

    <!-- Component Start -->
    <div class="flex flex-col items-center justify-center h-[600px] bg-gray-200 text-gray-700">
        <h1 class="font-bold text-2xl">LOGIN HERE 💻</h1>
        <form class="flex flex-col  bg-white rounded shadow-lg p-12 mt-12 lg:w-[500px] lg:h-[450px]" action="#"
            method="post">
            <div id="sendDiv">
                <label class="font-semibold lg:text-[20px] text-sm" for="usernameField">Email</label>
                <input
                    class="flex items-center h-12 px-4 lg:w-[400px] w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="email" name="email" type="text">

                <button
                    class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-md text-blue-100 hover:bg-blue-700"
                    name="getotp" onclick="return sendOtp()">Get OTP</button>
            </div>
            <div id="verifyDiv" class="mt-3">
                <label class="font-semibold lg:text-[20px] text-sm mt-3" for="passwordField">Enter OTP </label>
                <input
                    class="flex items-center h-12 px-4 lg:w-[400px] w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="otp" name="otp" type="text">

                <button
                    class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-md text-blue-100 hover:bg-blue-700"
                    name="verotp" onclick="return verifyOtp()">Login</button>
            </div>
            <div class="flex mt-6 justify-center lg:text-[15px] text-sm">
                <p>if don't have any account </p>
                <span class="mx-2 text-gray-300">/</span>
                <a class="text-blue-400 hover:text-blue-500" href="#">Sign Up</a>
            </div>

        </form>
    </div>
    <!-- Component End  -->
    <?php
    include "footer.php";
    ?>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "product");
    $query = "select * from customer";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if (isset($_POST['getotp'])) {
        $email = $_POST['email'];
        $query1 = "SELECT count(*) as count FROM `customer` WHERE `email` LIKE '$email'";
        $result1 = mysqli_query($conn, $query1);
        $row = mysqli_fetch_assoc($result1);
        // echo $row['count'];
        if ($row['count'] > 1) {
            ?>
            <script>
                function checkEmpty(elementId, elementName) {
                    var element = document.getElementById(elementId).value;
                    if (element = "") {
                        alert(elementName + " can't be empty !");
                        document.getElementById(elementId).focus();
                        return false;
                    }
                    return true;
                }

                //otp send
                var otp = Math.floor(Math.random() * 1000000);

                function sendOtp() {
                    var result = checkEmpty('email', 'Email');
                    if (result) {
                        (function () {
                            emailjs.init("W1DtM2vy9k64ImV22");
                        })();

                        var serviceId = "service_fwikaeu";
                        var templateId = "template_46gu0x4";
                        var params = {
                            senderemail: document.querySelector("#email").value,
                            sendotp: "Your otp to login is : " + otp,
                        };
                        emailjs
                            .send(serviceId, templateId, params)
                            .then((res) => {
                                alert("Otp has been sent to your email");
                            })
                            .catch();
                    }

                    return false;
                }

                //otp verify
                function verifyOtp() {
                    var verifyOtp = document.querySelector("#otp").value;
                    if (verifyOtp.match(otp)) {
                        alert("matched");
                    } else {
                        alert("Please enter correct Otp!!");
                        document.getElementById("otp").focus();
                        return false;
                    }
                    return true;
                }
            </script>
            <?php
        } else {
            echo "enter valid email";
        }

    }
    ?>
</body>




</html>