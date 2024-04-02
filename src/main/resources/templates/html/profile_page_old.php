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
    <link rel=stylesheet href=../../static/css/profile.css>

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

    <span class="main_bg"></span>
    <div class="container">
        <header>
            <div class="brandLogo">
                <figure><img src="img/appIcon.png" alt="logo" width="50px" height="60px"></figure>
                <span>EstateBook</span>
            </div>
        </header>
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="img/ыыы.jpg" alt="profile" width="250px" height="250px"> </figure>
                <div class="reg_date">Зарегистрирован с 2013 г.</div>
            </div>
        </section>
        <section class="work_skills card">
            <div class="work">

                <h1 class="heading">ИНФОРМАЦИЯ</h1>
                <div class="secondary">

                    <span>
                        Образование
                    </span>
                    <p class="w-2/3"> Высшее образование в области Экономики и Финансов, полученное в Университете Имени И.И.Иванова, 2010 год."</p>
                </div>

                <div class="secondary">
                    <h1>Baretskyu Studios</h1>
                    <span>
                        Место работы
                    </span>
                    <p> г.Москва, Чертановская улица 38</p>
                </div>


            </div>
            <div class="skills">
                <h1 class="heading">Достижения</h1>
                <ul>
                    <li style="--i:0">Убил мамонта</li>
                    <li style="--i:1">Заскамил 1000 клиентов</li>
                    <li style="--i:2">Пожал 200кг</li>
                    <li style="--i:3">Deadlift 1000кг</li>
                </ul>
            </div>
        </section>

        <section class="userDetails card2">
            <div class="userName">
                <h1 class="name">Роман Риелтор</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>Москва</span>
                </div>
                <p>Продавец</p>
            </div>
            <div class="rank">
                <!-- <h1 class="heading">
                    Рейтинг
                </h1> -->
                <span>8,6</span>
                <div class="rating ">
                    <i class="ri-star-fill rate"  style="color: #f2d307;"></i>
                    <i class="ri-star-fill rate"  style="color: #f2d307;"></i>
                    <i class="ri-star-fill rate"  style="color: #f2d307;"></i>
                    <i class="ri-star-fill rate"  style="color: #f2d307;"></i>
                    <i class="ri-star-line rate"  style="color: #f2d307;"></i>

                </div>
                <div class="flex ">
                    <div>85 отзывов</div>
                    <div class="w-14"></div>
                    <div>15 успешных сделок</div>
                </div>


            </div>
            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">Сообщение</a>
                    </li>
                    <li class="sendMsg  px-5 py-2  bg-green-500">
                        <i class="ri-phone-fill ri"></i>
                        <a href="#">Показать объявления</a>
                    </li>


                    <li class="sendMsg px-5 py-2  bg-red-500 ">
                        <i class="ri-alarm-warning-fill ri"></i>
                        <a href="#">Пожаловаться</a>

                    </li>
                </ul>
            </div>

        </section> 
        <section class="timeline_about card  " >
            <div class="tabs">
                <!-- <li class="timeline">
                    <i class="ri-eye-fill"></i>
                    <span>
                        Timeline
                    </span>
                </li> -->
                <li class="about active">
                    <i class="ri-user-3-fill">О СЕБЕ </i>
                    <span> </span>
                    <div>
                        Лучший продавец недвижимости на рынке в мире. Продаю гаражи, авто, дома, real estate, бананы. Работаю в сфере 75 лет. Просто классный парень и top g.
                    </div>
                </li>
            </div>
            <div class="contact_info">
                <h1 class="heading mt-12">КОНТАКТНАЯ ИНФОРМАЦИЯ</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">
                            Телефон:
                        </h1>
                        <span class="info">+8800553535</span>
                    </li>
                    <li class="address">
                        <h1 class="label">
                            Email:
                        </h1>
                        <span class="info">baretskyu556@gmail.com</span>
                    </li>
                    <li class="email">
                        <h1 class="label">
                            Site:
                        </h1>
                        <span class="info">qwqwq</span>
                    </li>
                </ul>
            </div>
            <!-- <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Дата рождения

                        </h1>
                        <span class="info">01.12.1918</span>
                    </li>
                    <li class="sex">
                        <h1 class="label">Пол:</h1>
                        <span class="label">Муж.</h1>
                    </li>
                </ul>
            </div> -->
            <div>
                <a href="profile_page_old blue"> 
                <i class="ri-arrow-left-line">
                    Вернуться к профилю
                </i>
                </a>
            </div>

        </section>
    </div>
</body>

</html>