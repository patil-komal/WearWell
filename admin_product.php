<?php
$conn = mysqli_connect("localhost", "root", "", "products");
?>
<!-- searchbar  -->
<section id="product">
    <div class="mt-[1%] lg:flex justify-end lg:h-10 h-10 ">
        <form method="post">
            <button class="h-10 w-[15%] bg-gray-800 mr-[50%] ml-1" name="addproduct">
                <i class="fa-solid fa-plus"></i>
                Add Product
            </button>
        </form>
        <form class="lg:w-1/2  lg:flex justify-evenly items-center">
            <label for="search" class="mt-1 ">
                Select Category :
            </label>
            <select name="search" id="search" class="lg:px-2 px-1 mx-2 bg-gray-500">
                <option class="">-- Select a category --</option>
                <?php
                $query1 = "select category from product GROUP BY category";
                $result1 = mysqli_query($conn, $query1);
                while ($row1 = mysqli_fetch_assoc($result1)) { ?>

                    <option name="option" value="<?php echo $row1['category'] ?>" class="">
                        <?php echo $row1['category'] ?>
                    </option>
                <?php }
                ?>
            </select>
            <input type="hidden" name="product" value="true">
            <button type="submit" class="bg-gray-400 hover:bg-gray-300 hover:text-black w-20 px-3 py-0.5 rounded "
                name="CategorySearch">Search</button>
        </form>
    </div>
    <!-- component -->
    <div class="z-10 w-full p-4">
        <table class="mt-4 w-full table-auto text-left shadow-lg shadow-gray-600"">
        <thead>
            <tr>
                <th
                    class=" cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors
            hover:bg-blue-gray-50 ">
                    <p
                        class=" antialiased font-sans text-sm flex items-center justify-between gap-2 leading-none
            font-bold">
            Product Id
            </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Products
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Product Name
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Original Price
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Discounted Price
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Gender
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Category
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Type
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Quantity
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                    Delivery charge
                </p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none o">
                    Edit</p>
            </th>
            <th
                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                <p
                    class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none o">
                    Delete</p>
            </th>
            </tr>
            </thead>
            <tbody>
                <?php
                $sql = "";
                if (isset($_GET['search'])) {
                    $option = $_GET['search'];
                    $sql = "select * from product where category like '$option'";
                    // $result = mysqli_query($conn,$sql);
                } else {
                    $sql = "select * from product where category like 'saree'";
                }
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                        <?php echo $row['pid']; ?>
                                    </p>

                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <img src="<?php echo $row['img'] ?>" alt="John Michael"
                                    class="inline-block relative object-cover object-center w-20 h-20 rounded-md">

                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                    <?php echo $row['pname'] ?>
                                </p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                    <?php echo $row['originalpice'] ?>
                                </p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                    <?php echo $row['desprice'] ?>
                                </p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="w-max">
                                <p
                                    class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                    <?php echo $row['gender'] ?>
                                </p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['category'] ?>
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['type'] ?>
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['availability'] ?>
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['delcharge'] ?>
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-500">
                            <form>
                                <?php
                                if (isset($_GET['search'])) {
                                    $option = $_GET['search'];
                                    ?>
                                    <input type="hidden" name="search" value="<?php echo $option ?>">
                                    <?php
                                }
                                ?>
                                <input type="hidden" name="product" value="true">
                                <button
                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 outline-none"
                                    type="submit" name="edit" value="<?php echo $row['pid'] ?>">
                                    <!-- data-modal-target="crud-modal" data-modal-toggle="crud-modal" -->
                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <!-- <i class="fa-solid fa-trash pl-10"></i> -->
                                </button>
                            </form>
                        </td>
                        <td class="p-4 border-b border-blue-gray-500">
                            <form method="GET">
                                <input type="hidden" name="product" value="true">
                                <button
                                    class="relative align-middle  select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 outline-none"
                                    type="submit" name="delete" value="<?php echo $row['pid'] ?>">
                                    <!-- <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-4 w-4">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                        </path>
                                    </svg>
                                </span> -->
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Modal toggle -->

<?php
if (isset($_GET['edit'])) {
    $pid = $_GET['edit'];
    $sql1 = "select * from product where pid = '$pid'";
    $execute = mysqli_query($conn, $sql1);
    $row2 = mysqli_fetch_assoc($execute); ?>
    <script>
        function handleClick() {
            // alert("hello")
            const modal = document.getElementById("crud-modal")
            console.log(modal);
            modal.classList.add("hidden")
            modal.classList.remove("flex")
        }
    </script>
    <div id="crud-modal" tabindex="-1" aria-modal="true" role="dialog"
        class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-900">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Update Product Detail
                    </h3>
                    <button type="button" onclick="handleClick()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" method="post">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Name</label>
                            <input type="text" name="pname" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?php echo $row2['pname'] ?>" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Original
                                Price</label>
                            <input type="text" name="oprice" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?php echo $row2['originalpice'] ?>" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discounted
                                Price</label>
                            <input type="text" name="dprice" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?php echo $row2['desprice'] ?>" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity
                            </label>
                            <input type="text" name="quantity" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?php echo $row2['availability'] ?>" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Delivery Charges
                            </label>
                            <input type="text" name="dcharge" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="<?php echo $row2['delcharge'] ?>" required="">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php
if (isset($_POST['update'])) {
    $pname = $_POST['pname'];
    $oprice = $_POST['oprice'];
    $dprice = $_POST['dprice'];
    $quantity = $_POST['quantity'];
    $dcharge = $_POST['dcharge'];

    $updatequery = "UPDATE `product` SET `pname` = '$pname' , `originalpice` = '$oprice' , `desprice` = '$dprice' , `availability` = '$quantity' , `delcharge` = '$dcharge' WHERE `product`.`pid` = $pid";

    $updateresult = mysqli_query($conn, $updatequery);

    if ($updateresult) {
        echo "<script>
            alert('Update Succcessfully')
            handleClick()
            window.location.href = 'Dashboard.php?product=true'
        </script>";
        // header("Location: Dashboard.php?product=true");
    }
}

if (isset($_POST['addproduct'])) {
    echo "
        <script>
            const section = document.getElementById('product')
            section.classList.add('hidden')
        </script>
    ";
    include "admin_add_product.php";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    echo $id;
    $deletequery = "DELETE FROM product WHERE `product`.`pid` = '$id'";
    $deleteresult = mysqli_query($conn, $deletequery);

    if ($deleteresult) {
        echo "<script>alert('product deleted')
        window.location.href = 'Dashboard.php?product=true'
        </script>";
    }
}
?>
<!-- Main modal -->