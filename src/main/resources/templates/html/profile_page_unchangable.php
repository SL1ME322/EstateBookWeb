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
                <div  class="reg_date">Зарегистрирован с 2013 г.</div>
            </div>
        </section>
        <section class="work_skills card">
            <div class="work">
                
                <h1 class="heading">О СЕБЕ</h1>
                <div class="primary">
                    <h1>
                        Нью-Йорк
                    </h1>
                    <span>Primary</span>
                    <p>170 William Street <br> New York, NY 10038-212-315-51</p>
                </div>
                <div class="secondary">
                    <h1>Metropolitan <br> Museum</h1>
                    <span>
                        secondary
                    </span>
                    <p>S34 E 65th Street <br> New York, NY 10651-78 156-187-60</p>
                </div>
            </div>
            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Android</li>
                    <li style="--i:1">Web-Design</li>
                    <li style="--i:2">UI/UX</li>
                    <li style="--i:3">Video Editing</li>
                </ul>
            </div>
        </section>

        <section class="userDetails card">
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
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill underrate"></i>

                </div>
            </div>
            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">Сообщение</a>
                    </li>
                
                 
                     
                    <li class="sendMsg px-5 py-2  bg-red-500 ">
                        <i class="ri-alarm-warning-fill ri"></i>
                        <a href="#">Пожаловаться</a>

                    </li>
                </ul>
            </div>

        </section>
        <section class="timeline_about card">
            <div class="tabs">
                <li class="timeline">
                    <i class="ri-eye-fill"></i>
                    <span>
                        Timeline
                    </span>
                </li>
                <li class="about active">
                    <i class="ri-user-3-fill"> </i>
                    <span>About </span>

                </li>
            </div>
            <div class="contact_info">
                <h1 class="heading">Contact Information</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">
                            Телефон:
                        </h1>
                        <span class="info">+8800553535</span>
                    </li>
                    <li class="address">
                        <h1 class="label">
                            Телефон:
                        </h1>
                        <span class="info">+8800553535</span>
                    </li>
                    <li class="email">
                        <h1 class="label">
                            Site:
                        </h1>
                        <span class="info">qwqwq</span>
                    </li>
                </ul>
            </div>
            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">birthday

                        </h1>
                        <span class="info">01.03.1995</span>
                    </li>
                    <li class="sex">
                        <h1 class="label">Gender:</h1>
                        <span class="label">Male</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>

</html>