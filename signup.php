<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WearWell</title>
	<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
	<link rel="stylesheet"
		href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" type="image/x-icon" href="img/logo3.png" class="icon" />
	<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</head>

<body class="font-serif">
<?php
	$conn = mysqli_connect("localhost", "root", "", "products");
	if (isset($_POST['name'])) {
		if (isset($_POST['registerbtn'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$mobile = $_POST['mno'];
			$address = $_POST['address'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$pincode = $_POST['pincode'];
			$query = "INSERT INTO `customer` ( `cname`, `email`, `gender`, `mobile`, `address`, `country`, `state`, `city`, `pincode`) VALUES ( '$name', '$email', '$gender', '$mobile', '$address', '$country', '$state', '$city', '$pincode');";
			$result = mysqli_query($conn, $query);
			if ($result) {
				header("Location:login.php");
			} else {
				?>
				<script> alert("cant register")</script>
				<?php
			}

		}
	}
	?>
	<?php
		include "navbar2.php";
	?>
	<div
		class="grid max-w-screen-2xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 shadow-xl shadow-gray-400">
		<div class="flex flex-col">
			<div class="space-y-1">
				<h2 class="text-4xl font-bold leadi lg:text-5xl">Let's Shoping</h2>
				<div class="dark:text-gray-400">Register to continue shoping</div>
			</div>
			<img src="img/fashion/s3.png" alt="" class="lg:h-[500px] lg:mt-[20%]">
		</div>
		<form novalidate="" class="space-y-6" method="post">
			<h1 class="text-4xl font-bold">Register Here</h1>	
			<div>
				<label for="name" class="text-sm">Full name</label>
				<input id="name" type="text" placeholder="" class="w-full p-3 rounded " name="name"
					fdprocessedid="ogvbg">
			</div>
			<div>
				<label for="email" class="text-sm">Email</label>
				<input id="email" type="email" class="w-full p-3 rounded " name="email" fdprocessedid="0r5vp">
			</div>
			<div>
				<label for="gender" class="text-sm">Gender :- </label>
				<input type="radio" name="gender" id="male" value="male" class="h-3 w-3 mr-1 ml-2">male
				<input type="radio" name="gender" id="female" value="female" class="h-3 w-3 mr-1 ml-2">female
				<input type="radio" name="gender" id="other" value="other" class="h-3 w-3 mr-1 ml-2">other
			</div>
			<div>
				<label for="mno" class="text-sm">Mobile Number</label>
				<input id="mno" type="text" class="w-full p-3 rounded " name="mno" fdprocessedid="0r5vp">
			</div>
			<div>
				<label for="address" class="text-sm">Address</label>
				<textarea name="address" id="address" class="rounded w-full h-[100px] "></textarea>
			</div>
			<div>
				<label for="country" class="text-sm">Country :- </label>
				<select name="country" id="country" class="lg:ml-2 w-[400px] ml-0 rounded" onchange="loadStates()">
					<option value="defult">Select Country</option>
				</select><br><br>
				<label for="state" class="text-sm">State :- </label>
				<select name="state" id="state" class="state  lg:ml-5 w-[400px] ml-4 rounded" onchange="loadCities()">
					<option value="default" class="">Select State</option>
				</select>
			</div>
			<div>
				<label for="city" class="text-sm">City :- </label>
				<select name="city" id="city" class="city lg:ml-8 w-[200px] ml-4 rounded">
					<option value="default">Select City</option>
				</select>
				<label for="pincode" class="text-sm lg:ml-[15%] ml-[5%]">Pincode :- </label>
				<input type="text" name="pincode" id="pincode" class="lg:w-[100px] w-[80px] h-[30px] rounded">
			</div>
			
			<button type="submit"
				class="w-fit  p-3 text-sm font-bold tracki uppercase rounded dark:bg-violet-400 dark:text-gray-900"
				fdprocessedid="gonf1a" name="registerbtn" id="registerbtn">Register</button>

			<h1>Already have account <a href="login.php" class="text-blue-400">login</a>
			</h1>
		</form>
	</div>

</body>

</html>

<script>
	var config = {
        cUrl: 'https://api.countrystatecity.in/v1',
		ckey: 'd1VxcnBBcE5WZDBxOW1OVTJ4dldlR2hiOWVCdmhENlhxbmFycXhNVQ=='
    }

    var countrySelect = document.querySelector('#country'),
        stateSelect = document.querySelector('#state'),
        citySelect = document.querySelector('#city');

    function loadCountries() {
        countrySelect.disabled = false;
        stateSelect.disabled = true;
        citySelect.disabled = true;

        countrySelect.innerHTML = '<option value="">Select Country</option>';
        stateSelect.innerHTML = '<option value="">Select State</option>';
        citySelect.innerHTML = '<option value="">Select City</option>';

        fetch(`${config.cUrl}/countries`, {
            headers: { "X-CSCAPI-KEY": config.ckey }
        })
        .then(response => response.json())
        .then(data => {
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.iso2;
                option.textContent = country.name;
                countrySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading countries:', error));
    }

    function loadStates() {
        stateSelect.disabled = false;
        citySelect.disabled = true;

        const selectedCountryCode = countrySelect.value;

        stateSelect.innerHTML = '<option value="">Select State</option>';
        citySelect.innerHTML = '<option value="">Select City</option>';

        fetch(`${config.cUrl}/countries/${selectedCountryCode}/states`, {
            headers: { "X-CSCAPI-KEY": config.ckey }
        })
        .then(response => response.json())
        .then(data => {
            data.forEach(state => {
                const option = document.createElement('option');
                option.value = state.iso2;
                option.textContent = state.name;
                stateSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading states:', error));
    }

    function loadCities() {
        citySelect.disabled = false;

        const selectedCountryCode = countrySelect.value;
        const selectedStateCode = stateSelect.value;

        citySelect.innerHTML = '<option value="">Select City</option>';

        fetch(`${config.cUrl}/countries/${selectedCountryCode}/states/${selectedStateCode}/cities`, {
            headers: { "X-CSCAPI-KEY": config.ckey }
        })
        .then(response => response.json())
        .then(data => {
            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.name;
                option.textContent = city.name;
                citySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading cities:', error));
    }

    window.onload = loadCountries;
</script>