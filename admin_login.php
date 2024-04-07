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
    <link rel="icon" type="image/x-icon" href="img/logo4.png" />
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<!-- component -->

<body class="relative">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "products");

    if (isset($_POST["login"])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT count(*) as count from `admin` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($result);
        // verify the email address in database    
        if ($row['count'] == 1) {
            // echo "<script>alert('login successfully')</script>";
            $email = $_POST['email'];
            $admin = " SELECT * FROM `admin` WHERE `email` LIKE '$email'";
            $adminresult = mysqli_query($conn, $admin);
            $row1 = mysqli_fetch_assoc($adminresult);
            $aid = $row1['aid'];
            $_SESSION['aid'] = $aid;
            // echo "<script>alert(logging successfully)</script>"
            header("Location:Dashboard.php");
        } else {
            echo "<div class='bg-gray-300 w-80 text-center absolute top-2 left-0 m-auto right-0 z-50 py-1 rounded-md' id='toaster'>Enter Valid Email and Password</div>
            <script>
                setTimeout(() => {
                    document.getElementById('toaster').classList.add('hidden');
                }, 2000);
            </script>";
        }
    }
    ?>

    <section class="min-h-screen flex items-stretch text-white -z-10">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url(img/fashion/ecommerce.jpg);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">WELCOME</h1>
                <p class="text-3xl my-4">ADMIN..</p>
            </div>

        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
                style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-6 font-bold font-serif text-3xl">
                    LOGIN
                </h1>

                <form action="" method="post" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="block w-full p-4 text-lg rounded-sm bg-black" required>
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password"
                            id="password" placeholder="Password" required>
                    </div>

                    <div class="px-4 pb-2 pt-4">
                        <button name="login"
                            class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">Log
                            in</button>
                    </div>


                </form>
            </div>
        </div>
    </section>

</body>



</html>