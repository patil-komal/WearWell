<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "products");
$pid = $_GET['pid'];
if (isset($_SESSION['cid'])) {
  $cid = $_SESSION['cid'];
  $displayorder = "SELECT p.pname , p.img , p.desprice , p.delcharge , o.oid from product p , ordertbl o where p.pid = '$pid' and o.cid = '$cid'";
  $display = mysqli_query($conn, $displayorder);
  $row = mysqli_fetch_assoc($display)
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

  <body>
    <?php
    include "navbar2.php";
    ?>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap border border-gray-500">
          
          <img src="<?php echo $row['img']?>" alt="" class="lg:w-[8%] w-[8%] h-[30%]">
          <h3><?php echo $row['pname']?></h3>
          <h2 class=""><?php echo $row['desprice']?></h2>
      
          <div class="md:w-3/5 md:pl-6">
            <p class="leading-relaxed text-base">Taxidermy bushwick celiac master cleanse microdosing seitan. Fashion axe
              four dollar toast truffaut, direct trade kombucha brunch williamsburg keffiyeh gastropub tousled squid meh
              taiyaki drinking vinegar tacos.</p>
            <div class="flex md:mt-4 mt-6">
              <button
                class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
              <a class="text-indigo-500 inline-flex items-center ml-4">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

    </section>
  </body>
  <?php
}
?>

</html>