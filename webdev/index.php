<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#nature">Nature</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#architecture">Architecture</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#travel">Travel</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/architecture1.jpg" alt="an architectural piece pic">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture</h3>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature1.jpg" alt="a pic of nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nature</h3>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/travel1.jpg" alt="a travel pic">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Travel</h3>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/architecture3.jpg" alt="an architectural piece pic">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture</h3>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature3.jpg" alt="a pic of nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nature</h3>
                    <p>...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end -->
    <section id="architecture" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Architecture
            </h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nature" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Nature
            </h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="travel" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
               Travel
            </h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
               Contact Us
            </h2>
            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                    <label for="name">Name </label><br>
                    <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="email">Email </label><br>
                    <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="number">Number </label><br>
                    <input type="text" name="number" class="form-control"><br>
                    <button type="submit" class=" btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            


            
        </div>
    </section>

    <section id="about" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
               About us
            </h2>
        </div>
        <div class="container-fluid">
            <h3 class="text-center">Hi, I'm Richy Peterson</h3>
            <p class="text-center">Hello! I'm a professional photographer based in Nkokonjeru, Uganda. I specialize in portrait photography and have been in the industry for over 5 years. My passion for photography started when I was a teenager and has grown ever since. I love capturing the beauty of people and their emotions through my lens. In this portfolio, you’ll find some of my best work from various projects I’ve worked on over the years. I hope you enjoy it!</p>
        </div>
    </section>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>