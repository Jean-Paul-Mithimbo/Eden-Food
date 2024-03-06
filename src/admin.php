<?php
session_start();
include("entete.php");
include("bdd/connexion.php");
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


            <div class="container mx-auto flex justify-center py-5 mt-20 ">



                <!-- component -->
                <div class="font-sans flex h-screen items-start justify-center">
                    <div x-data="{ openTab: 1 }" class="p-8">
                        <div class="max-w-md mx-auto">
                            <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow">
                                <button x-on:click="openTab = 1"
                                    :class="{ 'bg-blue-600 border-r text-yellow-300': openTab === 1 }"
                                    class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Produit</button>
                                <button x-on:click="openTab = 2"
                                    :class="{ 'bg-blue-600 text-yellow-300': openTab === 2 }"
                                    class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Section
                                    2</button>
                                <button x-on:click="openTab = 3"
                                    :class="{ 'bg-blue-600 text-yellow-300': openTab === 3 }"
                                    class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Section
                                    3</button>
                            </div>

                            <div x-show="openTab === 1"
                                class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">Ajouter un produit</h2>
                                <!--formulaire ajout produit  -->
                                <form action="" method="POST" enctype="multipart/form-data"
                                    class="space-y-6 text-gray-600">
                                    <div></div>
                                    <div></div>

                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 0 0-12 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4" />
                                            </svg>
                                        </div>
                                        <input type="text" name="NomClient" placeholder="Votre nom" required
                                            class=" py-2 px-12 rounded-full  focus:outline-none w-80 focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 0 0-12 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4" />
                                            </svg>
                                        </div>
                                        <input type="text" name="PostNomClient" placeholder="Votre pseudo" required
                                            class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7m0 2a5 5 0 0 0-5 5c0 1 0 3 5 9.71C17 12 17 10 17 9a5 5 0 0 0-5-5" />
                                            </svg>
                                        </div>
                                        <input type="text" name="AdresseClient" placeholder="adresse" required
                                            class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M416 64H96a64.07 64.07 0 0 0-64 64v256a64.07 64.07 0 0 0 64 64h320a64.07 64.07 0 0 0 64-64V128a64.07 64.07 0 0 0-64-64m-80 64a48 48 0 1 1-48 48a48.05 48.05 0 0 1 48-48M96 416a32 32 0 0 1-32-32v-67.63l94.84-84.3a48.06 48.06 0 0 1 65.8 1.9l64.95 64.81L172.37 416Zm352-32a32 32 0 0 1-32 32H217.63l121.42-121.42a47.72 47.72 0 0 1 61.64-.16L448 333.84Z" />
                                            </svg>

                                        </div>
                                        <input type="file" name="PhotoClient" placeholder="votre photo" required
                                            class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </div>
                                        <input type="email" name="EmailClient" placeholder="Email Address"
                                            class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                                            </svg>
                                        </div>
                                        <input type="text" name="PasswordClient" placeholder="Password"
                                            class=" bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                                            </svg>
                                        </div>
                                        <input type="text" name="PasswordConfirm" placeholder="Password"
                                            class=" bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                                    </div>
                                    <input type="submit" name="btn_inscri" value="Inscription" class="bg-gradient-to-r from-gray-900
                            to-yellow-400 text-white w-80 font-semibold rounded-full py-2 cursor-pointer">

                                </form>

                            </div>

                            <div x-show="openTab === 2"
                                class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">Section 2 Content</h2>
                                <p class="text-gray-700">Proin non velit ac purus malesuada venenatis sit amet eget
                                    lacus. Morbi quis purus id ipsum ultrices aliquet Morbi quis.</p>
                            </div>

                            <div x-show="openTab === 3"
                                class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                                <h2 class="text-2xl font-semibold mb-2 text-blue-600">Section 3 Content</h2>
                                <p class="text-gray-700">Fusce hendrerit urna vel tortor luctus, nec tristique odio
                                    tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    cubilia Curae.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->


                <!-- Modal toggle -->
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="block text-yellow-300 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Toggle modal
                </button>

                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Create New Product
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Type product name" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="number" name="price" id="price"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="$2999" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="category"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select category</option>
                                            <option value="TV">TV/Monitors</option>
                                            <option value="PC">PC</option>
                                            <option value="GA">Gaming/Console</option>
                                            <option value="PH">Phones</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="description"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                            Description</label>
                                        <textarea id="description" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write product description here"></textarea>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add new product
                                </button>
                            </form>
                        </div>
                    </div>
                </div>




            </div>


    </main>

    <?php
    include("footer.php");
    ?>

    <script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("layout", () => ({
            profileOpen: false,
            asideOpen: true,
        }));
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="js/app.js" type="text/javascript"></script>
</body>

</html>