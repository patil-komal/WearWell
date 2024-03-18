<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <style>
    ::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #ffffff;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #e1e1e1;
      border-radius: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #d0d0d0;
    }
  </style>
</head>

<body class="h-full w-full font-serif">
  <?php
  session_start();
  // echo $_SESSION['cid'];
 
  include "navbar.php";
  ?>

  <!-- corosel -->
  <div id="default-carousel" class="relative px-3 mb-2 w-full lg:h-[400px] h-[200px]" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden rounded-lg md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f6.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f2.jpg"
          class="object-content absolute block w-full lg:h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f3.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f4.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/fashion/f5.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <!-- section 1 -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full  mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Top Categories to choose from</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">products for you.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 lg:w-full w-[300px] h-full bg-cover object-center"
              src="img/men/men1.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Urbane Latest Men Shirts
              </h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹258</h1>
              <p class="leading-relaxed">Name : Urbane Latest Men Shirts <br>
                Fabric : cotton <br>
                Sleeve Length : short Sleeves
                <br>Free Delivery.
              </p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/men/menu1.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Men Formal Shirts</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹308</h1>
              <p class="leading-relaxed">Name : Men Formal Shirts <br>
                Fabric : Cotton Blend <br>
                Sleeve Length : Long Sleeves <br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/men/menu2.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Imported Formal Shirts For
                Mens</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹236</h1>
              <p class="leading-relaxed">Name : Imported Formal Shirts For Mens <br>
                Fabric : Cotton <br>
                Sleeve Length : Long Sleeves <br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/women/wmenu1.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Women Dresses</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹338</h1>
              <p class="leading-relaxed">Name : Women Dresses<br>
                Fabric : Polyester <br>
                Sleeve Length : Sleeveless <br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/women/wmenu3.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Premium Kurta Set For
                Women</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹283</h1>
              <p class="leading-relaxed">Name : Premium Kurta Set For Women<br>
                Kurta Fabric : Crepe<br>
                Bottomwear Fabric : Crepe<br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/women/wmenu4.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Anarkali Kurti with
                Palazzo </h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹370</h1>
              <p class="leading-relaxed">Name : Anarkali Kurti with Palazzo <br>
                Kurta Fabric : Rayon <br>
                Sleeve Length : Long Sleeves <br>
                Free Delivery
              </p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/kids/kid5.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">kids fashion</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹400</h1>
              <p class="leading-relaxed">Name :kids fashion<br>
                Fabric : cotton <br>
                Sleeve Length : full <br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/kids/kid6.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">yellow shirt</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹283</h1>
              <p class="leading-relaxed">Name : yellow shirt for kids<br>
                Kurta Fabric : rayon<br>
                Bottomwear Fabric : Crepe<br>
                Free Delivery</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full bg-cover object-center" src="img/kids/kid7.jpg">
            <div
              class="px-8 py-10 relative z-10 lg:w-full w-[300px] border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">girl gaun </h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">₹400</h1>
              <p class="leading-relaxed">Name : girl gaun<br>
                Kurta Fabric : cotton <br>
                Sleeve Length : sleeveless<br>
                Free Delivery
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- card -->
  <?php
  $conn = mysqli_connect("localhost", "root", "", "products");


  $query = "SELECT * FROM `product` WHERE `type` LIKE 'cotton saree' ";
  $result = mysqli_query($conn, $query);
  ?>

  <main class="border border-gray-400 mt-5">
    <div class="h-1/2 border border-yellow-200">
      <h1 class="lg:text-4xl text-2xl text-gray-900 ml-2 mt-3 mb-3 text-center font-serif">Some Product for you</h1>
      <hr>
      <h1 class="lg:text-3xl text-xl ml-2 h-[10%] text-gray-700 mb-2 mt-2">Female Clothes</h1>
      <div class="grid grid-flow-col overflow-auto gap-10 border-gray-400 h-[90%] justify-start items-center">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <!-- product card -->

          <div class="border border-slate-200 lg:h-[350px] h-[300px] lg:w-[300px] w-[250px] rounded-lg shadow-lg"
            onclick="window.location.href = 'product_detail.php?pid=<?php echo $row['pid'] ?>'">
            <div class="h-[70%] w-full pt-2">
              <img src="<?php echo $row['img'] ?>" alt="sarees"
                class="object-contain object-bottom m-auto h-[95%] w-full">
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-[500]">Sarees</h1>
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-normal">
                <?php echo $row['pname'] ?>
              </h1>
            </div>
            <div class="h-[10%] flex">
              <div class="flex justify-center items-center">
                <?php echo $row['desprice'] ?>
              </div>
              <div class="flex justify-center items-center text-sm line-through ml-1">
                <?php echo $row['originalpice'] ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="h-1/2 border border-gray-400"></div>
  </main>

  <!-- card 2  -->

  <?php
  $conn = mysqli_connect("localhost", "root", "", "products");


  $query = "SELECT * FROM `product` WHERE `type` LIKE 'anarkali kurtis' ";
  $result = mysqli_query($conn, $query);
  ?>

  <main class="border border-gray-400 mt-5">
    <div class="h-1/2 border border-yellow-200">
      <hr>
      <h1 class="lg:text-3xl text-xl ml-2 h-[10%] text-gray-700 mb-2 mt-2">Female Dresses</h1>
      <div class="grid grid-flow-col overflow-auto gap-10 border-gray-400 h-[90%] justify-start items-center">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <!-- product card -->

          <div class="border border-slate-200 lg:h-[350px] h-[300px] lg:w-[300px] w-[250px] rounded-lg shadow-lg"
            onclick="window.location.href = 'product_detail.php?pid=<?php echo $row['pid'] ?>'">
            <div class="h-[70%] w-full pt-2">
              <img src="<?php echo $row['img'] ?>" alt="sarees"
                class="object-contain object-bottom m-auto h-[95%] w-full">
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-[500]">Sarees</h1>
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-normal">
                <?php echo $row['pname'] ?>
              </h1>
            </div>
            <div class="h-[10%] flex">
              <div class="flex justify-center items-center">
                <?php echo $row['desprice'] ?>
              </div>
              <div class="flex justify-center items-center text-sm line-through ml-1">
                <?php echo $row['originalpice'] ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="h-1/2 border border-gray-400"></div>
  </main>

  <!-- card 3  -->

  <?php
  $conn = mysqli_connect("localhost", "root", "", "products");


  $query = "SELECT * FROM `product` WHERE `type` LIKE 'shirt' ";
  $result = mysqli_query($conn, $query);
  ?>

  <main class="border border-gray-400 mt-5">
    <div class="h-1/2 border border-yellow-200">
      <hr>
      <h1 class="lg:text-3xl text-xl ml-2 h-[10%] text-gray-700 mb-2 mt-2">Male Clothes</h1>
      <div class="grid grid-flow-col overflow-auto gap-10 border-gray-400 h-[90%] justify-start items-center">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <!-- product card -->

          <div class="border border-slate-200 lg:h-[350px] h-[300px] lg:w-[300px] w-[250px] rounded-lg shadow-lg"
            onclick="window.location.href = 'product_detail.php?pid=<?php echo $row['pid'] ?>'">
            <div class="h-[70%] w-full pt-2">
              <img src="<?php echo $row['img'] ?>" alt="sarees"
                class="object-contain object-bottom m-auto h-[95%] w-full">
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-[500]">Sarees</h1>
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-normal">
                <?php echo $row['pname'] ?>
              </h1>
            </div>
            <div class="h-[10%] flex">
              <div class="flex justify-center items-center">
                <?php echo $row['desprice'] ?>
              </div>
              <div class="flex justify-center items-center text-sm line-through ml-1">
                <?php echo $row['originalpice'] ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="h-1/2 border border-gray-400"></div>
  </main>

<!-- card 4  -->

<?php
  $conn = mysqli_connect("localhost", "root", "", "products");


  $query = "SELECT * FROM `product` WHERE `type` LIKE 'kdresses' ";
  $result = mysqli_query($conn, $query);
  ?>

  <main class="border border-gray-400 mt-5">
    <div class="h-1/2 border border-yellow-200">
      <hr>
      <h1 class="lg:text-3xl text-xl ml-2 h-[10%] text-gray-700 mb-2 mt-2">Kids Clothes</h1>
      <div class="grid grid-flow-col overflow-auto gap-10 border-gray-400 h-[90%] justify-start items-center">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <!-- product card -->

          <div class="border border-slate-200 lg:h-[350px] h-[300px] lg:w-[300px] w-[250px] rounded-lg shadow-lg"
            onclick="window.location.href = 'product_detail.php?pid=<?php echo $row['pid'] ?>'">
            <div class="h-[70%] w-full pt-2">
              <img src="<?php echo $row['img'] ?>" alt="sarees"
                class="object-contain object-bottom m-auto h-[95%] w-full">
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-[500]">Sarees</h1>
            </div>
            <div class="h-[10%]">
              <h1 class="text-lg truncate font-normal">
                <?php echo $row['pname'] ?>
              </h1>
            </div>
            <div class="h-[10%] flex">
              <div class="flex justify-center items-center">
                <?php echo $row['desprice'] ?>
              </div>
              <div class="flex justify-center items-center text-sm line-through ml-1">
                <?php echo $row['originalpice'] ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="h-1/2 border border-gray-400"></div>
  </main>

  <!-- Carousel 2 -->

  <div id="default-carousel" class="relative px-3 mb-2 mt-10 w-full lg:h-[400px] h-[200px]" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden rounded-lg md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f14.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f15.jpg"
          class="object-content absolute block w-full lg:h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f16.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-800 ease-in-out" data-carousel-item>
        <img src="img/fashion/f17.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/fashion/f18.jpg"
          class="object-content absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <!-- footer -->
  <?php
  include "footer.php";
  ?>

</body>

</html>