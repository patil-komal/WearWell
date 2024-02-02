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
</head>

<body>

<!-- navbar -->

<div class="sticky top-0 max-w-full fixed top-0 mx-h-auto z-50 bg-gray-100 ">
    <nav class="border-gray-200 px-2 py-5 mb-0 border-b-[1px] border-gray-500">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <a href="#" class="flex">
                <img src="img/logo3.png" alt="Logo" class="h-10 w-auto rounded-full" />
                <span class="m-auto lg:text-3xl md:text-lg pl-3">Wear<span
                        class="m-auto lg:text-3xl md:text-lg">Well</span></span>
            </a>
            <div class="flex md:order-2">
                <div class="relative mr-3 md:mr-0 md:flex">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex justify-between lg:w-full w-40">
                        <input type="text" id="email-adress-icon"
                            class="bg-gray-50 border flex border-gray-300 text-gray-900 sm:text-sm radius-10 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-2"
                            placeholder="Search..." />

                        <i class="fa-solid fa-user m-auto lg:pl-5 pl-2 w-auto" data-dropdown-toggle="profile"
                            data-dropdown-trigger="hover"></i>
                        <i class="fa-solid fa-cart-shopping m-auto lg:pl-5 pl-2 w-auto"></i>

                    </div>
                </div>
                <button data-collapse-toggle="mobile-menu-3" type="button"
                    class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                    aria-controls="mobile-menu-3" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-3">
                <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-lg md:font-medium">
                    <li>
                        <a href="home.php"
                            class="md:bg-transparent text-gray-700 block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="about.php"
                            class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Services</a>
                    </li>
                    <li>
                        <a href="contact.php"
                            class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact
                            us</a>
                    </li>
                </ul>
            </div>
            <!-- profile sub menu -->

            <?php
            if (isset($_SESSION['cid'])) {
                ?>
                     <div class="container px-5 py-[45px] mx-auto text-gray-600 body-font z-50 hidden bg-gray-500  hidden bg-white divide-x divide-gray-100 shadow w-fit flex border border-gray-200 drop-shadow-md opacity-[95%]"
                id="profile" aria-labelledby="dropdownHoverButton">
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-[350px] md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-2xl mb-3">Hello <?php $_SESSION['cname'];?></h2>
                           
                            <i class="fa-solid fa-bag-shopping text-xl"></i>
                            <a href="#" class="text-2xl">My Order</a>
                            <form action="" method="post">
                            <input type="submit" value="log out" name="logout"
                                class="text-white bg-indigo-500 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg  w-[220px] h-[50px]  mb-3" >
                                </input><br></form>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            }else {
                ?>
                     <div class="container px-5 py-[45px] mx-auto text-gray-600 body-font z-50 hidden bg-gray-500  hidden bg-white divide-x divide-gray-100 shadow w-fit flex border border-gray-200 drop-shadow-md opacity-[95%]"
                id="profile" aria-labelledby="dropdownHoverButton">
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-[350px] md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-2xl mb-3">Hello User</h2>
                            <p class="leading-relaxed text-base mb-2">To access your wear well accound</p>
                            <button
                                class="text-white bg-indigo-500 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg  w-[220px] h-[50px]  mb-3"><a href="signup.php">Sign
                                Up</a></button><br>
                            <i class="fa-solid fa-bag-shopping text-xl"></i>
                            <a href="#" class="text-2xl">My Order</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
        </div>
    </nav>
</div>


<!-- sub navbar  -->
<div class="sticky top-20 max-w-full fixed top-0 mx-h-auto z-30 bg-gray-100 border-t-[3px] border-gray-500 ">
    <div class="overflow-x-auto ">
        <nav class="header-links contents font-semibold text-base lg:text-xl ">
            <ul class="flex  justify-around items-center ml-4 xl:ml-8 mr-auto  ">
                <li class="p-3 xl:p-6 active hover:text-cyan-500 hover:underline" data-dropdown-toggle="WomenEthnic"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Women Ethnic</span>
                    </a>
                </li>
                <li class="p-3 xl:p-6  hover:text-cyan-500 hover:underline" data-dropdown-toggle="WomenWestern"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Women Western</span>
                    </a>
                </li>
                <li class="p-3 xl:p-6 hover:text-cyan-500 hover:underline" data-dropdown-toggle="Men"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Men</span>
                    </a>
                </li>
                <li class="p-3 xl:p-6 hover:text-cyan-500 hover:underline" data-dropdown-toggle="Kids"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Kids</span>
                    </a>
                </li>
                <li class="p-3 xl:p-6 hover:text-cyan-500 hover:underline" data-dropdown-toggle="Watch"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Watch</span>
                    </a>
                </li>
                <li class="p-3 xl:p-6 hover:text-cyan-500 hover:underline" data-dropdown-toggle="Footwear"
                    data-dropdown-trigger="hover">
                    <a href="">
                        <span>Foot Wear</span>
                    </a>
                </li>
            </ul>


            <!--menus on hover-->
            <!-- women Ethnic menu -->
            <div id="WomenEthnic"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[200px] flex border border-gray-200 drop-shadow-md opacity-[95%]">
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">All Women </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'Allp.php?gender=female'">View All</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Sarees</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'All products.php?category=saree'">All Saree</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black "
                            onclick="window.location.href = 'products.php?type=cotton saree'">Cotton Sarees</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'products.php?type=silk saree'">Silk Sarees
                        </a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Kurtis</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'All products.php?category=kurtis'">All Kurtis</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'products.php?type=anarkali kurtis'">Anarkali Kurtis</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'products.php?type=cotton kurtis'">Cotton Kurtis
                        </a>
                    </li>
                </ul>
            </div>

            <!-- women western menu -->
            <div id="WomenWestern"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[200px] flex border border-gray-200 drop-shadow-md opacity-[95%]">

                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Top Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Tops</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Dreeses</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Jumpsuits
                        </a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Inner Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Bra</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Briefs</a>
                    </li>

                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">Bottom Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">View
                            All</a>
                    </li>
                </ul>
            </div>

            <!-- men menu -->
            <div id="Men"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[200px] flex border border-gray-200 drop-shadow-md opacity-[95%]">
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">All</a>
                    </li>
                    <hr>
                    <li>
                        <a href="men.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'Allp.php?gender=male'">View All</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Top Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">All
                            TopWear</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Shirt</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">T-Shirt
                        </a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Bottom Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Jeans</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Trousers</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Track
                            Pants</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Inner Wear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">All
                            Inner Wear</a>
                    </li>
                </ul>
            </div>

            <!-- kids menu  -->
            <div id="Kids"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[200px] flex border border-gray-200 drop-shadow-md opacity-[95%]">
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">All</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'Allp.php?gender=kids'">View All</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Boys & Girls 2+ Years</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Dresses</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Infant 0-2 Years</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Rompers</a>
                    </li>
                </ul>
            </div>

            <!-- Watch menus  -->
            <div id="Watch"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[200px] flex border border-gray-200 drop-shadow-md opacity-[95%]">
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">All Watches</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'Allp.php?gender=watch'">View All</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">Watches</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Women
                            Watch</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">men
                            Watch</a>
                    </li>
                </ul>

            </div>

            <!-- FootWear Menus  -->
            <div id="Footwear"
                class="z-10 hidden bg-white divide-x divide-gray-100 shadow w-fit h-[250px] flex border border-gray-200 drop-shadow-md opacity-[95%]">
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">All Footwear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black"
                            onclick="window.location.href = 'Allp.php?gender=footwear'">View All</a>
                    </li>

                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black " aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500 ">Women Footwear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Flats</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Juttis</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Shoes</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Hills</a>
                    </li>
                </ul>
                <ul class="lg:text-lg text-md text-gray-700 dark:text-black bg-gray-100"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a class="block px-4 py-2 text-cyan-500">Male Footwear</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Sports
                            Shoes</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Casual
                            Shoes</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Formal
                            Shoes</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-200 dark:hover:text-black">Sandals</a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
</div>

<?php
    if (isset($_POST['logout'])) {
        session_destroy();
    }
?>

	<!-- component -->
	<form action="" method="post">
		<div class="h-[710px] bg-neutral-200 py-6 flex flex-col justify-center sm:py-12">
			<div class="relative py-3 lg:w-[450px] sm:max-w-md sm:mx-auto">
				<div
					class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
				</div>
				<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
					<div class="max-w-md mx-auto">
						<div>
							<h1 class="text-2xl font-semibold">Login Here</h1>
						</div>
						<div class="divide-y divide-gray-200">
							<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
								<div class="relative">
									<input autocomplete="off" id="email" name="email" type="email"
										class="h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
										placeholder="email" required/>
									<!-- <label for="email"
										class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
										</label> -->
								</div>
								 <!-- <div class="relative">
									<input autocomplete="off" id="email" name="password" type="password"
										class="h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
										placeholder="" required/>
									<label for="password"
										class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label> 
								</div> -->
								<div class="relative">
									<button type="submit" class="bg-blue-500 text-white rounded-md px-2 py-1"
										name="getotp">GET OTP</button>
								</div>
								<div class="relative text-sm text-gray-400">
									<h2>if not have account..</h2>
									<h3>click here to <a href="signup.php" class="text-blue-500"> sign up</h3></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

<?php
    $conn = mysqli_connect("localhost","root","","product");
    $query = "select * from customer";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if (isset($_POST['getotp'])) {
        $email = $_POST['email'];
        $query1 = "SELECT count(*) as count FROM `customer` WHERE `email` LIKE '$email'";
        $result1 = mysqli_query($conn, $query1);
        $row = mysqli_fetch_assoc($result1);
        // echo $row['count'];
        if ($row['count'] > 0) {
           ?>
           <script>
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
           <?php
        }
        else{
            echo "enter valid email";
        }
    }
?>

</html>