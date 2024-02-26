<?php
$conn = mysqli_connect("sql.freedb.tech", "freedb_kps_root", "u@Jywn43rR&MD*5", "freedb_wear_well");
$id = $_GET['pid'];

if(isset($_GET['addToCart'])){
    // echo "hello";
    $sql = "insert into cart (pid,cid)";
}

$query = "select * from product where pid =" . $id;
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

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


</head>

<body class="">
    <?php
    include "navbar.php";
    ?>

    <section class="overflow-hidden bg-white  font-poppins">
        <div class="w-[100%] px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                    <div class=" overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 lg:ml-[150px]">
                            <img src="<?php echo $row['img'] ?>" alt="" class="object-content lg:w-[600px] w-full lg:h-[1000px] shadow-lg shadow-gray-400">
                        </div>
                        
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20 ">
                        <div class="mb-8">

                            <h2 class="max-w-xl mt-2 mb-6 text-2xl font-bold dark:black md:text-4xl">
                                <?php echo $row['pname'] ?>
                            </h2>
                            <div class="flex items-center mb-6 ">
                                <ul class="flex mr-2">
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 mr-1 text-red-500 dark:black bi bi-star "
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 mr-1 text-red-500 dark:black bi bi-star "
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 mr-1 text-red-500 dark:black bi bi-star "
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 mr-1 text-red-500 dark:black bi bi-star "
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <p class="text-xs dark:black ">(2 customer reviews)</p>
                            </div>

                            <div class="text-gray-800 mb-6">
                                <h1 class="text-xl mb-3">Description</h1>
                                <p class="text-xl mb-1">
                                    <?php $des = $row['description'];
                                    $description = explode(",", $des);
                                    foreach ($description as $desc) {

                                        ?>
                                    <p class="text-md mb-3">
                                        <?php echo $desc;

                                    } ?>
                                </p>
                                </p>
                            </div>
                            <p class="max-w-md text-2xl mb-5 text-sky-600 dark:black">
                                <?php echo $row['delcharge'] ?>
                            </p>
                            <p class="inline-block mb-8 text-4xl font-bold text-gray-700 dark:black ">
                                <span>
                                    <?php echo $row['desprice'] ?>
                                </span>
                                <span class="text-base font-normal text-gray-500 line-through dark:black">
                                    <?php echo $row['originalpice'] ?>
                                </span>
                            </p>
                            <p class="text-green-600 dark:text-blue-600 ">
                                <?php echo $row['availability'] ?> in stock
                            </p>
                        </div>
                        <?php
                        $category = $row['category'];
                        if ($category == "saree") {
                            ?>
                            <div class="flex items-center mb-8">
                                <h2 class="w-16 text-xl font-bold dark:black">
                                    Size:</h2>
                                <h4 class="text-gray-900 font-serif text-xl px-1 py-1 border border-gray-200">Free Size</h4>
                            </div>
                            <?php
                        } elseif ($category == "kurtis") {
                            ?>
                            <div class="flex items-center mb-8">
                                <h2 class="w-16 text-xl font-bold dark:black">
                                    Size:</h2>
                                <div class="flex flex-wrap -mx-2 -mb-2">
                                    <button
                                        class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 dark:border-gray-400 hover:text-blue-600 dark:hover:border-gray-300 dark:black" value="XL">XL
                                    </button>
                                    <button
                                        class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:black" value="S">S
                                    </button>
                                    <button
                                        class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:black" value="M">M
                                    </button>
                                    <button
                                        class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:black" value="XS">XS
                                    </button>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="text-gray-800">
                            <h1 class="text-2xl mb-3">Product Details</h1>
                            <p class="text-xl mb-1">
                                <?php $det = $row['detail'];
                                $detail = explode(",", $det);
                                foreach ($detail as $multi) {

                                    ?>
                                <p class="text-xl mb-3">
                                    <?php echo $multi;

                                } ?>
                            </p>
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 mt-8">
                            <div class="w-full px-4 mb-4 lg:w-[40%] lg:mb-0">
                                <a
                                    class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300"
                                    href="product detail.php?pid=<?php echo $id?>&addToCart=true">
                                    <i class="fa-solid fa-cart-shopping  mr-2"></i>
                                    Add to Cart
                                </a>
                            </div>
                            <div class="w-full px-4 mb-4 lg:mb-0 lg:w-[40%]">
                                <button
                                    class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                                    <i class="fa-solid fa-angles-right mr-2"></i>
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>