<?php
include("entete.php");
?>

<body>
    <!-- page -->
    <main class="min-h-screen w-full text-gray-700" x-data="layout">
        <!-- header page -->
        <?php
        include("header.php");
        ?>
        <div class="flex">
            <!-- aside -->
            <?php
            include("aside.php");
            ?>

            <div class="container  mx-auto">
                <div class="container w-full  p-4 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('images/image.png')">
                    <div class="grid md:grid-cols-2 gap-4 text-white mt-40 px-5 xl:px-28">
                        <div class="">
                            <h1 class="text-5xl xl:text-6xl font-semibold leading-normal mb-4">
                                Livraison d'épicerie en
                                <span class="font-light">15 minutes</span>
                            </h1>
                            <p class="mb-6">
                                Grocify offre une large gamme de produits, y compris des
                                produits frais, de la viande, des produits laitiers, des
                                produits de boulangerie et des articles non périssables.
                            </p>
                            <div class="mb-8">
                                <a href="inscription.php"
                                    class="bg-gradient-to-r from-gray-900 to-yellow-400 rounded-full py-3 px-8 font-medium inline-block mr-4 hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent">
                                    Inscription
                                </a>

                                <a href="#" class="border-3 border-yellow-300 rounded-full py-3 px-8 font-medium inline-block hover:bg-yellow-300 hover:text-white duration-300 hover:border border border-transparent
                                    " onclick="openModal('modelConfirm')">Connexion
                                    <span class="text-lg inline-block transform rotate-90">&#10148;</span>
                                </a>

                            </div>
                        </div>
                        <div class="xl:relative">
                            <img src="images/grocery-image.png" class="w-full object-cover xl:absolute bottom-0 right-0"
                                alt="Image de l'épicerie" />
                        </div>
                    </div>
                </div>
                <!--modal  login-->
                <div id="modelConfirm"
                    class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="p-6 pt-0 text-center">

                            <img src="images/logo.png" class="w-40 cursor-pointer" />
                            <!-- Formulaire login -->
                            <h1 class="text-2xl font-bold text-gray-950 text-center">Login</h1><br>
                            <form action="" class="space-y-6 text-gray-600">
                                <div class="relative">
                                    <div
                                        class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                        <i class="fa-solid fa-envelope-open"></i>
                                    </div>
                                    <input type="email" placeholder="Email Address"
                                        class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    <!-- Ajout de la classe 'border' et 'border-gray-300' pour définir la bordure -->
                                </div>
                                <div class="relative">
                                    <div
                                        class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                        <i class="fa-solid fa-lock"></i>
                                    </div>
                                    <input type="text" placeholder="Password"
                                        class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    <!-- Ajout de la classe 'border' et 'border-gray-300' pour définir la bordure -->
                                </div>
                                <button
                                    class="bg-gradient-to-r from-gray-900 to-yellow-400 text-white w-80 font-semibold rounded-full py-2">Sign
                                    in</button>
                            </form>
                            <!-- Formulaire login end -->

                        </div>

                    </div>
                </div>
                <!-- card produit -->
                <h1 class="text-3xl font-semibold mt-40 text-center">Produit</h1>

                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">
                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>

                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                    <div
                        class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
                        <a class="relative flex h-60 overflow-hidden" href="#">
                            <img class="absolute top-0 right-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80"
                                alt="product image" />
                            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent">
                                </div>
                            </div>
                            <div
                                class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                <button
                                    class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl tracking-tight text-slate-900">
                                    Lululemon Comfort Tee - White
                                </h5>
                            </a>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">$79</span>
                                    <span class="text-sm text-slate-900 line-through">$99</span>
                                </p>
                            </div>
                            <button
                                class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>

            </div>

    </main>
    <?php
    include("footer.php");
    ?>


    <script src="js/app.js" type="text/javascript"></script>


</body>

</html>