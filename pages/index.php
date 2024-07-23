<div class="w-full pt-10 px-10 flex justify-center">
    <div class="w-full max-w-[1300px] justify-between flex">
        <div class="w-5/12 mt-20">
            <h1 class="text-4xl font-extrabold text-main uppercase">
                Every dog deserves to feel their best
            </h1>
            <p class="pt-4 pb-6 text-main">
                Help your pet stay calm through stressful situations like fireworks, separation anxiety, new routines,
                and travel. Order now and watch their transformation.
            </p>
            <div class="mb-12">
                <button class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200">
                    <p class="text-white group-hover:text-main">
                        Learn More
                    </p>
                </button>
            </div>
            <div class="flex justify-between w-full gap-10">
                <div class="flex flex-col gap-5 justify-center">
                    <img class="max-h-[32px]" src="./images/index/icons/USA_200x.svg" alt=""><span class="text-main">USA Made</span>
                </div>
                <div class="flex flex-col gap-5 justify-center">
                    <img class="max-h-[32px]" src="./images/index/icons/traceble.svg" alt=""><span class="text-main">100% Traceable</span>
                </div>
                <div class="flex flex-col gap-5 justify-center">
                    <img class="max-h-[32px]" src="./images/index/icons/lab.svg" alt=""><span class="text-main">Lab Tested</span>
                </div>
                <div class="flex flex-col gap-5 justify-center">
                    <img class="max-h-[32px]" src="./images/index/icons/orgainc.svg" alt=""><span class="text-main">USA Organic</span>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <img src="./images/index/slider.webp" alt="">
        </div>
    </div>
</div>

<div class="pt-10 pb-8">
    <h1 class="font-extrabold text-3xl px-24 mb-5 text-center text-main">
        Science-backed essentials for your pets
    </h1>
    <div class="flex w-full h-full justify-center">
        <?php
        include './config.php';
        include './funcs/categories.php';
        $pdo = conn();
        $categories = getCategories($pdo);
        foreach ($categories as $category): ?>
            <div class="flex flex-col text-main justify-between bg-[#f0f5ff] items-center rounded-2xl w-[300px] m-3 transition-all duration-300 group">
                <a href="<?php echo './route.php?page=categories&id=' . $category['id'] ?>"
                   class="rounded-t-2xl flex justify-center w-[95%] bg-white">
                    <img class="h-[168px] object-fill"" src="<?php echo './images/category/' . $category['imageurl']; ?>
                    " alt="">
                </a>
                <p class="rounded-b-2xl py-4 w-full text-center group-hover:bg-[#FADC6F] bg-transparent"><?php echo $category['categoryname']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="pb-10 w-full flex justify-center items-center">
    <div class="w-full max-w-[1300px] flex-col flex items-center">
        <h3 class="pb-6 text-center">
            <span class="text-2xl text-main font-bold">Honest Paws essentials</span><span
                    class="text-4xl text-main">-</span><span class="italic text-2xl text-main font-bold">Daily Routines. Long Term Benefits.</span>
            <p class="text-main pt-2">Their products are science-backed and formulated by a team of scientists,
                veterinarians, and PhDs.</p>
        </h3>
        <div class="flex justify-between w-full">
            <div class="w-6/12 pt-10">
                <img src="./images/index/science-backed.webp" alt="">
            </div>
            <div class="w-5/12 flex flex-col justify-center ">
                <div class="pb-6">
                    <p class="font-bold text-2xl text-main">
                        Science-backed
                    </p>
                </div>
                <div class="text-main">
                    <p>We're committed to revolutionizing pet health with premium, scientifically formulated products.
                        Made in the USA, by a team of scientists, veterinarians, and PhDs, we prioritize effective and
                        organic ingredients for clean-crafted health solutions. We're transparent every step of the way,
                        empowering pet parents with trust and confidence. With Honest Paws, pets receive the care they
                        deserve for a vibrant, fulfilling life.</p>
                </div>
                <div class="pt-10">
                    <button class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200">
                        <p class="text-white group-hover:text-main">
                            Learn More
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full px-20 py-10 bg-[#f0f5ff] text-main flex justify-center">
    <div class="w-full max-w-[1440px]">
        <div class="flex justify-between capitalize">
            <h1 class="text-2xl font-extrabold">Best seller</h1>
            <h3>
                <a href="./route.php?page=products" class="underline">Shop all</a>
            </h3>
        </div>
        <div class="flex w-full max-w-[1440px] justify-between pt-12">
            <?php
            include './funcs/products.php';
            $products = getProductsByLimit($pdo);
            foreach ($products as $product
            ): ?>
                <div class="flex flex-col justify-between bg-[#f0f5ff] items-center rounded-lg w-[250px] mt-4">
                    <div class="w-[90%] flex justify-center bg-white rounded-lg">
                        <img class="h-[168px] object-fill"
                             src="<?php echo './images/category/' . $product['imageUrl']; ?>"
                             alt="">
                    </div>
                    <div class="flex items-center ">
                        <p class="my-4 py-3 text-xl font-bold text-start w-full"><?php echo $product['productName']; ?></p>
                    </div>
                    <p class="pb-4"><?php echo $product['description'] ?></p>
                    <a href="./route.php?page=product_detail&id=<?php echo $product['productId']; ?>"
                       class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200">
                        <p class="text-white group-hover:text-main">
                            Learn More
                        </p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="py-10 w-full flex justify-center items-center">
    <div class="w-full max-w-[1300px] flex-col flex items-center">
        <h3 class="pb-6 text-center">
            <span class="text-2xl text-main font-bold">Making healthy habits easy</span>
            <span class="italic text-2xl text-main font-bold">
                Subscribe & Save
            </span>
            <p class="text-main pt-6 max-w-[800px]">
                Be the first to know about our latest offers and save on your pet's favorite products. Join us today
                and
                make your pet's well-being our priority. Sign up now and never miss out on the best for your best
                friend!
            </p>
        </h3>
        <div class="pt-10 w-full">
            <div class="grid grid-cols-3 gap-10 px-10 text-main text-center">
                <div class="flex flex-col items-center ">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M2.99805 21V19H4.99805V4C4.99805 3.44772 5.44576 3 5.99805 3H17.998C18.5503 3 18.998 3.44772 18.998 4V19H20.998V21H2.99805ZM16.998 5H6.99805V19H16.998V5ZM14.998 11V13H12.998V11H14.998Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        Delivered monthly, to your door
                    </h3>
                    <p class="font-light">
                        Your order arrives monthly, so you don’t run out of your Honest Paws Essentials.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M15.5018 20.0048C14.8432 21.5841 13.5794 22.848 12 23.5066C10.4206 22.848 9.15679 21.5841 8.49816 20.0048H10.7575C11.0838 20.4934 11.5051 20.9171 12 21.248C12.4949 20.9171 12.9162 20.4934 13.2425 20.0048H15.5018ZM18 14.8095L20 17.0777V19.0048H4V17.0777L6 14.8095V9.00478C6 5.52153 8.50442 2.55822 12 1.45999C15.4956 2.55822 18 5.52153 18 9.00478V14.8095ZM17.2692 17.0048L16 15.5653V9.00478C16 6.68694 14.4292 4.57431 12 3.58384C9.57078 4.57431 8 6.68694 8 9.00478V15.5653L6.73076 17.0048H17.2692ZM12 11.0048C10.8954 11.0048 10 10.1093 10 9.00478C10 7.90021 10.8954 7.00478 12 7.00478C13.1046 7.00478 14 7.90021 14 9.00478C14 10.1093 13.1046 11.0048 12 11.0048Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        Free shipping for subscribers, always
                    </h3>
                    <p class="font-light">
                        Even when you need to snooze or rush your order.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12H4C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.25022 4 6.82447 5.38734 5.38451 7.50024L8 7.5V9.5H2V3.5H4L3.99989 5.99918C5.82434 3.57075 8.72873 2 12 2ZM13 7L12.9998 11.585L16.2426 14.8284L14.8284 16.2426L10.9998 12.413L11 7H13Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        Control your delivery date
                    </h3>
                    <p class="font-light">
                        Make adjustments whenever you need to.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        Easy cancellation, anytime
                    </h3>
                    <p class="font-light">
                        Cancel your subscription at any time—no strings attached, ever.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M12.0049 22.0027C6.48204 22.0027 2.00488 17.5256 2.00488 12.0027C2.00488 6.4799 6.48204 2.00275 12.0049 2.00275C17.5277 2.00275 22.0049 6.4799 22.0049 12.0027C22.0049 17.5256 17.5277 22.0027 12.0049 22.0027ZM12.0049 20.0027C16.4232 20.0027 20.0049 16.421 20.0049 12.0027C20.0049 7.58447 16.4232 4.00275 12.0049 4.00275C7.5866 4.00275 4.00488 7.58447 4.00488 12.0027C4.00488 16.421 7.5866 20.0027 12.0049 20.0027ZM10.0549 11.0027H15.0049V13.0027H10.0549C10.2865 14.1439 11.2954 15.0027 12.5049 15.0027C13.1201 15.0027 13.6833 14.7806 14.1188 14.412L15.8198 15.546C14.9973 16.4415 13.8166 17.0027 12.5049 17.0027C10.1886 17.0027 8.28107 15.2527 8.03235 13.0027H7.00488V11.0027H8.03235C8.28107 8.75277 10.1886 7.00275 12.5049 7.00275C13.8166 7.00275 14.9973 7.56402 15.8198 8.45951L14.1189 9.59351C13.6834 9.22496 13.1201 9.00275 12.5049 9.00275C11.2954 9.00275 10.2865 9.86163 10.0549 11.0027Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        30 days money-back guarantee
                    </h3>
                    <p class="font-light">
                        Don't love it within 30 days? It's on us.
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="pb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"
                             fill="rgba(0,32,92,1)">
                            <path d="M10.6144 17.7956C10.277 18.5682 9.20776 18.5682 8.8704 17.7956L7.99275 15.7854C7.21171 13.9966 5.80589 12.5726 4.0523 11.7942L1.63658 10.7219C.868536 10.381.868537 9.26368 1.63658 8.92276L3.97685 7.88394C5.77553 7.08552 7.20657 5.60881 7.97427 3.75892L8.8633 1.61673C9.19319.821767 10.2916.821765 10.6215 1.61673L11.5105 3.75894C12.2782 5.60881 13.7092 7.08552 15.5079 7.88394L17.8482 8.92276C18.6162 9.26368 18.6162 10.381 17.8482 10.7219L15.4325 11.7942C13.6789 12.5726 12.2731 13.9966 11.492 15.7854L10.6144 17.7956ZM4.53956 9.82234C6.8254 10.837 8.68402 12.5048 9.74238 14.7996 10.8008 12.5048 12.6594 10.837 14.9452 9.82234 12.6321 8.79557 10.7676 7.04647 9.74239 4.71088 8.71719 7.04648 6.85267 8.79557 4.53956 9.82234ZM19.4014 22.6899 19.6482 22.1242C20.0882 21.1156 20.8807 20.3125 21.8695 19.8732L22.6299 19.5353C23.0412 19.3526 23.0412 18.7549 22.6299 18.5722L21.9121 18.2532C20.8978 17.8026 20.0911 16.9698 19.6586 15.9269L19.4052 15.3156C19.2285 14.8896 18.6395 14.8896 18.4628 15.3156L18.2094 15.9269C17.777 16.9698 16.9703 17.8026 15.956 18.2532L15.2381 18.5722C14.8269 18.7549 14.8269 19.3526 15.2381 19.5353L15.9985 19.8732C16.9874 20.3125 17.7798 21.1156 18.2198 22.1242L18.4667 22.6899C18.6473 23.104 19.2207 23.104 19.4014 22.6899ZM18.3745 19.0469 18.937 18.4883 19.4878 19.0469 18.937 19.5898 18.3745 19.0469Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5">
                        Earn Honest Paws Cash for each order
                    </h3>
                    <p class="font-light">
                        Keeping up healthy habits can be easier when you earn more.
                    </p>
                </div>
            </div>
            <div class="pt-10 flex justify-center">
                <button class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200">
                    <p class="text-white group-hover:text-main">
                        Learn More
                    </p>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="w-full px-20 py-10 bg-[#f0f5ff] text-main flex justify-center">
    <div class="w-full max-w-[1440px]">
        <div class="flex justify-between capitalize">
            <h1 class="text-2xl font-extrabold">Feature collections</h1>
            <h3>
                <a href="./route.php?page=products" class="underline">Shop all</a>
            </h3>
        </div>
        <div class="flex w-full max-w-[1440px] justify-between pt-12">
            <?php foreach ($categories
                           as $category): ?>
                <div class="flex flex-col justify-between bg-[#f0f5ff] items-center rounded-lg w-[250px] mt-4">
                    <div class="w-[90%] flex justify-center bg-white rounded-lg">
                        <img class="h-[168px] object-fill"
                             src="<?php echo './images/category/' . $category['imageurl']; ?>"
                             alt="">
                    </div>
                    <div class="flex items-center ">
                        <p class="my-4 py-3 text-xl font-bold text-start w-full"><?php echo $category['categoryname']; ?></p>
                    </div>
                    <p class="pb-4"><?php echo $category['description'] ?></p>
                    <button class="h-[54px] w-full max-w-[355px] rounded-full flex justify-center items-center bg-[#00205c] hover:border-[#00205c] hover:border-2 hover:bg-[#FADC6F] group transition-all duration-200">
                        <p class="text-white group-hover:text-main">
                            Learn More
                        </p>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

