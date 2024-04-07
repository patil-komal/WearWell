<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "products");
$id = $_GET['pid'];

if (isset($_POST['addToCart'])) {
    // echo "hello";
    if (isset($_SESSION["cid"])) {
        // header("Location:addcart.php");
        $cid = $_SESSION["cid"];
        $cardcheck = "select count(*) as COUNT from cart where pid = $id AND cid = $cid";
        $cardresult = mysqli_query($conn, $cardcheck);
        $cart = mysqli_fetch_assoc($cardresult);
        $data = $cart['COUNT'];
        if ($data == 0) {

            $sql = "insert into cart (pid,cid) value($id,$cid)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location:addcart.php");
            }
        } else {
            echo "<script>alert('Already added in cart')</script>";
        }
    } else {
        header("Location:login.php?pid=" . $id);
    }
}
if (isset($_POST['order'])) {
    if (isset($_SESSION["cid"])) {
        $cid = $_SESSION["cid"];
        // echo "<script>alert(".$cid.")</script>"; 
        $check = "select count(*) as COUNT from ordertbl where pid = $id AND cid = $cid";
        $checkresult = mysqli_query($conn, $check);
        $row = mysqli_fetch_assoc($checkresult);
        $order = $row['COUNT'];
        if ($order == 0) {
            // echo "<script>alert('new data')</script>";
            $orderquery = "INSERT INTO `ordertbl`(`cid`, `pid`) VALUES ('$cid','$id')";
            $orderresult = mysqli_query($conn, $orderquery);
            if ($orderresult) {

                header("Location:order.php?pid=" . $id);
            } else {
                echo "<script>alert('some problem occcupy')</script>";
            }
        } else {

            header("Location:order.php?pid=" . $id);
        }
    } else {
        header("Location:login.php?pid=" . $id);
    }
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

<body class="font-sans">
    <?php
    include "navbar.php";
    ?>

    <section class="overflow-hidden bg-white  font-poppins">
        <div class="w-[100%] px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                    <div class=" overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 lg:ml-[150px]">
                            <img src="<?php echo $row['img'] ?>" alt=""
                                class="object-content lg:w-[600px] w-full lg:h-[1000px] shadow-lg shadow-gray-400">
                        </div>

                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20 ">
                        <div class="mb-8">

                            <h2 class="max-w-xl mt-2 mb-6 text-2xl font-bold dark:black md:text-4xl">
                                <?php echo $row['pname'] ?>
                            </h2>

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
                                delivery charge :
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
                        if ($category == "saree" || $category == "finnerwear" || $category == "minnerwear" || $category == "Dresses" || $category == "Rompers" || $category == "wwatch" || $category == "mwatch") {
                            ?>
                            <div class="flex items-center mb-8">
                                <h2 class="w-16 text-xl font-bold dark:black">
                                    Size:</h2>
                                <h4 class="text-gray-900 font-serif text-xl px-1 py-1 border border-gray-200">Free Size</h4>
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
                                <form action="" method="post">
                                    <button
                                        class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300 block"
                                        name="addToCart" id="addToCart">
                                        <i class="fa-solid fa-cart-shopping  mr-2"></i>
                                        Add to Cart
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300 hidden"
                                        name="doneCart" id="doneCart">
                                        done
                                    </button>
                                </form>
                            </div>
                            <div class="w-full px-4 mb-4 lg:mb-0 lg:w-[40%]">
                                <form action="order.php" method="">
                                    <button
                                        class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300"
                                        name="order">
                                        <i class="fa-solid fa-angles-right mr-2"></i>
                                        Order
                                    </button>
                                    <input type="hidden" name="pid" value="<?php echo $row['pid'] ?>">

                                    
                                </form>
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