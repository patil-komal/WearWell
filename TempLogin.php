<script src="https://cdn.tailwindcss.com"></script>

<form>
  <input type="email" name="email" id="email" />

  <button type="button"
    class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-md text-blue-100 hover:bg-blue-700"
    name="getotp" id="getotp" value="1" onclick="handleClick()">
    <span class="block" id="buttonTitle">Get OTP</span>
    <span class="h-10 rounded-full w-10 border-4 border-t-gray-900 animate-spin hidden" id="loader"></span>
  </button>

  <input type="text" name="enterOTP" id="enterOTP" />

  <button type="button" name="sbmt" id="sbmt" value="1" onclick="handleSubmit()">Login</button>

  <input type="text" name="loginOtp" id="loginOtp" />

  <input type="text" name="responseText" id="responseText">
</form>

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

  function handleClick() {
    var email = document.getElementById("email").value;
    document.getElementById("loader").style.display = "block"
    // check email empty
    if (email === "") {
      alert("email can't be empty");
      document.getElementById("loader").style.display = "hidden"
    }
    else {
      ajaxCall("POST", "mail.php", "getotp=1&email=" + email, "loginOtp", false);
      let value = document.getElementById("loginOtp").value;
      if (value === "" || value === null) {
        alert("OTP is not send something went wrong!");
      } else {
        alert("The OTP is send your Email ID");
        document.getElementById("loader").style.display = "hidden"
        document.getElementById("enterOTP").focus();
      }
    }


  }

  function handleSubmit() {

    var email = document.getElementById("email").value;
    var userOTP = document.getElementById("enterOTP").value;
    var systemOTP = document.getElementById("loginOtp").value;
    var submitButton = document.getElementById("sbmt").value;

    ajaxCall(
      "POST",
      "mail.php",
      `email=${email}&userOTP=${userOTP}&systemOTP=${systemOTP}&submitValue=${submitButton}`,
      "responseText",
      false
    );
    return false;
  }
</script>