<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nudrisi | Speech and Development Centre</title>
    <link rel="stylesheet" href="style.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            color: #333;
            background-color: #ffffff;
            line-height: 1.6;
        }

        header {
            background: #ffffff;
            padding: 12px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            flex-wrap: wrap;
        }

        .logo {
            display: inline-block;
            text-decoration: none;
        }

        .logo img {
            width: auto;
            max-width: 180px;
            height: 60px;
            object-fit: contain;
            display: block;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin-left: 22px;
            font-size: 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #168c86;
        }

        .hero {
            background: #eaf8f5;
            padding: 80px 7%;
            text-align: center;
        }

        .hero h1 {
            color: #167e78;
            font-size: 42px;
            margin-bottom: 18px;
        }

        .hero p {
            max-width: 700px;
            margin: 0 auto 25px;
            font-size: 18px;
            color: #555;
        }

        .btn {
            display: inline-block;
            background: #168c86;
            color: white;
            padding: 12px 26px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn:hover {
            background: #116c67;
        }

        section {
            padding: 60px 7%;
            text-align: center;
        }

        section h2 {
            color: #167e78;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .intro {
            max-width: 800px;
            margin: auto;
            color: #555;
        }

        .services {
            background: #f8fbfa;
        }

        .service-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .service-card {
            background: white;
            padding: 30px 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
            width: 320px;
        }

        .service-card h3 {
            color: #167e78;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #555;
        }

        .about-content {
            max-width: 800px;
            margin: auto;
        }

        .contact {
            background: #eaf8f5;
        }

        .contact p {
            margin: 10px 0;
        }

        footer {
            background: #176e69;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 650px) {
            header {
                justify-content: center;
                gap: 12px;
            }

            nav {
                text-align: center;
            }

            nav a {
                display: inline-block;
                margin: 6px 8px;
            }

            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <header>
        <a href="#home" class="logo">
            <img src="logo-nudrisi.jpeg" alt="Nudisiri Logo">
        </a>

        <nav>
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <h1>Welcome to Nudrisi</h1>
        <p>
            Supporting every child's journey through compassionate care,
            personalized therapy, and developmental support.
        </p>
        <a href="#contact" class="btn">Contact Us</a>
    </section>

    <section id="services" class="services">
        <h2>Our Services</h2>
        <p class="intro">
            We provide supportive therapy services designed around
            individual needs and developmental goals.
        </p>

        <div class="service-container">
            <div class="service-card">
                <h3>Speech and Language Therapy</h3>
                <p>
                    Helping children develop communication, speech,
                    language, and listening skills through personalized support.
                </p>
            </div>

            <div class="service-card">
                <h3>Occupational Therapy</h3>
                <p>
                    Supporting everyday skills, coordination,
                    sensory development, and greater independence.
                </p>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="about-content">
            <h2>About Nudrisi</h2>
            <p>
                At Nudrisi, we believe every child has unique strengths
                and abilities. Our aim is to provide a caring and supportive
                environment where children can learn, grow, and develop
                at their own pace.
            </p>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Have questions or want to know more about our services?</p>
        <p>We would love to hear from you.</p>
        <a href="mailto:info@nudrisi.com" class="btn">Email Us</a>
    </section>

    <footer>
        <p>&copy; 2026 Nudrisi. All rights reserved.</p>
    </footer>

</body>
</html>