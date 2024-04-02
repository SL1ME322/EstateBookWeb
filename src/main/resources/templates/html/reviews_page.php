<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d"
                    }
                }
            }
        };
    </script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <link rel=stylesheet href=../../static/css/profile_estates.css>
    <link rel=stylesheet href=../../static/css/styles.css>
    <link rel=stylesheet href=../../static/css/fonts.css>
    <link rel=stylesheet href=../../static/css/fonts.css>
    <link rel=preconnect href=https://fonts.googleapis.com>
    <link rel=preconnect href=https://fonts.gstatic.com crossorigin>
    <link rel="stylesheet" href="../../static/css/splide.min.css">
    <link rel="stylesheet" href="fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel=stylesheet>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css rel=stylesheet />
    <script src=https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js>
    </script>
</head>

<body class="bg-[#F9F9F9]">
    <script src="three.min.js"></script>
    <?php
    ?>
    <div class="header">

        <?php require_once 'header.html'; ?>
    </div>

    <span class="main_bg"></span>
    <div class="container ">


        <section class="userProfile card fixed    items-center justify-center ">

            <div class="profile flex flex-col  w-[262.487px]     items-center">

                <figure class=" ">
                    <img src="img/ыыы.jpg" alt="profile" class="w-64 h-64 rounded-full" width="250px" height="250px">
                </figure>
                <div class="userName text-center ">
                    <h1 class="name text-4xl" th:text="${currentUser.getLogin()}"> </h1>
                    <div class="map font-semibold">
                        <i class="ri-map-pin-fill ri"></i>
                        <span>Москва</span>
                    </div>
                    <p class="text-sm role text-xl font-bold">Продавец</p>
                </div>

                <!-- <h1 class="heading">
                    Рейтинг
                </h1> -->

                <dIV>Объявления:</dIV>
                <div class="flex  text-blue-500 hover:text-blue-700 space-x-4">
                    <a  onclick="window.location.href='profile_estates.php'">112 активных <i class="ri-link "></i></a>
                    <a  onclick="window.location.href='profile_estates.php'">112 завершенных <i class="ri-link "></i></a>
                    <div></div>




                </div>




            </div>

        </section>


        <section class="userDetails card items-center justify-center ">
            <div class="flex ">
                <div class="grid grid-cols-[50%_50%]  items-center ">


                    <div>
                        <p class="text-4xl font-bold">Рейтинг</p>
                        <div class="flex items-center ">
                            <div class="mr-4 text-4xl font-bold">5.0</div>
                            <div class="space-x-[0.2px] flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                            </div>

                        </div>
                        <div class="mb-12">
                            на основании 12 оценок
                        </div>

                        <a href='#' class="flex  text-blue-500 hover:text-blue-700 space-x-4">Запросить отзыв </a>

                    </div>

                    <div class="items-center justify-center  ">
                        <div class="grid grid-cols-2 "></div>
                        <div class="flex space-x-[1px] items-center justify-center w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <div class="w-6"> </div>
                            <div class="w-96 h-4 bg-gray-200 rounded-full dark:bg-gray-700 ml-12 ">
                                <div class=" h-4 bg-blue-600 text-xs font-medium text-blue-100 text-center pt-[1px]  leading-none rounded-full" style="width: 0%">

                                </div>
                            </div>
                            <div class="w-6"> </div>
                            <div class="w-7  text-center">0</div>
                        </div>
                        <div class="flex space-x-[1px] items-center justify-center w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <div class="w-6"> </div>
                            <div class="w-96 h-4 bg-gray-200 rounded-full dark:bg-gray-700 ml-12 ">
                                <div class=" h-4 bg-blue-600 text-xs font-medium text-blue-100 text-center pt-[1px]  leading-none rounded-full" style="width: 0%">

                                </div>
                            </div>
                            <div class="w-6"> </div>
                            <div class="w-7  text-center">0</div>
                        </div>
                        <div class="flex space-x-[1px] items-center justify-center w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <div class="w-6"> </div>
                            <div class="w-96 h-4 bg-gray-200 rounded-full dark:bg-gray-700 ml-12 ">
                                <div class=" h-4 bg-blue-600 text-xs font-medium text-blue-100 text-center pt-[1px]  leading-none rounded-full" style="width: 0%">

                                </div>
                            </div>
                            <div class="w-6"> </div>
                            <div class="w-7  text-center">0</div>
                        </div>

                        <div class="flex space-x-[1px] items-center justify-center w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <div class="w-6"> </div>
                            <div class="w-96 h-4 bg-gray-200 rounded-full dark:bg-gray-700 ml-12 ">
                                <div class=" h-4 bg-blue-600 text-xs font-medium text-blue-100 text-center pt-[1px]  leading-none rounded-full" style="width: 0%">

                                </div>
                            </div>
                            <div class="w-6"> </div>
                            <div class="w-7  text-center">0</div>
                        </div>
                        <div class="flex space-x-[1px] items-center justify-center w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(151,151,151,1)">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                            </svg>
                            <div class="w-6"> </div>
                            <div class="w-96 h-4 bg-gray-200 rounded-full dark:bg-gray-700 ml-12 ">
                                <div class=" h-4 bg-blue-600 text-xs font-medium text-blue-100 text-center pt-[1px]  leading-none rounded-full" style="width: 0%">

                                </div>
                            </div>
                            <div class="w-6"> </div>
                            <div class="w-7  text-center">0</div>
                        </div>
                    </div>
                </div>


            </div>
            <hr class="h-px my-4 w-full bg-gray-200 border-0 dark:bg-gray-700">
            <div class="text-2xl">Отзывы</div>
            <div class="space-y-6">
                <div class="w-[50em] ">
                    <div class="flex items-center space-x-2">
                        <div><img class="rounded-full w-16 h-16 object-cover" src="img/profile_photo.jpg"> </div>
                        <div>Katya123</div>

                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                            </div>
                            <div class="text-xl text-gray-400">
                                Сделка состоялась по: Апартаменты, Рублевка
                            </div>


                        </div>
                        <div class="break-words font-semibold">
                            Все отлично, сделка состоялась. Продавец крутой!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                        </div>
                        <div class="text-xl text-gray-500">
                            29 июня 2023
                        </div>
                    </div>
                </div>
                <div class="w-[50em] ">
                    <div class="flex items-center space-x-2">
                        <div><img class="rounded-full w-16 h-16 object-cover" src="img/profile_photo.jpg"> </div>
                        <div>Katya123</div>

                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                            </div>
                            <div class="text-xl text-gray-400">
                                Сделка состоялась по: Апартаменты, Рублевка
                            </div>


                        </div>
                        <div class="break-words font-semibold">
                            Все отлично, сделка состоялась. Продавец крутой!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                        </div>
                        <div class="text-xl text-gray-500">
                            29 июня 2023
                        </div>
                    </div>
                </div>
                <div class="w-[50em] ">
                    <div class="flex items-center space-x-2">
                        <div><img class="rounded-full w-16 h-16 object-cover" src="img/profile_photo.jpg"> </div>
                        <div>Katya123</div>

                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="32" fill="rgba(255,238,0,1)">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                                </svg>
                            </div>
                            <div class="text-xl text-gray-400">
                                Сделка состоялась по: Апартаменты, Рублевка
                            </div>


                        </div>
                        <div class="break-words font-semibold">
                            Все отлично, сделка состоялась. Продавец крутой!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                        </div>
                        <div class="text-xl text-gray-500">
                            29 июня 2023
                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Отзывы
                        </button>
                    </li>
                    
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="mx-12 grid grid-cols-3    ">

                         <?php
                            // require_once 'estate_for_profile.html';
                            ?> 
                        <?php
                        // require_once 'estate_for_profile2.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile3.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile4.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile5.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile6.php';
                        ?>
                        <?php
                        //  require_once 'estate_for_profile7.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile8.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile9.php';
                        ?>
                        <?php
                        //  require_once 'estate_for_profile10.php';
                        ?>
                        <?php
                        //  require_once 'estate_for_profile11.php';
                        ?>
                        <?php
                        // require_once 'estate_for_profile12.php';
                        ?>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="mx-12 grid grid-cols-3 ">


                    </div>
                </div>
            </div> -->



        </section>

    </div>

    <script src=../../static/js/carousel.js></script>
    <script src="../../static/js/splide.min.js"></script>
    <script>
        new Splide('#image-carousel').mount();
    </script>
    <script>
        new Splide('#image-carousel2').mount();
    </script>
    <script>
        new Splide('#image-carousel3').mount();
    </script>
    <script>
        new Splide('#image-carousel4').mount();
    </script>
    <script>
        new Splide('#image-carousel5').mount();
    </script>
    <script>
        new Splide('#image-carousel6').mount();
    </script>
    <script>
        new Splide('#image-carousel7').mount();
    </script>
    <script>
        new Splide('#image-carousel8').mount();
    </script>
    <script>
        new Splide('#image-carousel9').mount();
    </script>
    <script>
        new Splide('#image-carousel10').mount();
    </script>
    <script>
        new Splide('#image-carousel11').mount();
    </script>
    <script>
        new Splide('#image-carousel12').mount();
    </script>
    <script src="../../static/js/popup.js"></script>
</body>

</html>