<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Competitive Analysis Section</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }

        .hero-section {
            background: url('comp.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            align-items: flex-start; /* Align items to the top */
            justify-content: flex-start; /* Align items to the left */
            padding: 20px; /* Padding from the edges */
            box-sizing: border-box;
        }

        .content-wrapper {
            max-width: 800px;
            width: 100%; /* Make sure it adapts to the screen width */
            text-align: left;
            padding: 160px;
            background: rgba(0, 0, 0, 0); /* Semi-transparent background for readability */
            border-radius: 10px;
        }

        .main-heading {
            font-size: 3.0rem;
            margin-bottom: 20px;
            max-width: 100%;
        }

        .sub-heading {
            font-size: 2.0rem;
            margin-bottom: 15px;
            max-width: 100%;
        }

        .service-title {
            font-size: 1.5rem; /* Adjust font size */
            color: #1e2a41;
            margin-bottom: 10px;
            font-weight: bold;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 75%;
        }

        .buttons {
            display: flex;
            gap: 18px; /* Space between buttons */
            flex-wrap: nowrap; /* Prevent wrapping */
            margin-top: 20px; /* Space above the buttons */
        }

        .buttons a {
            padding: 8px 15px; /* Reduced padding */
            font-size: 1.1rem; /* Smaller font size */
            background-color: #1844c1;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
            white-space: nowrap; /* Prevent text wrapping inside buttons */
        }

        .buttons a:hover {
            background-color: #142ea1;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .content-wrapper {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .main-heading {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            .buttons {
                flex-direction: row; /* Keep buttons in a row */
                flex-wrap: wrap; /* Allow wrapping if needed */
                justify-content: center; /* Center buttons horizontally */
            }

            .buttons a {
                width: auto; /* Auto width to prevent stretching */
                margin-bottom: 10px; /* Add spacing between buttons when wrapped */
            }
        }

        @media (max-width: 480px) {
            .main-heading {
                font-size: 1.50rem; /* Adjust for very small screens */
            }

            p {
                font-size: 0.9rem; /* Adjust for better readability */
            }

            .buttons a {
                padding: 6px 12px; /* Further reduced padding */
                font-size: 0.8rem; /* Further reduced font size */
            }
        }

        @media (max-width: 320px) {
            p {
                max-width: 95%; /* Ensure paragraph is full width on the smallest screens */
            }
        }

        /* Services Section */
        .services-section {
            background-color: #f9f9f9;
            padding: 60px 20px;
        }

        .services-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .service-item {
            display: flex;
            align-items: flex-start;
            max-width: 32%;
            flex: 1;
        }

        .service-item i {
            color: #e07c30;
            font-size: large;
            margin-right: 10px;
        }

        .service-item p {
            font-size: 1rem;
            color: #4a4a4a;
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 768px) {
            .service-item {
                max-width: 100%;
            }

            .services-wrapper {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .service-item .service-title {
                font-size: 1.3rem;
            }

            .service-item p {
                font-size: 0.9rem;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="content-wrapper">
            <div class="main-heading">Out manoeuvring competition for your business through aligned & cohesive competitive strategy</div>
            <p>Conducting a competitor analysis, also called competitive analysis, is a crucial step for businesses to identify their competitors in the industry and analyze their marketing strategies. Our competition analysis enables actionable insights in real-time to tip competition for your business for more than a fleeting moment.</p>
            <div class="buttons">
                <a href="#">Get in Touch</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="services-wrapper">
            <div class="service-item">
                <span style="color: #e07c30; font-size:large; margin-right: 10px;">✔</span>
                <div>
                    <div class="service-title">Measuring & evaluating your competition and its strength</div>
                    <p>The true wealth of competitor analysis is discovered once the exact strength & weaknesses of the competition for your business is revealed without any sugar coating.</p>
                </div>
            </div>
            <div class="service-item">
                <span style="color: #e07c30; font-size:large; margin-right: 10px;">✔</span>
                <div>
                    <div class="service-title">Strategy to win sales battlecards</div>
                    <p>To effectively de-position the competition & leverage value of your business's products & services, your sales force should be prepared with a robust battlecard strategy so that they have a clear & digestible insight to counter competition.</p>
                </div>
            </div>
            <div class="service-item">
                <span style="color: #e07c30; font-size:large; margin-right: 10px;">✔</span>
                <div>
                    <div class="service-title">Sugar free internal messaging & timely win-loss analysis</div>
                    <p>To have a mature competitive analysis model, it is quintessential to witness the ugly truths about your business both internally & externally. Therefore, actionable insights can be timely implemented to understand the degree of win or loss w.r.t. competition.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
