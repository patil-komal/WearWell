<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "products");


if (isset($_POST['submitorder'])) {
  echo "<script>alert('order successfully')</script>";
  header("Location:home.php");
}

if (isset($_GET['pid'])) {

  $pid = $_GET['pid'];

  if (isset($_SESSION['cid'])) {
    $cid = $_SESSION['cid'];
    $displayorder = "SELECT p.pname , p.img , p.desprice ,p.originalpice, p.type , p.category, p.delcharge , o.oid ,o.cid  from product p , ordertbl o  where p.pid = '$pid'  and o.cid = '$cid'";
    $display = mysqli_query($conn, $displayorder);
    $row = mysqli_fetch_assoc($display);

    $customerdata = "SELECT * FROM `customer` WHERE `cid` = $cid";
    $customerresult = mysqli_query($conn, $customerdata);
    $data = mysqli_fetch_assoc($customerresult); ?>

 
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WearWell</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css" />
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
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
        <h1 class="text-3xl dark:text-black lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 text-center">
          YOUR ORDER
        </h1>

      </div>
      <div
        class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8  space-y-4 md:space-y-6 xl:space-y-0">
        <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
          <div
            class="flex flex-col justify-start items-start  bg-gray-200 shadow-lg shadow-gray-300  px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">

            <div
              class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
              <div class="pb-4 md:pb-8 w-full md:w-40">
                <img class="w-full hidden md:block" src="<?php echo $row['img'] ?>" alt="dress" />
                <img class="w-full md:hidden" src="<?php echo $row['img'] ?>" alt="dress" />
              </div>
              <div
                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                <div class="w-full flex flex-col justify-start items-start space-y-8">
                  <h3 class="text-xl dark:text-black xl:text-2xl font-semibold leading-6 text-gray-800">
                    <?php echo $row['pname'] ?>
                  </h3>
                  <div class="flex justify-start items-start flex-col space-y-2">
                    <p class="text-sm dark:text-black leading-none text-gray-800">
                      <span class="dark:text-gray-800 text-gray-300">type:
                      </span>
                      <?php echo $row['type'] ?>
                    </p>
                    <p class="text-sm dark:text-black leading-none text-gray-800">
                      <span class="dark:text-gray-800 text-gray-300">category:
                      </span>
                      <?php echo $row['category'] ?>
                    </p>
                    <p class="text-sm dark:text-black leading-none text-gray-800">
                      <span class="dark:text-gray-800 text-gray-300">Delivery:
                      </span>
                      <?php echo $row['delcharge'] ?>
                    </p>
                  </div>
                </div>
                <div class="flex justify-between space-x-8 items-start w-full">
                  <p class="text-base dark:text-black xl:text-lg leading-6">
                    <?php echo $row['desprice'] ?>
                    <span class="text-gray-500 line-through">
                      <?php echo $row['originalpice'] ?>
                    </span>
                  </p>
                  <p class="text-base dark:text-black xl:text-lg leading-6 text-gray-800">
                    01
                  </p>
                  <p class="text-base dark:text-black xl:text-lg font-semibold leading-6 text-gray-800">
                    <?php echo $row['desprice'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
            <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full  bg-gray-200 shadow-lg shadow-gray-300 space-y-6">
              <h3 class="text-xl dark:text-black font-semibold leading-5 text-gray-800">
                Summary
              </h3>
              <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                <div class="flex justify-between w-full">
                  <p class="text-base dark:text-black leading-4 text-gray-800">
                    Subtotal
                  </p>
                  <p class="text-base dark:text-black leading-4 text-gray-600" id="totalproductprice">
                    <?php echo $row['desprice'] ?>
                  </p>
                </div>

                <div class="flex justify-between items-center w-full">
                  <p class="text-base dark:text-black leading-4 text-gray-800">
                    delivery charge
                  </p>
                  <p class="text-base dark:text-gray-900 leading-4 text-gray-600" id="totaldesprice">
                    <?php echo $row['delcharge'] ?>
                  </p>
                </div>
              </div>
              <div class="flex justify-between items-center w-full">
                <p class="text-base dark:text-black font-semibold leading-4 text-gray-800">
                  Total
                </p>
                <p class="text-base dark:text-gray-900 font-semibold leading-4 text-gray-600" id="totalprice">

                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="bg-gray-200 shadow-lg shadow-gray-300 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
          <h3 class="text-xl dark:text-black font-semibold leading-5 text-gray-800">
            Customer
          </h3>
          <div
            class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
            <div class="flex flex-col justify-start items-start flex-shrink-0">
              <div
                class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">

                <div class="flex justify-start items-start flex-col space-y-2">
                  <p class="text-base dark:text-black font-semibold leading-4 text-left text-gray-800">
                    <?php echo $data['cname'] ?>
                  </p>

                </div>
              </div>

              <div
                class="flex justify-center text-gray-800 dark:text-black md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                <img class="dark:hidden bg-black"
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email" />
                <img class="hidden dark:block bg-black"
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg" alt="email" />
                <p class="cursor-pointer text-sm leading-5">
                  <?php echo $data['email'] ?>
                </p>
              </div>
            </div>
            <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
              <div
                class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                  <p class="text-base dark:text-black font-semibold leading-4 text-center md:text-left text-gray-800">
                    Shipping Address
                  </p>
                  <p
                    class="w-48 lg:w-full dark:text-black xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                    <?php echo $data['address'] ?>
                  </p>
                </div>
                <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                  <p class="text-base dark:text-black font-semibold leading-4 text-center md:text-left text-gray-800">
                    Cash On Delivery
                  </p>

                </div>
              </div>
              <div class="flex w-full justify-center items-center md:justify-start md:items-start">
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button"
                  class="mt-6 md:mt-0  dark:hover:bg-gray-700 dark:bg-black dark:text-white py-5 hover:text-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">
                  Order</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->



    <!-- Modal toggle -->
   

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-300">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
              Order
            </h3>
            <button type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="default-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500 dark:text-black">
              Order will be delivered on .. <br>
              <?php echo $data['address']?>
              this address .. <br>

              payment method is ...<br>
              CASH ON Delivery <br>

              Confirm Order ...?
            </p>
            
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <form action="" method="post">
            <button  name="submitorder"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Confirm</button></form>
            <button data-modal-hide="default-modal" type="button"
              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">cancel</button>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">

      load()
      function load() {
        // totalprice.innerText = totalprice

        // // let totalprice = 0
        let totalproductprice = document.getElementById("totalproductprice");
        let totaldesprice = document.getElementById("totaldesprice");

        let tprice = parseInt(totalproductprice.innerText.slice(1));
        let dprice = totaldesprice.innerText;

        if (dprice !== "Free") {
          let dprice = parseInt(totaldesprice.innerText);
          document.getElementById("totalprice").innerHTML = tprice + dprice
        } else {
          document.getElementById("totalprice").innerHTML = tprice
        }
      }
    </script>
  </body>
  <?php }else {
    header("Location:login.php");
  }
  ?>
  <?php
}
?>

</html>