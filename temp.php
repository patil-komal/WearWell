<!DOCTYPE html>

<!-- <?php
if (isset($_POST["login"])) {

    // Authorisation details.
    $username = "patilkomal939@gmail.com";
    $hash = "703ef0ee9fbfb4b437a3d519009eeb492a89d909b4239f38025a36b55d8b2d40";

    
    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    $name = $_POST['name'];

    // Data for text message. This is the text message data.
    $sender = "API Test"; // This is who the message appears to be from.
    $numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
    $otp = rand(100000, 999999);
    setcookie("otp", $otp);
    $message = "hey " . $name . "your otp is : " . $otp;
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('https://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    if ($result) {
        echo ("OTP SENT SUCCESSFULLY ");
    }
    curl_close($ch);

}

if (isset($_POST["ver"])) {
    $verotp = $_POST["otp"];
    if ($verotp == $_COOKIE['otp']) {
        echo "login successfully";
    } else {
        echo "otp wrong";
    }
}
?> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temp</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body>
    <form action="temp.php" method="post">
            <div class="" id="sendDiv"> 
            <tr>
                <td>Name :- </td>
                <td><input type="text" name="name" id="name" placeholder="Enter Your Name"></td>
            </tr>
            <tr>
                <td>Email :- </td>
                <td><input type="email" name="email" id="email" placeholder="Valid ! with country code "></td>
            </tr>
            <tr>
                <td></td>
                <td><button onclick = "return sendOtp()">Get Otp</button></td>
            </tr>
            </div>
            <div  class="hidden" id="verifyDiv">
            <tr>
                <td>verify otp : </td>
                <td><input type="text" name="otp" id="otp" placeholder="enter received otp"></td>
            </tr>
            <tr>
                <td></td>
                <td><button onclick = "return verifyOtp()">verify Otp</button></td>
            </tr>
            </div>
    </form>

    <script>
        //contact form

        // function sendMessage() {
        //     (function () {
        //         emailjs.init("W1DtM2vy9k64ImV22");
        //     })();

        //     var serviceId = "service_fwikaeu";
        //     var templateId = "template_ota2dbp";
        //     var params = {
        //         sendername: document.querySelector("#name").value,
        //         senderemail: document.querySelector("#email").value,
        //         subject: document.querySelector("#subject").value,
        //         message: document.querySelector("#message").value,
        //     };
        //     emailjs
        //         .send(serviceId, templateId, params)
        //         .then((res) => {
        //             alert("Thanks " + params["sendername"] + " your message has been sent");
        //         })
        //         .catch();
        // }

        function checkEmpty(elementId, elementName){
            var element = document.getElementById(elementId).value;
            if(element = ""){
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
                        6
                    })
                    .catch();
            }

            //                    verifybtn.classList.add("block");
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
</body>

</html>