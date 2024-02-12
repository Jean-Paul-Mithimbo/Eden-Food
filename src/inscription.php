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

            <!-- <div class="container  mx-auto flex justify-center p-4 mt-10">
                <div class="  grid md:grid-cols-3 items-center gap-2 p-5 rounded-2xl flex justify-center">


                    <div class="md:col-span-2 shadow p-5">
                        <h1 class="text-5xl font-bold text-gray-950 text-center">Login</h1>
                        <p class="text-dull-white"></p>
                        <form action="" class="space-y-6 text-white">
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-blue-300">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </div>
                                <input type="email" placeholder="Email Address"
                                    class="w-80 bg-gray-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-blue-300">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <input type="text" placeholder="Password"
                                    class="w-80 bg-white-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg" />
                            </div>
                            <button
                                class="bg-gradient-to-r from-blue-400 to-cyan-200 w-80 font-semibold rounded-full py-2">Sign
                                in</button>
                        </form>
                        <div class="text-dull-white border-t border-white-light pt-4 space-y-4 text-sm">
                            <p>Don't have an account? <a class="text-neon-blue font-semibold cursor-pointer">Sign up</a>
                            </p>
                            <p>Forgot password? <a class="text-neon-blue font-semibold cursor-pointer">Reset
                                    password</a></p>
                            <p>Don't have a password yet? <a class="text-neon-blue font-semibold cursor-pointer">Set
                                    password</a></p>
                        </div>
                    </div>
                </div>


            </div> -->
            <div class="container mx-auto flex justify-center  mt-25">
                <div class="grid md:grid-cols-2 items-center gap-2 p-5 rounded-2xl flex justify-center">
                    <div class="md:col-span-2 shadow p-5">
                        <h1 class="text-5xl font-bold text-gray-950 text-center">Login</h1><br>
                        <form action="" class="space-y-6 text-gray-600">
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-blue-300">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </div>
                                <input type="email" placeholder="Email Address"
                                    class=" bg-gray-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-blue-300">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <input type="text" placeholder="Password"
                                    class=" bg-white-light py-2 px-12  outline-1 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg" />
                            </div>
                            <button
                                class="bg-gradient-to-r from-blue-400 to-cyan-200 w-80 font-semibold rounded-full py-2">Sign
                                in</button>
                        </form>
                        <div class="text-dull-white border-t border-white-light pt-4 space-y-4 text-sm">
                            <p>Don't have an account? <a class="text-neon-blue font-semibold cursor-pointer">Sign
                                    up</a>
                            </p>

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


</body>

</html>