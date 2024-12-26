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
            height: 100vh; /* Ensure full height for body */
            margin: 0;
            display: flex; /* Flex container for sidebar and content */
            flex-direction: column;
        }
        .main-container {
            flex: 1;
            display: flex;
            height: 100%; /* Full height for main content */
            overflow: hidden;
        }

        .sidebar {
            background-color: #19535f;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 250px; /* Fixed width for sidebar */
            height: 100%; /* Stretch sidebar to full height */
            padding: 20px;
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
            overflow-y: auto;
            padding: 20px;
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
    </style>
</head>
<body>
    <div class="main-container">
        <!-- sidebar -->
         <div class="sidebar">
            <div>
                <h2>CAKRAWALA</h2>
                <a href="{{ route('dashboard') }}" ><i class="bi bi-house"></i> Dashboard</a>
                <a href="{{ route('kursus.index') }}"><i class="bi bi-book"></i> Courses</a>
                <a href="#"><i class="bi bi-list-task"></i> Quiz</a>
                <a href="{{ route('faq.index') }}" class="active"><i class="bi bi-question-circle"></i> FAQ</a>
                <a href="#"><i class="bi bi-bell"></i> Notifications</a>
                <a href="#"><i class="bi bi-gear"></i> Settings</a>
            </div>
            <div class="mt-auto">
            <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Go Premium</h5>
                        <p class="card-text">Explore 100+ expert curated courses prepared for you.</p>
                        <button class="btn btn-primary">Get Access</button>
                    </div>
                </div>
            </div>
         </div>
    <div class="container py-5">
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
    
    <!-- Custom Script for FAQ Toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll('.faq-item');
            const faqDetails = document.querySelectorAll('.faq-detail');
    
            faqItems.forEach(item => {
                item.addEventListener('click', function () {
                    // Remove active class from all FAQ items
                    faqItems.forEach(el => el.classList.remove('active'));
                    // Hide all FAQ content
                    faqDetails.forEach(detail => detail.classList.add('d-none'));
    
                    // Add active class to clicked item
                    this.classList.add('active');
                    // Show the corresponding FAQ content
                    const faqId = this.getAttribute('data-faq');
                    document.getElementById(faqId).classList.remove('d-none');
                });
            });
        });
    </script>
    </div>
</body>
</html>


