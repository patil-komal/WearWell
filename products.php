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
        include "navbar.php";
    ?>
    <?php
    	$conn = mysqli_connect("localhost", "root", "", "products");
        $type=$_GET['type'];
    

    $query = "SELECT * FROM `product` WHERE `type` LIKE '$type' ";
    $result = mysqli_query($conn, $query);
    ?>

    
        <div class="w-[1350] mx-auto grid lg:grid-cols-4 md:grid-cols-2 gap-6 px-[20px] w-full h-auto mt-3">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="text-center shadow-lg shadow-gray-200 h-fit overflow-hidden " onclick="window.location.href = 'product_detail.php?pid=<?php echo $row['pid']?>'">
                    <div class="h-3/4 flex justify-center">
                        <img src="<?php echo $row["img"]; ?>" alt="..."
                            class="w-80 h-60 transform hover:scale-110 transition-transform duration-300 ease-in-out" />
                    </div>
                    <div class="h-[15%]">
                        <h3 class="py-3 text-xl truncate font-normal">
                            <?php echo $row["pname"]; ?>
                        </h3>
                        <p class="py-2">
                            <?php echo $row["desprice"]; ?>
                        </p>
                        <p class="py-0 line-through text-gray-500">
                            <?php echo $row["originalpice"]; ?>
                        </p>
                        <p class="py-2">
                            <?php echo $row["delcharge"]; ?>
                        </p>

                    </div>
                </div>
            <?php } ?>
   
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
 <!-- footer -->
</body>

</html>