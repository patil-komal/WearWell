<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "products");

if (isset($_SESSION['cid'])) {
    $cid = $_SESSION['cid'];

    $orderquery = " SELECT   o.oid , o.pid , p.pid ,p.pname , p.img , p.desprice ,p.originalpice, p.type , p.category, p.delcharge  from ordertbl o , product p   where o.pid = p.pid and  o.cid = '$cid'";

    $queryresult = mysqli_query($conn,$orderquery);
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

    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl dark:text-black lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 text-center">YOUR ALL ORDERS
                </h1>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-400 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-black font-semibold leading-6 xl:leading-5 text-gray-800">
                        Orders</p>
                        
                      <?php while ($row = mysqli_fetch_assoc($queryresult)) { ?>
                      
                        
                       
                    <div
                        class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                        <div class="pb-4 md:pb-8 w-full md:w-40">
                            <img class="w-full hidden md:block" src="<?php echo $row['img']?>"
                                alt="dress" />
                            <img class="w-full md:hidden" src="<?php echo $row['img']?>" alt="dress" />
                        </div>
                        <div
                            class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                            <div class="w-full flex flex-col justify-start items-start space-y-8">
                                <h3 class="text-xl dark:text-black xl:text-2xl font-semibold leading-6 text-gray-800">
                                    <?php echo $row['pname']?></h3>
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-sm dark:text-black leading-none text-gray-800"><span
                                            class="dark:text-gray-900 text-gray-300">type: </span> <?php echo $row['type']?>
                                        </p>
                                    <p class="text-sm dark:text-black leading-none text-gray-800"><span
                                            class="dark:text-gray-900 text-gray-300">category: </span> <?php echo $row['category']?></p>
                                    <p class="text-sm dark:text-black leading-none text-gray-800"><span
                                            class="dark:text-gray-900 text-gray-300">delivery: </span> <?php echo $row['delcharge']?></p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-8 items-start w-full">
                                <p class="text-base dark:text-black xl:text-lg leading-6"><?php echo $row['desprice']?> <span
                                        class="text-gray-700 line-through"> <?php echo $row['originalpice']?></span></p>
                                <p class="text-base dark:text-black xl:text-lg leading-6 text-gray-800">01</p>
                                <p class="text-base dark:text-black xl:text-lg font-semibold leading-6 text-gray-800">
                                    $<?php echo $row['desprice']?></p>
                            </div>
                        </div>
                    </div>
                    <?php  }?>  
                </div>
                
            </div>
           
        </div>
    </div>

</body>
<?php }else {
    header("Location:login.php");
}

?>
</html>