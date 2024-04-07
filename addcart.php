<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "products");
if (isset($_SESSION['cid'])) {
    $cid = $_SESSION['cid'];
    $query = "SELECT p.pid, p.pname , p.img , p.originalpice , p.desprice , p.delcharge , p.type , p.category , c.ctid from product p , cart c where p.pid = c.pid and c.cid = $cid";
    $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);

    if (isset($_POST['CartOrder'])) {
        header("Location:cart_order.php?totalprice=");
    }

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
        <link rel="icon" type="image/x-icon" href="img/logo3.png" />
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </head>

    <body class="font-sans">
        <?php

        include "navbar.php";
        ?>

        <section class="flex items-center font-poppins  ">
            <div class="justify-center flex-1 px-1 py-6 mx-auto max-w-[95%] lg:py-4 md:px-6 shadow-md shadow-gray-200">
                <h2 class="mb-10 text-4xl font-bold text-center font-serif">Your Cart</h2>
                <form class="flex flex-wrap" method="post" 
                >
                    <div class="w-full lg:w-8/12">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <section class="px-10 mr-[10%]">
                                <div
                                    class="relative flex flex-wrap items-center pb-8 mb-8 -mx-4 border-b border-gray-200 dark:border-gray-700 xl:justify-between border-opacity-40">
                                    <div class="w-full mb-2 lg:mb-0 h-96 md:h-44 md:w-44">
                                        <img src="<?php echo $row['img'] ?>" alt="" class="object-cover w-full h-full">
                                    </div>
                                    <div class="w-full px-4 mb-6 md:w-auto xl:mb-0">
                                        <a class="block mb-5 lg:text-2xl text-xl font-medium">
                                            <?php echo $row['pname'] ?>
                                        </a>
                                        <div class="flex flex-wrap">
                                            <p class="mr-4 text-md font-medium">
                                                <span class="font-bold">type</span>
                                                <span class="ml-2"><?php echo $row['type']?></span>
                                            </p>
                                            <p class="text-md font-medium">
                                                <span class="font-bold">Category</span>
                                                <span class="ml-2 "><?php echo $row['category']?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 mt-6 mb-6 xl:w-auto xl:mb-0 xl:mt-0">
                                        <div class="flex items-center">
                                            <h4 class="mr-4 font-medium">Qty:</h4>
                                            <div
                                                class="inline-flex items-center px-4 font-semibold  border border-gray-300 rounded-md  dark:border-gray-700">
                                                <button
                                                    class="py-2 pr-2 hover:text-gray-700"
                                                    onclick="handlePlus(event)">
                                                    +
                                                </button>
                                                <div class="product"
                                                    class="w-12 px-4 py-4 text-center  rounded-md  md:text-right placeholder-black">
                                                    1</div>
                                                <button
                                                    class="py-2 pl-2  hover:text-gray-700"
                                                    onclick="handleMinus(event)">
                                                    -
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 xl:w-auto">
                                        <span class="text-xl font-medium text-blue-500 ">
                                            <span class="price" id="<?php echo $row['desprice'] ?>">
                                                <?php echo $row['desprice'] ?>
                                            </span>
                                        </span>
                                    </div>
                                    

                                    <button name="delete"  type="submit"  value="<?php echo $row['pid']?>"
                                        class="absolute top-0 right-0 lg:mt-6 lg:-mr-4 hover:text-gray-600 dark:hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="w-6 h-6 bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>

                                    
                            
                                    <div class="w-full xl:w-auto mt-[15%]">
                                        <span class="text-md font-medium ">
                                            <span class="">Delivery-charge</span>
                                            <span class="text-gray-600 ml-1 Deliverycharge">
                                                <?php echo $row['delcharge'] ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </section>
                        <?php } ?>
                    </div>

                    <div class="w-full lg:w-4/12">
                        <div>
                            <h2 class="mb-6 text-3xl font-bold ">Cart totals</h2>
                            <div
                                class="flex items-center justify-between px-10 py-4 mb-3 font-medium leading-8  bg-opacity-50 border dark:border-gray-800 rounded-xl">
                                <span>Subtotal</span>
                                <span class="flex items-center text-xl">
                                    <span class="mr-2 text-md">₹</span>
                                    <span id="totalProductPrice">710,70</span>
                                </span>
                            </div>
                            <div
                                class="flex items-center justify-between px-10 py-4 mb-3 font-medium leading-8  bg-opacity-50 border  dark:border-gray-800 rounded-xl">
                                <span>Shipping</span>
                                <span class="flex items-center text-xl">
                                    <span class="mr-2 text-md">₹</span>
                                    <span id="totalDeliveryPriceDiv"></span>
                                </span>
                            </div>
                            <div
                                class="flex items-center justify-between px-10 py-4 mb-6 font-medium leading-8 border  dark:border-gray-800 rounded-xl">
                                <span>Total</span>
                                <span class="flex items-center text-xl text-blue-500 dark:text-blue-400">
                                    <span class="ml-[80%] text-base">₹</span>
                                    <input name="totalOrderPrice" id="totalOrderPrice"
                                        class="border-none outline-none text-end w-full">
                                    </input>
                            </div>
                            <div>
                                <button name="CartOrder" type="submit"
                                    class="inline-block w-full px-6 py-4 text-lg font-medium leading-6 tracking-tighter text-center text-white bg-blue-500 lg:w-auto hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- </div> -->
        </section>

        


        <script type="text/javascript">
            load()
            function load() {

                // count for price
                let totalProductPrice = 0
                // all price divs
                let allPriceDiv = document.getElementsByClassName("price");
                // total price div
                let totalProductPriceDiv = document.getElementById("totalProductPrice")

                // count for delivery charge
                let totalDeliveryPrice = 0
                // all delivery charge divs
                let DeliverychargeDiv = document.getElementsByClassName("Deliverycharge")
                // total delivery charge div
                let totalDeliveryPriceDiv = document.getElementById("totalDeliveryPriceDiv")

                let totalOrderPrice = document.getElementById("totalOrderPrice")


                for (const key in allPriceDiv) {
                    if (Object.hasOwnProperty.call(allPriceDiv, key)) {
                        const element = allPriceDiv[key];
                        let price = element.innerText;
                        if (price.includes("₹")) {
                            totalProductPrice += parseInt(price.slice(1))
                        } else {
                            totalProductPrice += Number(price)
                        }
                    }
                }

                totalProductPriceDiv.innerText = totalProductPrice

                for (const key in DeliverychargeDiv) {
                    if (Object.hasOwnProperty.call(DeliverychargeDiv, key)) {
                        const element = DeliverychargeDiv[key];
                        let price = element.innerText;
                        if (price.includes("₹")) {
                            totalDeliveryPrice += parseInt(price.slice(1))
                        }
                        else if (price === "Free") {
                            totalDeliveryPrice += 0
                        }
                        else {
                            totalDeliveryPrice += Number(price)
                        }
                    }
                }
                totalDeliveryPriceDiv.innerText = totalDeliveryPrice;

                totalOrderPrice.value = totalProductPrice + totalDeliveryPrice
                

            }

            function handlePlus(event) {
                let button = event.target
                let container = button.closest("section")
                let productDiv = container.querySelector(".product")
                let priceDiv = container.querySelector(".price");
                let productCount = productDiv.innerHTML
                let ProductPrice = priceDiv.id
                if (ProductPrice.includes("₹")) {
                    ProductPrice = parseInt(ProductPrice.slice(1));
                }
                productCount++
                productDiv.innerHTML = productCount
                priceDiv.innerHTML = productCount * ProductPrice
                load()
            }

            function handleMinus() {
                let button = event.target
                let container = button.closest("section")
                let productDiv = container.querySelector(".product")
                let priceDiv = container.querySelector(".price");
                let productCount = productDiv.innerHTML
                let ProductPrice = priceDiv.id
                if (ProductPrice.includes("₹")) {
                    ProductPrice = parseInt(ProductPrice.slice(1));
                }
                if (productCount > 1) {
                    productCount--;
                    productDiv.innerHTML = productCount
                    priceDiv.innerHTML = Number(priceDiv.innerHTML) - Number(ProductPrice)
                    load()
                }
            }
        </script>

        <?php 
            if (isset($_POST['delete'])) {
               
                    $id = $_POST['delete'];
                    // echo "<script>alert(".$id.")</script>";

                    $deletequery = "DELETE FROM product WHERE `product`.`pid` = '$id'";
                    $deleteresult = mysqli_query($conn, $deletequery);
                
                    if ($deleteresult) {
                        echo "<script>alert('product deleted')
                        window.location.href = 'addcart.php'
                        </script>";
                    }else {
                        echo "<script>alert('product cant be deleted')</script>";
                    }
                
            }

            
    

        ?>
        <?php
} else {
    header("Location:login.php");
}
?>
</body>

</html>