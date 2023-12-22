 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нова пошта</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffdddd; /* Червоний фон */
        }

        header {
            background-color: #cc0000; /* Червоний фон */
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #e60000; /* Відтінок червоного */
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 0.5em 0;
            font-weight: bold;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
        }

        #sidebar {
            background-color: #ff3333; /* Червоний фон */
            color: #fff;
            padding: 1em;
            box-sizing: border-box;
            overflow-y: auto;
            flex: 0 0 auto;
            text-decoration: none;
        }

        #sidebar nav {
            display: flex;
            flex-direction: column;
        }

        #main-content {
            flex: 0 0 80%;
            background-color: #ffffff; /* Білий фон */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #trackForm {
            margin-bottom: 20px;
        }

        #trackNumber {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #trackButton {
            padding: 10px;
            background-color: #cc0000; /* Червоний фон */
            color: #fff;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        #result {
            margin-top: 20px;
        }

        #searchForm, #loginRegisterButtons {
            display: flex;
            align-items: center;
        }

        #searchInput {
            width: 200px;
            margin-right: 10px;
        }

        footer {
            background-color: #cc0000; /* Червоний фон */
            color: #fff;
            text-align: center;
            padding: 1em;
            margin-top: 20px;
        }
        #loginButton {
            margin-left: 10px;
            color: white; /* Колір тексту білий */
        }
    </style>
</head>
<body>
<header>
    <h1>Нова Пошта</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Додайте ваші елементи навбару, наприклад, поле пошуку -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <div id="searchForm" class="mr-auto">
            <input type="text" id="searchInput" class="form-control" placeholder="Пошук">
            <button class="btn btn-outline-danger">Пошук</button>
        </div>

        <!-- Додайте кнопки Log In і Registration справа на навбарі -->
        <div id="loginRegisterButtons">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('login') }}" id="loginButton" class="nav-link font-weight-bold text-danger">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div id="sidebar">
        <nav>
            <a href="{{route('order.create')}}">Створити міжнародну доставку</a>
            <a href="#">Вартість доставки</a>
            <a href="#">Терміни доставки</a>
            <a href="#">Знайди віддлення/поштомат</a>
            <a href="#">Графік роботи відділень</a>
            <a href="#">Виклик кур'єра</a>
        </nav>
    </div>

    <div id="main-content">
        <div id="trackForm">
            <form action="{{ route('order.track') }}" method="post">
                @csrf
                <label for="trackNumber">Номер відправлення:</label>
                <input type="text" name="track_number" id="trackNumber" placeholder="Введіть номер відправлення">
                <button type="submit" id="trackButton">Відстежити</button>
            </form>
            <div id="result"></div>
        </div>

        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.discordapp.net/attachments/771376292971937802/1179137992804286575/16952931819259.jpg?ex=6578b0d4&is=65663bd4&hm=786f04c6268f010a9227a33eb0885caaf809bee5227ee77739e4351a96f4448a&=&format=webp&width=536&height=284" class="d-block w-100" alt="Carousel Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://media.discordapp.net/attachments/771376292971937802/1179137993215320225/16958824332496.jpg?ex=6578b0d4&is=65663bd4&hm=2879d411e7e01b22d6a1194ec93d479ecb2f88050662a101d79bc1167abe5feb&=&format=webp&width=536&height=284" class="d-block w-100" alt="Carousel Image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.discordapp.com/attachments/771376292971937802/1179139101170077767/170056381417.png?ex=6578b1dd&is=65663cdd&hm=ac625b2ecce807143d94f0472fbda57b2098876ba602151b9c357ca3dc2b88f5&" class="d-block w-100" alt="Carousel Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<footer>
    &copy; 2023 Нова пошта. Усі права захищені.
</footer>
</body>
</html>
