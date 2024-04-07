<?php 
$conn = mysqli_connect("localhost", "root", "", "products");
?>

<section class="antialiased text-white px-4">
    <div class="flex flex-col justify-center mt-5 ">
        <!-- Table -->
        <div class="w-full mx-auto bg-gray-700  rounded-sm">
            <header class="px-5 py-4 ">
                <h2 class="font-semibold text-2xl text-center text-white">FEEDBACK</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto shadow-lg shadow-gray-600">
                    <table class="table-auto w-full ">
                        <thead class="text-lg font-semibold uppercase text-white bg-gray-700">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold  text-center">Username Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">User Full Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Subject</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Message</div>
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            <?php
                            $customerquery = "select * from feedback";
                            $customerresult = mysqli_query($conn, $customerquery);
                            while ($data = mysqli_fetch_assoc($customerresult)) { ?>
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-center">
                                            <?php echo $data['email'] ?>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-center">
                                            <?php echo $data['fname'] ?>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-center  font-medium">
                                            <?php echo $data['subject'] ?>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class=" text-center">
                                            <?php echo $data['message'] ?>
                                        </div>
                                    </td>
                                    
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>