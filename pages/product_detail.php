<?php
include './funcs/products.php';
include './config.php';
$product = GetAllProductById(conn(), $_GET['id']);
?>
<div class="w-full flex justify-center my-5">
    <div class="max-w-[1300px] flex justify-center gap-5">
        <div class="flex gap-5 justify-center text-[12px] text-nowrap items-center">
            <img class="max-h-[32px]" src="./images/index/icons/USA_200x.svg" alt=""><span
                    class="text-main">USA Made</span>
        </div>
        <div class="flex gap-5 text-[12px] justify-center items-center">
            <img class="max-h-[32px]" src="./images/index/icons/traceble.svg" alt=""><span class="text-main">100% Traceable</span>
        </div>
        <div class="flex gap-5 text-[12px] justify-center items-center">
            <img class="max-h-[32px]" src="./images/index/icons/lab.svg" alt=""><span
                    class="text-main">Lab Tested</span>
        </div>
        <div class="flex gap-5 text-[12px] justify-center items-center">
            <img class="max-h-[32px]" src="./images/index/icons/orgainc.svg" alt=""><span
                    class="text-main">USA Organic</span>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <div class="flex flex-1 gap-x-8 max-w-[1440px] justify-center">
        <div class="w-5/12 h-[670px]">
            <img src="./images/category/<?php echo $product['imageUrl'] ?>" alt="">
        </div>
        <div class="w-5/12 p-8">
            <h1 class="my-4 text-2xl font-extrabold"><?php echo $product['productName'] ?></h1>
            <p class="py-2"><?php echo $product['introduce'] ?></p>
            <p class="py-4 text-xl font-bold">$36.02</p>
            <div class="p-4 block h-[47px] border-2 max-w-[30%]">
                <input class="w-full" type="number" min="1" size="4" value="1">
            </div>
            <div class="w-full bg-gray-200 mt-5 rounded-2xl p-4">
                <div class="my-4">
                    <h3 class="font-extrabold text-2xl my2">Description</h3>
                    <p><?php echo $product['description'] ?></p>
                </div>
                <div class="my-4">
                    <h3 class="font-extrabold text-2xl my-2">Ingredients</h3>
                    <p><?php echo $product['ingredients'] ?></p>
                </div>
                <div class="my-4">
                    <h3 class="font-extrabold text-2xl my2">User Guide</h3>
                    <p><?php echo $product['productUserGuide'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>