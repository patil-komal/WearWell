<?php
$conn = mysqli_connect("localhost", "root", "", "products");
?>

<div class="z-10 w-full p-4">
    <header class="px-5 py-4 ">
        <h2 class="font-semibold text-2xl text-center text-white">Order Detail</h2>
    </header>
    <table class="mt-4 w-full table-auto text-left shadow-lg shadow-gray-600">
        <thead>
            <tr>
                <th class=" cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors
            hover:bg-blue-gray-50 ">
                    <p class=" antialiased font-sans text-sm flex items-center justify-between gap-2 leading-none
            font-bold">
                        Customer Name
                    </p>
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                        Email
                    </p>
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                        Address
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
                        Product
                    </p>
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm  flex items-center justify-between gap-2 font-bold leading-none ">
                        Price
                    </p>
                </th>


            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT p.pid, p.pname , p.img , p.desprice , c.cname , c.email , c.address ,o.oid from product p , customer c ,ordertbl o where o.pid = p.pid and o.cid = c.cid ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    <?php echo $row['cname']; ?>
                                </p>

                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['email'] ?>
                            </p>
                        </div>
                    </td>

                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['address'] ?>
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['pname'] ?>
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="<?php echo $row['img'] ?>" alt="John Michael"
                                class="inline-block relative object-cover object-center w-20 h-20 rounded-md">

                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="w-max">
                            <p class="block antialiased font-sans text-md leading-normal text-blue-gray-900 font-normal">
                                <?php echo $row['desprice'] ?>
                            </p>
                        </div>
                    </td>


                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>