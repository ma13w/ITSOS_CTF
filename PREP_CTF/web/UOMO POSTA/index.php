<?php 
    if($_SERVER["REQUEST_METHOD"] == "DAMMILAFLAG"){
        echo "flag{custom_request_method_is_cool}\n\n";
        echo "<script>document.querySelector('html').innerText = 'flag{custom_request_method_is_cool}'</script>";
    }
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern IT Company</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f0f17;
            color: #ffffff;
            overflow-x: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(0, 0, 0, 0.8);
            position: fixed;
            width: 100%;
            z-index: 10;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #08fdd8;
        }

        nav a {
            text-decoration: none;
            margin: 0 15px;
            color: #ffffff;
            font-weight: 400;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #08fdd8;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
        }

        header nav{
            margin-right: 50px;
        }

        .hero h1 {
            font-size: 3rem;
            animation: fadeIn 2s ease-in-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
            animation: fadeIn 2s ease-in-out 0.5s;
        }

        .hero .cta {
            display: inline-block;
            padding: 15px 30px;
            background: #08fdd8;
            color: #0f0f17;
            text-transform: uppercase;
            font-weight: 600;
            border-radius: 5px;
            transition: transform 0.3s;
            animation: fadeIn 2s ease-in-out 1s;
        }

        .cta:hover {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about {
            padding: 80px 50px;
            background: #16213e;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .about img {
            max-width: 50%;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .about-text {
            max-width: 50%;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #08fdd8;
        }

        .about p {
            line-height: 1.8;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #0f0f17;
        }

        footer p {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        footer a {
            color: #08fdd8;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">IT Innovators</div>
        <nav>
            <a href="#about">About</a>
            <a href="#services">Services</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to IT Innovators</h1>
        <p>Revolutionizing technology one line of code at a time.</p>
        <a href="#about" class="cta">Learn More</a>
    </section>

    <section id="about" class="about">
        <div class="about-text">
            <h2>About Us</h2>
            <p>At IT Innovators, we pride ourselves on pushing the boundaries of technology. With a team of seasoned professionals and passionate innovators, we deliver cutting-edge solutions to meet modern business challenges. From bespoke software development to AI-driven analytics, we are your trusted partner in the digital transformation journey.</p>
            <p>Founded on the principles of creativity and innovation, our mission is to empower businesses to achieve their full potential through technology. Whether you need a robust enterprise application, seamless cloud migration, or cybersecurity solutions, we have you covered.</p>
        </div>
        <img src="https://via.placeholder.com/600x400" alt="Team working on innovative projects">
    </section>

    <section id="services" class="about">
        <div class="about-text">
            <h2>Our services</h2>
            <p>At IT Innovators, we offer a wide range of services tailored to meet the unique needs of our clients. Our expertise spans across various domains including software development, cloud computing, cybersecurity, and data analytics. We are committed to delivering high-quality solutions that drive business growth and efficiency.</p>
            <p>
        Our services include:<br>
        - Custom Software Development: Tailored solutions to meet your specific business needs. <br>
        - Cloud Solutions: Seamless migration and management of cloud infrastructure.<br>
        - Cybersecurity: Comprehensive security measures to protect your digital assets.<br>
        - Data Analytics: Transforming data into actionable insights for better decision-making.<br>
        <br>
        We are dedicated to providing innovative and reliable services to help your business thrive in the digital age.
        </p>
        </div>
        <img src="https://via.placeholder.com/600x400" alt="Team working on innovative projects">
    </section>

    <footer>
        <p>&copy; 2024 IT Innovators. Designed with passion and precision. <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>

