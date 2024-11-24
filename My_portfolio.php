<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Resizeable images in the works section */
        .work-img {
            max-width: 100%; /* Ensures images are responsive */
            height: 200; /* Maintain aspect ratio */
            max-height: 20px; /* Set a max height for resizing */
            object-fit: fill; /* Ensures image content is not cropped */
            margin-bottom: 20px; /* Space between images */
            border-radius: 10px; /* Optional: rounded corners */
        }

        /* Resizeable carousel images */
        .carousel-img {
            max-width: 100%; /* Responsive width */
            max-height: 500px; /* Set maximum height */
            object-fit: contain; /* Ensures image fits inside the carousel */
            margin: 0 auto; /* Center the image */
            border-radius: 10px; /* Optional: rounded corners for images */
        }

        /* General body spacing for sections */
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- About Section -->
   <section id="about" class="p-5 bg-light text-center">
        <div class="container">
            <br>
            <h1>About Me</h1>
            <p>Hi, I’m Jervonnie Corpuz, a passionate 3rd-year Bachelor of Science in Information Technology (BSIT)</p>
            <p>student from New Era University.</p>
            <p>This portfolio is a reflection of my journey in the tech world, showcasing my skills, projects, and growth.</p>
            <p>My top areas of expertise include:</p>
            <ul>
                <li><strong>PHP:</strong> Crafting dynamic and interactive web applications.</li>
                <li><strong>Java:</strong> Developing robust and efficient software solutions.</li>
                <li><strong>SQL:</strong> Designing and managing powerful databases.</li>
                <p>Feel free to explore my work, and don’t hesitate to connect with me through the contact section.</p>
                <p>Let’s create something amazing together!</p>
            </ul>
        </div>
    </section>

    <!-- Carousel Section (Moved to Middle) -->
    <div class="p-5 text-center bg-dark text-white">
        <h2 class="mb-4">Gallery</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="php.png" class="d-block w-100 carousel-img" alt="Work 1">
                </div>
                <div class="carousel-item">
                    <img src="sql.jpeg" class="d-block w-1000 carousel-img" alt="Work 2">
                </div>
                <div class="carousel-item">
                    <img src="java.png" class="d-block w-100 carousel-img" alt="Work 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!-- Works Section -->
    <section id="works" class="p-5 text-center">
        <div class="container">
            <h2>My Works</h2>
            <div class="row">
                <!-- Panel 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="sql.jpeg" class="card-img-top" alt="Work 1">
                        <div class="card-body">
                            <h5 class="card-title">SQL</h5>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#project1-details">View More</button>
                            <div id="project1-details" class="collapse mt-2">
                            <ul class="list-unstyled">
                                <li><a href="https://catalog-education.oracle.com/ords/certview/sharebadge?id=5DED17771A47C0D7BD6CEF4BBA809FACA9AE2090B7658BED92CCBE5B184576D0&fbclid=IwAR3PyZ8lm-298GPwiA4om21V2IhDGu7lg5P4GoPkexgjnp7tTEzFxHA4oNE" class="text-black" target="_blank">Oracle Cloud Infrastructure 2023 AI Certified Foundations Associate</a></li>
                                <li><a href="https://catalog-education.oracle.com/ords/certview/sharebadge?id=6B49B91EE0C827044A82D9F23B60EF31BA180BBE0A7CF75BE396C1771D329B7A&fbclid=IwAR0qqFNRtm-WPsqb7POpwgS3vIGNVk-RTpDnsRehgBRqp4nK7wRqEErWuKc" class="text-black" target="_blank">Oracle Cloud Data Management 2023 Certified Foundations Associate</a></li>
                                <li><a href="https://catalog-education.oracle.com/ords/certview/sharebadge?id=CC431D915B4683908A95ED171F3DE426CA82317D7178930904B14E1ADD46EAC5&fbclid=IwAR1tYbhqTFc9wtyMP8RIoFYVvnSlsAQXvp4D6caIf7egYBy6biU9v8vGAPg" class="text-black" target="_blank">Oracle Cloud Infrastructure 2023 Certified Foundations Associate</a></li>
                                <li><a href="https://courses.cognitiveclass.ai/certificates/a9b42f9f40374711a2a3eb72191c1b90" class="text-black" target="_blank">SQL and Relational Databases 101</a></li>
                                <li><a href="https://courses.cognitiveclass.ai/certificates/9e8fdca759c14632acf6796c2e1d61b8" class="text-black" target="_blank">NoSQL and DBaaS 101</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="php.png" class="card-img-top h-50px" alt="Work 2">
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#project2-details">View More</button>
                            <div id="project2-details" class="collapse mt-2">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="java.png" class="card-img-top" alt="Work 3">
                        <div class="card-body">
                            <h5 class="card-title">JAVA</h5>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#project3-details">View More</button>
                            <div id="project3-details" class="collapse mt-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="p-5 bg-dark text-white text-center">
        <div class="container">
            <h2>Contact Me</h2>
            <p>Email: <a href="mailto:Jervonnie12@gmail.com" class="text-white">Jervonnie12@gmail.com</a></p>
            <p>Phone: <a href="tel:+69 975 626 39319" class="text-white">+69 975 626 39319</a></p>
            <p>Find me on:</p>
            <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/Sdaiyay69/" class="text-white" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/in/jervonnie-corpuz-4b40922a5/" class="text-white" target="_blank">LinkedIn</a></li>
                <li><a href="https://github.com/Jervonnie/Jervonnie-Loi-P.-Corpuz" class="text-white" target="_blank">GitHub</a></li>
            </ul>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
