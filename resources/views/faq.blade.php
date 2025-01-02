<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
                body {
            background-color: #f8f9fa;
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            margin: 0;
        }
        .main-container {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        .sidebar {
            background-color: #19535f;
            color: #ffffff;
            width: 250px;
            min-height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 0;
        }
        .sidebar h2 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #133d47;
            color: #d1e8eb;
        }
        .sidebar a.active {
            background-color: #0f2e38;
            color: #d1e8eb;
        }
        /* Main Content Styling */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
            overflow-y: auto;
        }
        .content {
            padding: 30px;
        }
        .faq-container {
        display: flex;
        flex-direction: row;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .faq-sidebar {
        flex: 1;
        background-color: #fff;
        padding: 2rem 1.5rem;
    }
    .faq-sidebar .faq-item {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 0.75rem;
        border-radius: 6px;
        margin-bottom: 0.5rem;
        transition: background-color 0.3s;
    }
    .faq-sidebar .faq-item:hover,
    .faq-sidebar .faq-item.active {
        background-color: #e6e8ff;
    }
    .faq-sidebar .faq-item span {
        display: inline-block;
        width: 12px;
        height: 12px;
        background-color: #6b5cff;
        border-radius: 50%;
        margin-right: 0.75rem;
    }
    .faq-content {
        flex: 2;
        background-color: #fff;
        padding: 2rem;
    }
    .faq-content h4 {
        font-weight: bold;
        color: #333;
    }
    .faq-content p {
        color: #666;
    }
    .faq-detail {
        opacity: 1;
        transition: all 0.8s ease-in-out;
    }

    .faq-detail.d-none {
        display: block !important;
        opacity: 0;
        height: 0;
        overflow: hidden;
        pointer-events: none;
        transition: all 0.8s ease-in-out;
    }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Pindahkan sidebar ke dalam main-container -->
        @include('partials.side-navbar-faq', ['user' => Auth::user()])
        
        <div class="main-content">
            <h2 class="text-center mb-5 fw-bold">Frequently Asked Questions</h2>
            <div class="faq-container">
                <!-- Sidebar FAQ List -->
                <div class="faq-sidebar">
                    <div class="faq-item active" data-faq="faq1">
                        <span></span> What is a Payment Gateway?
                    </div>
                    <div class="faq-item" data-faq="faq2">
                        <span></span> Do I need to pay to Instapay?
                    </div>
                    <div class="faq-item" data-faq="faq3">
                        <span></span> What platforms does Instapay support?
                    </div>
                    <div class="faq-item" data-faq="faq4">
                        <span></span> Does Instapay provide international payments?
                    </div>
                    <div class="faq-item" data-faq="faq5">
                        <span></span> Is there any setup or annual fee?
                    </div>
                </div>
        
                <!-- FAQ Content -->
                <div class="faq-content">
                    <div id="faq1" class="faq-detail">
                        <h4>What is a Payment Gateway?</h4>
                        <p>
                            A payment gateway is an ecommerce service that processes online payments for online as well as offline businesses.
                            Payment gateways help accept payments by transferring key information from their merchant websites to issuing banks,
                            card associations, and online wallet players.
                        </p>
                    </div>
                    <div id="faq2" class="faq-detail d-none">
                        <h4>Do I need to pay to Instapay?</h4>
                        <p>No, you only need to pay transaction charges when there is a transaction in your business.</p>
                    </div>
                    <div id="faq3" class="faq-detail d-none">
                        <h4>What platforms does Instapay support?</h4>
                        <p>Instapay supports a wide range of platforms, including e-commerce, mobile applications, and other online services.</p>
                    </div>
                    <div id="faq4" class="faq-detail d-none">
                        <h4>Does Instapay provide international payments?</h4>
                        <p>Yes, Instapay supports international payments, making it easier to serve global customers.</p>
                    </div>
                    <div id="faq5" class="faq-detail d-none">
                        <h4>Is there any setup or annual fee?</h4>
                        <p>No, there is no setup fee or annual maintenance fee for using Instapay services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Custom Script for FAQ Toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll('.faq-item');
            const faqDetails = document.querySelectorAll('.faq-detail');
    
            faqItems.forEach(item => {
                item.addEventListener('click', function () {
                    // Remove active class from all FAQ items
                    faqItems.forEach(el => el.classList.remove('active'));
                    
                    // Hide all FAQ content with animation
                    faqDetails.forEach(detail => {
                        if (!detail.classList.contains('d-none')) {
                            detail.classList.add('d-none');
                        }
                    });
    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Show the corresponding FAQ content with animation
                    const faqId = this.getAttribute('data-faq');
                    const targetDetail = document.getElementById(faqId);
                    targetDetail.classList.remove('d-none');
                });
            });
        });
    </script>
</body>
</html>


