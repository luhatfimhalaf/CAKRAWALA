<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f8fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .payment-container {
            display: flex;
            flex-direction: row;
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            width: 85%;
            max-width: 850px;
        }

        .payment-left {
            background-color: #19535f;
            padding: 30px;
            width: 40%;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .payment-left h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #ffcc00;
        }

        .payment-left p {
            font-size: 16px;
            margin: 0;
        }

        .payment-right {
            padding: 30px;
            width: 60%;
            background-color: #fff;
        }

        .payment-right h2 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #19535f;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
            transition: box-shadow 0.3s ease;
        }

        input:focus {
            box-shadow: 0 0 6px rgba(25, 83, 95, 0.5);
            border-color: #19535f;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #ffcc00;
            color: #19535f;
            font-weight: 600;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-submit:hover {
            background-color: #e6b800;
            transform: translateY(-2px);
        }

        .order-summary {
            margin-top: 25px;
            background: #f7f8fc;
            padding: 15px;
            border-radius: 10px;
        }

        .order-summary h3 {
            font-size: 18px;
            font-weight: 600;
            color: #19535f;
            margin-bottom: 15px;
        }

        .order-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .order-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 15px;
        }

        .order-item div {
            flex: 1;
        }

        .order-total {
            font-size: 16px;
            font-weight: 700;
            color: #19535f;
            margin-top: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <!-- Left Side -->
        <div class="payment-left">
            <h2>Complete Your Payment</h2>
            <p>Securely pay for your course and start learning today!</p>
        </div>

        <!-- Right Side -->
        <div class="payment-right">
            <h2>Payment Details</h2>
            <form id="payment-form">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="amount" value="{{ $course->price }}">

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email">
                </div>

                <button type="submit" class="btn-submit">Pay Now</button>
            </form>

            <div class="order-summary">
                <h3>Your Order Summary</h3>
                <div class="order-item">
                    <!-- Gambar kursus -->
                    <img src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                    <div>
                        <!-- Nama kursus -->
                        <strong>{{ $course->title }}</strong>
                        <p style="margin: 0; font-size: 14px;"></p>
                    </div>
                    <!-- Harga kursus -->
                    <div>
                        <strong>Rp{{ number_format($course->price, 0, ',', '.') }}</strong>
                    </div>
                </div>
                <!-- Total harga -->
                <div class="order-total">
                    Total Payable: <strong>Rp{{ number_format($course->price, 0, ',', '.') }}</strong>
                </div>
            </div>
        </div>
    </div>

    <script>
$('#payment-form').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        url: '{{ route("create.payment") }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function (response) {
            if (response.snap_token) {
                window.snap.pay(response.snap_token, {
                    onSuccess: function (result) {
                        Swal.fire({
                            title: 'Pembayaran Berhasil!',
                            text: 'Terima kasih, pembayaran Anda telah berhasil. Anda akan diarahkan ke dashboard.',
                            icon: 'success',
                            confirmButtonText: 'Lanjutkan'
                        }).then(() => {
                            // Redirect to dashboard
                            window.location.href = '/dashboard';
                        });
                    },
                    onPending: function (result) {
                        Swal.fire({
                            title: 'Pembayaran Pending!',
                            text: 'Pembayaran Anda sedang diproses. Silakan cek status pembayaran Anda di dashboard.',
                            icon: 'info',
                            confirmButtonText: 'Lanjutkan'
                        }).then(() => {
                            // Redirect to dashboard
                            window.location.href = '/dashboard';
                        });
                    },
                    onError: function (result) {
                        Swal.fire({
                            title: 'Pembayaran Gagal!',
                            text: 'Terjadi kesalahan dalam proses pembayaran. Silakan coba lagi.',
                            icon: 'error',
                            confirmButtonText: 'Coba Lagi'
                        });
                    }
                });
            } else {
                alert('Failed to get Snap Token.');
            }
        },
        error: function (xhr) {
            alert('Error: ' + Object.values(xhr.responseJSON.errors).join("\n"));
            console.log(xhr.responseText);
        }
    });
});
    </script>
</body>
</html>