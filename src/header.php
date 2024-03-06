<header class="flex w-full items-center justify-between shadow-md bg-white p-2 fixed z-40">
    <!-- logo -->
    <div class="flex items-center space-x-2">
        <button type="button" class="text-3xl" @click="asideOpen = !asideOpen">
            <i class="bx bx-menu"></i>
        </button>
        <div>
            <img src="assets/images/logo.png" class="w-40 cursor-pointer" />
        </div>
    </div>

    <!-- button profile -->
    <div class="">
        <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
            class="h-10 w-10 overflow-hidden rounded-full flex items-center ">
            <?php
                if (isset($_SESSION["idClient"])) {?>

            <img src="assets/img_client/<?php echo $_SESSION["PhotoClient"]?>" alt="photo client" class="object-cover">
            <?php 
            }elseif (isset($_SESSION["idAdmin"])) {?>
            <img src="assets/images/admin.jpg" alt="photop profilo" class="object-cover" />

            <?php
             } else {?>
            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24" class="object-cover">
                <g fill="none">
                    <path stroke="currentColor" stroke-width="1.5"
                        d="M21 12a8.958 8.958 0 0 1-1.526 5.016A8.991 8.991 0 0 1 12 21a8.991 8.991 0 0 1-7.474-3.984A9 9 0 1 1 21 12Z" />
                    <path fill="currentColor"
                        d="M13.25 9c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 14.75 9zM12 10.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 12 11.75zM10.75 9c0-.69.56-1.25 1.25-1.25v-1.5A2.75 2.75 0 0 0 9.25 9zM12 7.75c.69 0 1.25.56 1.25 1.25h1.5A2.75 2.75 0 0 0 12 6.25zM5.166 17.856l-.719-.214l-.117.392l.267.31zm13.668 0l.57.489l.266-.31l-.117-.393zM9 15.75h6v-1.5H9zm0-1.5a4.752 4.752 0 0 0-4.553 3.392l1.438.428A3.252 3.252 0 0 1 9 15.75zm3 6a8.23 8.23 0 0 1-6.265-2.882l-1.138.977A9.73 9.73 0 0 0 12 21.75zm3-4.5c1.47 0 2.715.978 3.115 2.32l1.438-.428A4.752 4.752 0 0 0 15 14.25zm3.265 1.618A8.23 8.23 0 0 1 12 20.25v1.5a9.73 9.73 0 0 0 7.403-3.405z" />
                </g>
            </svg>

            <?php
                }?>

            <!-- <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" /> -->
        </button>

        <!-- dropdown profile -->
        <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
            x-show="profileOpen" x-transition>
            <div class="flex items-center space-x-2 p-2">
                <!-- nom et photo de ptofil -->
                <?php
                if (isset($_SESSION["idClient"])) {?>
                <div class="h-10 w-10 overflow-hidden rounded-full flex items-center">
                    <img src="assets/img_client/<?php echo $_SESSION["PhotoClient"]?>" alt="photo client"
                        class="object-cover" />
                </div>


                <div class="font-medium">
                    <?php
                    echo $_SESSION['NomClient']." ".$_SESSION['PostNomClient'];
                    ?>
                </div>
                <?php } elseif (isset($_SESSION["idAdmin"])) {?>
                <img src="assets/images/admin.jpg" alt="photop profilo" class="h-9 w-9 rounded-full" />
                <div class="font-medium">
                    <?php
                    echo $_SESSION['NomAdmin'];
                    ?>
                </div>
                <?php
                } else {?>
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"
                    class="object-cover">
                    <g fill="none">
                        <path stroke="currentColor" stroke-width="1.5"
                            d="M21 12a8.958 8.958 0 0 1-1.526 5.016A8.991 8.991 0 0 1 12 21a8.991 8.991 0 0 1-7.474-3.984A9 9 0 1 1 21 12Z" />
                        <path fill="currentColor"
                            d="M13.25 9c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 14.75 9zM12 10.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 12 11.75zM10.75 9c0-.69.56-1.25 1.25-1.25v-1.5A2.75 2.75 0 0 0 9.25 9zM12 7.75c.69 0 1.25.56 1.25 1.25h1.5A2.75 2.75 0 0 0 12 6.25zM5.166 17.856l-.719-.214l-.117.392l.267.31zm13.668 0l.57.489l.266-.31l-.117-.393zM9 15.75h6v-1.5H9zm0-1.5a4.752 4.752 0 0 0-4.553 3.392l1.438.428A3.252 3.252 0 0 1 9 15.75zm3 6a8.23 8.23 0 0 1-6.265-2.882l-1.138.977A9.73 9.73 0 0 0 12 21.75zm3-4.5c1.47 0 2.715.978 3.115 2.32l1.438-.428A4.752 4.752 0 0 0 15 14.25zm3.265 1.618A8.23 8.23 0 0 1 12 20.25v1.5a9.73 9.73 0 0 0 7.403-3.405z" />
                    </g>
                </svg>
                <div class="font-medium">
                    <?php
                    // echo $_SESSION['NomAdmin'];
                    ?>
                </div>
                <?php
                }?>

            </div>
            <?php
            if (isset($_SESSION["idAdmin"]) || isset($_SESSION["idClient"])) {?>
            <div class=" flex flex-col space-y-3 p-2">

                <a href="#" class="flex items-center space-x-2 transition hover:text-yellow-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </g>
                    </svg>
                    <span>Profile</span>

                </a>
            </div>

            <?php
              }?>



            <div class="p-2 ">
                <button class="flex items-center space-x-2 transition hover:text-yellow-600">


                    <div>

                        <?php
                            if(isset($_SESSION["idAdmin"]) || isset($_SESSION["idClient"] )){?>
                        <a href="deconnexion.php" class="flex items-center space-x-2 transition hover:text-yellow-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M10 8V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2v-2" />
                                    <path d="M15 12H3l3-3m0 6l-3-3" />
                                </g>
                            </svg>
                            <span>Deconnexion</span>

                        </a>
                        <?php }else{?>
                        <button class="flex items-center space-x-2 transition hover:text-yellow-600"
                            onclick="openModal('modelConfirm')">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <span>
                                connexion
                            </span>
                        </button>
                        <a href="deconnexion.php"
                            class="flex items-center space-x-2 transition hover:text-yellow-600 border-t">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M10 8V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2v-2" />
                                    <path d="M15 12H3l3-3m0 6l-3-3" />
                                </g>
                            </svg>
                            <span>Inscription</span>

                        </a>

                        <?php  }
                        ?>

                    </div>
                </button>
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
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="p-6 pt-0 text-center">

                <img src="assets/images/logo.png" class="w-40 cursor-pointer" />
                <!-- Formulaire login -->
                <h1 class="text-2xl font-bold text-gray-950 text-center">Login</h1><br>
                <form action="back/logback.php" method="POST" class="space-y-6 text-gray-600">

                    <div class="relative">
                        <div
                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                            <i class="fa-solid fa-envelope-open"></i>
                        </div>
                        <input type="email" placeholder="Email Address" name="EmailClient" required
                            class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                        <!-- Ajout de la classe 'border' et 'border-gray-300' pour définir la bordure -->
                    </div>

                    <div class="relative">
                        <div
                            class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" placeholder="Password" name="PasswordClient" required
                            class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                        <!-- Ajout de la classe 'border' et 'border-gray-300' pour définir la bordure -->
                    </div>
                    <input type="submit" value="Login" name="btn_login" class=" bg-gradient-to-r from-gray-900 to-yellow-400 text-white w-80 font-semibold
                                    rounded-full py-2">

                </form>
                <!-- Formulaire login end -->

            </div>

        </div>
    </div>
</header>