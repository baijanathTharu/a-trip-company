<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Trip Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body>

    <!-- carousel -->
    <div class="carousel">
        <img src="/images/mountain.jpg" alt="" class="d-block w-100">
    </div>

    <!-- navigations -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger font-weight-bold">
        <a class="navbar-brand" href="#">A Trip Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- trending bookings -->
    <div class="jumbotron mx-auto col-md-10 mt-2 bg-white text-danger">
        <div class="row">
            <div class="col-12 col-sm-4 my-2">
                <h3 class="display-5 font-weight-bolder">Latest Trending Bookings</h3>
                <hr class="my-2 border border-bottom-white">
                <p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ea ipsa
                    facilis non quia voluptatibus laborum molestiae nisi, itaque minima ratione possimus numquam officia
                    distinctio doloribus recusandae earum illum ipsum dicta totam, nemo fuga architecto. Iste tempora,
                    maxime iusto vel qui mollitia fugiat, similique deleniti pariatur ut a aliquam quasi!</p>
                <button class="btn btn-danger">Book</button>
            </div>
            <div class="col-12 col-sm-8">
                {{-- <img src="/images/lumbini.jpg" alt="image" width="600px" height="300px"> --}}
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/lumbini.jpg" class="d-block w-100 h-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <span class="px-2">
                                    <button class="btn btn-danger">Book A Trip</button>
                                    <button class="btn btn-primary">Lumbini</button>
                                </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/mountain.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <span class="px-2">
                                    <button class="btn btn-danger">Book A Trek</button>
                                    <button class="btn btn-primary">Mardi Himal</button>
                                </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/temples.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <span class="px-2">
                                    <button class="btn btn-danger">Book A Visit</button>
                                    <button class="btn btn-primary">BouddhaNath</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- our services -->
    <div class="container my-3 text-danger">
        <h1 class="font-weight-bolder text-center text-danger my-2" id="services">Our Services</h1>
        <hr class="my-2 border border-bottom-white">
        <div class="row my-4">
            <div class="card col-12 col-md-4">
                <img src="/images/mountain.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">Trekking</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-12 col-md-4">
                <img src="/images/1.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">Informational Trip</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-12 col-md-4">
                <img src="/images/3.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">Family Tour</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="card col-12 col-md-4">
                <img src="/images/temples.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">Religious Tour</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-12 col-md-4">
                <img src="/images/4.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">Cultural Program</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col-12 col-md-4">
                <img src="/images/4.jpg" class="card-img-top" alt="...">
                <h3 class="display-6 text-danger font-weight-bolder text-center my-2">International Tourism</h3>
                <div class="card-body">
                    <p class="card-text font-weight-bold">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="jumbotron bg-white col-12 col-sm-8 mx-auto text-danger">
        <h1 class="font-weight-bolder my-2 text-center" id="about">About Us</h1>
        <hr class="my-2 border border-bottom-white">
        <p class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eligendi
            praesentium blanditiis maxime recusandae officia possimus hic tempore quibusdam in deserunt quod aperiam,
            exercitationem, veniam, animi nesciunt nobis alias expedita. Doloremque autem consectetur, nihil fugit
            cumque veniam! Sequi quos, obcaecati dignissimos dolores alias cum quibusdam excepturi sapiente
            necessitatibus magnam sint!</p>
        <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
    </div>

    <div class="jumbotron bg-white col-12 col-sm-8 mx-auto text-danger">
        <h1 class="font-weight-bolder my-2 text-center" id="contact">Contact Us</h1>
        <hr class="my-2 border border-bottom-white">
        <form>
            <div class="form-group font-weight-bolder">
                <label>Email address</label>
                <input type="email" class="form-control">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group font-weight-bolder">
                <label>Message</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group form-check font-weight-bold">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <div class="jumbotron mt-5 mb-0 bg-danger text-white">
        <div class="row my-4">
            <div class="col-12 col-sm-4 my-4">
                <h1 class="display-5 font-weight-bolder">Our Partners</h1>
                <hr class="my-2 border border-bottom-white">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-danger text-white">Cras justo odio</li>
                    <li class="list-group-item bg-danger text-white">Dapibus ac facilisis in</li>
                    <li class="list-group-item bg-danger text-white">Morbi leo risus</li>
                    <li class="list-group-item bg-danger text-white">Porta ac consectetur ac</li>
                    <li class="list-group-item bg-danger text-white">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 my-4">
                <h1 class="display-5 font-weight-bolder">Career With Us</h1>
                <hr class="my-2 border border-bottom-white">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-danger"><a href="#" class="text-white">Vacancies</a></li>
                    <li class="list-group-item bg-danger"><a href="#" class="text-white">Send Your Resume</a></li>
                    <li class="list-group-item bg-danger"><a href="#" class="text-white">Collaborate</a></li>
                    <li class="list-group-item bg-danger"><a href="#" class="text-white">Collaborate</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 my-4">
                <h1 class="display-5 font-weight-bolder">Reviews from Customers</h1>
                <hr class="my-2 border border-bottom-white">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block font-weight-bolder bg-white text-danger p-2">
                                <h5>Mr John Dow</h5>
                                <p>"Nulla vitae elit libero, a pharetra augue mollis interdum."</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block font-weight-bolder bg-white text-danger p-2">
                                <h5>Mr Harry</h5>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolor fuga
                                    repellendus facilis. Consectetur recusandae porro explicabo aliquid magnam quasi
                                    repellat magni nam. Voluptas, dignissimos?"</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block font-weight-bolder bg-white text-danger p-2">
                                <h5>Ms. Catylyn</h5>
                                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, voluptatum? A et
                                    odit nihil, aliqu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure,
                                    dignissimos ut. Quos perspiciatis harum"</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block font-weight-bolder bg-white text-danger p-2">
                                <h5>"Mr. Brown"</h5>
                                <p>"Praesent commodo cursus magna, vel scelerisque nisl consectetur. Lorem ipsum dolor
                                    sit amet consectetur adipisicing elit. Odit, tempora."</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/mountain.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block font-weight-bolder bg-white text-danger p-2">
                                <h5>"Tony"</h5>
                                <p>"Praesent commodo cursus magna, vel scelerisque nisl consectetur. Lorem ipsum dolor
                                    sit amet consectetur, adipisicing elit. At natus pariatur consequatur aliquid?
                                    Mollitia, laboriosam."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center bg-red font-weight-bold mb-0">A Trip Company &copy <?php echo date("Y"); ?> All Rights
            Reserved</p>
        <hr class="my-2 border border-bottom-white">
    </div>

    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>