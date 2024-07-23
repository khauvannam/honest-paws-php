<?php
include './funcs/products.php';
include './config.php';
$pdo = conn();
$products = getProductsByLimit($pdo, 20);
?>
<div class="mb-20">
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
    <div class="w-full flex justify-center">
        <div class="flex w-full max-w-[1440px] justify-between py-12 gap-10 flex-wrap">
            <?php foreach ($products
                           as $product): ?>
                <div class=" flex-[20%] max-h-[350px] my-5">
                    <div class="flex flex-col justify-between bg-[#f0f5ff] items-center rounded-lg mt-4 h-full">
                        <div class="w-[90%] flex justify-center bg-white rounded-lg">
                            <img class="h-[168px] object-fill"
                                 src="<?php echo './images/category/' . $product['imageUrl']; ?>"
                                 alt="">
                        </div>
                        <div class="flex items-center px-4">
                            <p class="my-4 py-3 font-bold text-start w-full"><?php echo $product['productName']; ?></p>
                        </div>
                        <p class="mb-5 px-4"><span>
                            <?php echo $product['introduce'] ?>
                        </span></p>
                        <button class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200 py-4">
                            <p class="text-white group-hover:text-main capitalize">
                                Add to cart
                            </p>
                        </button>
                    </div>
                  
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>

