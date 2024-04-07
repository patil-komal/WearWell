<!-- component -->
<?php
$conn = mysqli_connect("localhost", "root", "", "products");
?>
<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-10">
    <h1 class="text-xl font-bold text-center text-white capitalize dark:text-white">ADD PRODUCT</h1>
    <form method="post" action="">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="name">Product Name</label>
                <input id="name" type="text" name="pname"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="img">Product Image</label>
                <input id="img" type="text" name="img"
                    class="block w-full h-10 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="oprice">Original Price</label>
                <input id="oprice" type="text" name="oprice"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="dprice">Discounted Price</label>
                <input id="dprice" type="text" name="dprice"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="gender">Gender</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="gender">
                    <?php
                    $genderquery = "select gender from product group by gender";
                    $genderresult = mysqli_query($conn, $genderquery);
                    while ($row = mysqli_fetch_assoc($genderresult)) { ?>
                        <option value="<?php echo $row['gender']; ?>">
                            <?php echo $row['gender']; ?>
                        </option>
                    <?php }
                    ?>
                </select>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="category">Category</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="category">
                    <?php
                    $categoryquery = "select category from product group by category";
                    $categoryresult = mysqli_query($conn, $categoryquery);
                    while ($row = mysqli_fetch_assoc($categoryresult)) { ?>
                        <option value="<?php echo $row['category']; ?>">
                            <?php echo $row['category']; ?>
                        </option>
                    <?php }
                    ?>
                </select>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="type">Type</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="type">
                    <?php
                    $typequery = "select type from product group by type";
                    $typeresult = mysqli_query($conn, $typequery);
                    while ($row = mysqli_fetch_assoc($typeresult)) { ?>
                        <option value="<?php echo $row['type']; ?>">
                            <?php echo $row['type']; ?>
                        </option>
                    <?php }
                    ?>
                </select>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="dcharge">Delivery Charge</label>
                <input id="dcharge" type="text" name="dcharge"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="detail">Product Detail</label>
                <textarea id="detail" type="textarea" name="pdetail"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="description">Product Description</label>
                <textarea id="description" type="textarea" name="pdescription"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="quantity">Quantity</label>
                <input id="quantity" type="text" name="quantity"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>
        <input type="hidden" name="product" value="true">
        <input type="hidden" name="addproduct" value="true">

        <div class="flex justify-end mt-6">
            <button name="add" type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-600">ADD</button>
        </div>
    </form>
</section>

<?php
$conn = mysqli_connect("localhost", "root", "", "products");
if (isset ($_POST['add'])) {
   $pname = $_POST['pname'];
   $img = $_POST['img'];
   $oprice = $_POST['oprice'];
   $dprice = $_POST['dprice'];
   $gender = $_POST['gender'];
   $category = $_POST['category'];
   $type = $_POST['type'];
   $dcharge = $_POST['dcharge'];
   $detail = $_POST['pdetail'];
   $description = $_POST['pdescription'];
   $quantity = $_POST['quantity'];

   $insertproduct = "INSERT INTO `product`(`pname`, `img`, `originalpice`, `desprice`, `gender`, `category`, `type`, `delcharge`, `detail`, `description`, `availability`) VALUES ('$pname','$img','$oprice','$dprice','$gender','$category','$type','$dcharge','$detail','$description','$quantity ')";
   $productresult = mysqli_query($conn , $insertproduct);
   if ($productresult) {
    echo "<script>alert('product added')</script>";
    header("Location:Dashboard.php?product=true");
   }
   else {
    echo "<script>alert('cant added')</script>";
   }

}
?>