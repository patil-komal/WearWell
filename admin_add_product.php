<!-- component -->
<?php
$conn = mysqli_connect("localhost", "root", "", "products");
?>
<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-10">
    <h1 class="text-xl font-bold text-center text-white capitalize dark:text-white">ADD PRODUCT</h1>
    <form method="post" action="">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="username">Product Name</label>
                <input id="username" type="text" name="pname"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Product Image</label>
                <input id="username" type="file" name="img"
                    class="block w-full h-10 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Original Price</label>
                <input id="username" type="text" name="oprice"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Discounted Price</label>
                <input id="username" type="text" name="dprice"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Gender</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
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
                <label class="text-white dark:text-gray-200" for="username">Category</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
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
                <label class="text-white dark:text-gray-200" for="username">Type</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
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
                <label class="text-white dark:text-gray-200" for="username">Delivery Charge</label>
                <input id="username" type="text" name="dcharge"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Product Detail</label>
                <textarea id="textarea" type="textarea" name="pdetail"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Product Description</label>
                <textarea id="textarea" type="textarea" name="pdescription"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="username">Quantity</label>
                <input id="username" type="text" name="quantity"
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
}
?>