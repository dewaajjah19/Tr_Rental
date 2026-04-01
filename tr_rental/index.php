<?php
include 'backend/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM armada");

while ($row = mysqli_fetch_assoc($data)) {
    echo $row['nama_armada'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TR Rental</title>

    <!-- FONT POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="nav-container">

            <div class="logo">
                <img src="assets/img/logo_rental.png" alt="TR Rental Logo">
            </div>

            <nav class="nav-menu">
                <a href="#">About Us</a>
                <a href="#">Products</a>
                <a href="#">Contact Us</a>
            </nav>

        </div>
    </header>

    <section class="hero">

        <div class="hero-container">

            <!-- TEXT -->
            <div class="hero-text">
                <h1>Easy Motorbike & Car Rental in Bali</h1>
                <p>
                    Rent motorbikes and cars easily and explore Bali with comfort and flexibility — all in one platform.
                    Find the vehicle you need, choose your rental dates, and book in just a few simple steps.
                </p>
                <button class="btn-primary">Explore Categories</button>
            </div>

            <!-- IMAGE -->
            <div class="hero-image">
                <img src="assets/img/image 13.png" class="img-back" alt="">
                <img src="assets/img/6600_4_02 1.png" class="img-front" alt="">
            </div>

        </div>

    </section>

    <!-- ABOUT -->
    <section class="about">
        <div class="about-container">

            <!-- IMAGE -->
            <div class="about-image">
                <img src="assets/img/Ellipse 8.png" alt="about">
            </div>

            <!-- TEXT -->
            <div class="about-text">
                <h2>Your Bali Motorbike & Car Rental in One Place</h2>
                <p>
                    Our platform makes motorbike and car rental in Bali simple and convenient. Browse vehicles, choose your rental dates, and book easily online. You can choose delivery to your location or pickup at our office, and receive a downloadable invoice after booking.
                </p>
            </div>

        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="steps">
        <h2>How It Works</h2>

        <div class="step-container">
            <div class="step-card">
                <div class="circle">1</div>
                <h3>Choose Your Motorbike</h3>
                <p>Browse available motorbikes and select the one that suits your needs.</p>
            </div>

            <div class="step-card">
                <div class="circle">2</div>
                <h3>Set Your Rental Schedule</h3>
                <p>Choose pickup date and return date easily through the booking form.</p>
            </div>

            <div class="step-card">
                <div class="circle">3</div>
                <h3>Confirm Your Booking</h3>
                <p>Download your invoice and wait for confirmation via WhatsApp.</p>
            </div>
        </div>
    </section>

    <!-- WHY RENT -->
    <section class="why">
        <div class="why-header">
            <h2>Why Rent with TRrental?</h2>
            <p>
                We make motorbike rental in Bali simple, safe, and convenient.
                Book your ride easily and explore Bali with confidence.
            </p>
        </div>

        <div class="why-container">

            <div class="why-card">
                <div class="icon">✔</div>
                <h3>Verified Motorbikes</h3>
                <p>All motorbikes listed are checked to ensure they are in good condition.</p>
            </div>

            <div class="why-card">
                <div class="icon">💰</div>
                <h3>Transparent Pricing</h3>
                <p>No hidden fees. Compare rental prices and choose what fits your budget.</p>
            </div>

            <div class="why-card">
                <div class="icon">💬</div>
                <h3>Fast WhatsApp Confirmation</h3>
                <p>Get confirmation quickly through WhatsApp for a smooth process.</p>
            </div>

            <div class="why-card">
                <div class="icon">📍</div>
                <h3>Flexible Pickup Options</h3>
                <p>Choose delivery to your location or pick up at our rental office.</p>
            </div>

        </div>
    </section>

    <!-- NEED TO KNOW -->
    <section class="need">
        <h2>Need to Know</h2>

        <div class="faq">

            <div class="faq-item">
                <button class="faq-question">
                    Do I need a passport?
                    <span class="icon-plus">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, a passport is required as a rental deposit during the rental period.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you deliver the motorbike?
                    <span class="icon-plus">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we can deliver the motorbike to your location in Bali.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do I confirm my booking?
                    <span class="icon-plus">+</span>
                </button>
                <div class="faq-answer">
                    <p>You will receive confirmation via WhatsApp after booking.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Where can I pick up the motorbike?
                    <span class="icon-plus">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can pick up at our office or request delivery.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- CUSTOMER REVIEWS -->
    <section class="reviews">
        <h2>Customer Reviews</h2>

        <div class="review-container">

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>
                    “Very easy booking process and the motorbike was in excellent condition.
                    Highly recommended!”
                </p>
                <h4>Daniel, Australia</h4>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>
                    “Great service and fast response via WhatsApp. Will rent again next time in Bali.”
                </p>
                <h4>Sophia, UK</h4>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>
                    “Affordable price and flexible pickup options. Really convenient!”
                </p>
                <h4>Rizky, Indonesia</h4>
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">

            <!-- LEFT -->
            <div class="footer-left">
                <img src="assets/img/logo_rental.png" alt="logo">
                <p>Copyright @2026</p>
            </div>

            <!-- RIGHT -->
            <div class="footer-right">
                <a href="#"><img src="assets/img/ic_baseline-email.png" alt="email"></a>
                <a href="#"><img src="assets/img/jam_whatsapp.png" alt="wa"></a>
                <a href="#"><img src="assets/img/mdi_instagram.png" alt="ig"></a>
            </div>

        </div>
    </footer>


    <script>
        document.querySelectorAll(".faq-question").forEach(button => {
            button.addEventListener("click", () => {
                const item = button.parentElement;
                item.classList.toggle("active");
            });
        });
    </script>

</body>

</html>