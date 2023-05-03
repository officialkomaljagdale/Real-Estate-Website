<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate | Contact Us</title>

    <!-- 
    - favicon
  -->
    <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>

        <div class="overlay" data-overlay></div>
        <div class="header-bottom">
            <div class="container">

                <a href="#" class="logo">
                    <!-- Logo Here -->
          <img src="../assets/images/cLogo.png" width="70px" height="50px" alt="Homeverse logo">

                    <!-- <img src="../assets/images/logo.png" alt="Homeverse logo"> -->
                </a>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="#" class="logo">
                            <!-- Logo Here -->
          <img src="../assets/images/cLogo.png" width="70px" height="50px" alt="Homeverse logo">

                            <!-- <img src="../assets/images/logo.png" alt="Homeverse logo"> -->
                        </a>

                        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <div class="navbar-bottom">
                        <ul class="navbar-list">

                            <li>
                                <a href="index.php" class="navbar-link" data-nav-link>Home</a>
                            </li>

                            <li>
                                <a href="about.php" class="navbar-link" data-nav-link>About</a>
                            </li>

                            <li>
                                <a href="services.php" class="navbar-link" data-nav-link>Service</a>
                            </li>

                            <li>
                                <a href="properties.php" class="navbar-link" data-nav-link>Property</a>
                            </li>

                            <li>
                                <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
                            </li>

                        </ul>
                    </div>

                </nav>

                <div class="header-bottom-actions">

                    <!-- <button class="header-bottom-actions-btn" aria-label="Search">
                      <ion-icon name="search-outline"></ion-icon>
          
                      <span>Search</span>
                    </button> -->
          
                    <button class="header-bottom-actions-btn" aria-label="Profile">
                      <ion-icon name="person-outline"></ion-icon>
          
                      <span>Profile</span>
                    </button>
          
                    <button class="header-bottom-actions-btn" aria-label="Cart">
                      <ion-icon name="heart-outline"></ion-icon>
          
                      <span>Cart</span>
                    </button>
          
                    <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                      <ion-icon name="menu-outline"></ion-icon>
          
                      <span>Menu</span>
                    </button>
          
                  </div>

            </div>
        </div>

    </header>

    <div class="bg-white">
        <div class="pt-6">
            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="../assets/images/res1.jpg" alt="Two each of gray, white, and black shirts laying flat."
                        class="h-full w-full object-cover object-center">
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="../assets/images/res2.jpg" alt="Model wearing plain black basic tee."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="../assets/images/res3.jpg" alt="Model wearing plain gray basic tee."
                            class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="../assets/images/res4.jpg" alt="Model wearing plain white basic tee."
                        class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Shree Ghanoba Residency</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">₹34,90,000</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500"></a>
                            <div class="about-item-icon mx-3">
                                <ion-icon name="heart-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                            </div>

                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Book Appoinment</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600"></p>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                                        <div class="mt-2">
                                            <input type="text" name="first-name" id="first-name"
                                                autocomplete="given-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                                        <div class="mt-2">
                                            <input type="text" name="last-name" id="last-name"
                                                autocomplete="family-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Contact No</label>
                                        <div class="mt-2">
                                            <input id="email" name="text" type="text" autocomplete="email"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Email
                                            address</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="about"
                                            class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                        <div class="mt-2">
                                            <textarea id="about" name="about" rows="3"
                                                class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Book Appoinment
                                Now</button>
                        </div>
                    </form>

                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your
                                vibrant personality with three grayscale options. Feeling adventurous? Put on a heather
                                gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need
                                to add an extra pop of color to your outfit? Our white tee has you covered. Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Doloremque, dignissimos quos fugit vel
                                facere tenetur odio dolores consectetur explicabo, ducimus laborum eius tempore, aliquam
                                repellendus! Tempore repellendus maiores magnam rerum? Eum quam cumque ipsum, minus amet
                                quia hic iste debitis, a quidem sint. Aperiam non soluta quam hic. Veniam, veritatis!
                            </p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>

                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>

                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                gray Basic Tees. Sign up for our subscription service and be the first to get new,
                                exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 
    - custom js link
  -->
    <script src="../assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>