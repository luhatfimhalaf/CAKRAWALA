<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
              body {
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }
        .hero-section {
            background: linear-gradient(90deg, #19535f, #133d47);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -30%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        .hero-section p {
            font-size: 1.1rem;
            position: relative;
            z-index: 2;
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
  <!-- Sidebar -->
  @include('partials.side-navbar-faq', ['user' => Auth::user()])
  <!-- Main Content -->
   <div class="main-content">
       <div class="hero-section">
           <h1>FAQ</h1>
           <p>Find answers to frequently asked questions about our services.</p>
       </div>
       <div class="container py-5">
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