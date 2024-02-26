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
    <link rel="icon" type="image/x-icon" href="img/logo3.png" />
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <div
        class="bg-[url('img/fashion/f7.jpg')] lg:h-[400px] h-[200px] w-[100%] bg-no-repeat bg-cover bg-center flex justify-center items-center">
        <div class="h-[100%] w-[100%] flex flex-col justify-center items-center bg-[#ffffff80]   rounded-md">
            <h1 class="lg:text-4xl text-xl text-black font-bold mb-3">Wear Well</h1>
            <p class="lg:text-xl text-sm text-black font-bold">The e-commerce website to fashionable people</p>
        </div>
    </div>

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-black pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-black">This website has been created
                    for online shopping. The goal of this website is to provide good quality clothes and other cheap
                    miles to everyone. You can get all kinds of clothes here and they are also of good quality.
                    Every company's shoes and watches are also here.
                    This is a secure and safe website.
                    You can easily buy things here.
                    thank you.</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="img/fashion/f10.jpg" alt="A group of People" />
            </div>
        </div>
        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-black pb-4">Our mission</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-black">It is a long established fact

                    Our goal is that everyone should get good quality products at low prices.
                    And everyone can do online shopping easily.</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-[150px]" src="img/fashion/f9.jpg"
                            alt="Alexa featured Image" />
                        <img class="md:hidden block" src="img/fashion/f9.jpg"
                            alt="Alexa featured Image" />
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-[150px]" src="img/fashion/f11.jpg"
                            alt="Olivia featured Image" />
                        <img class="md:hidden block" src="img/fashion/f11.jpg"
                            alt="Olivia featured Image" />
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-[150px]" src="img/fashion/f12.jpg"
                            alt="Liam featued Image" />
                        <img class="md:hidden block" src="img/fashion/f12.jpg"
                            alt="Liam featued Image" />
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-[150px] w-[150px]" src="img/fashion/f13.jpg"
                            alt="Elijah featured image" />
                        <img class="md:hidden block" src="img/fashion/f13.jpg"
                            alt="Elijah featured image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- team profile -->
    

    <?php
    include "footer.php";
    ?>
</body>

</html>