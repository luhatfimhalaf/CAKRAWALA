<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://via.placeholder.com/1920x1080?text=Disability+Background') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .container h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            text-align: left;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
            transition: box-shadow 0.3s ease;
        }

        input:focus {
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
            border-color: #4CAF50;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .form-footer {
            font-size: 12px;
            color: #777;
            margin-top: 15px;
        }

        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pembayaran untuk {{ $course->name }}</h1>
        <form id="payment-form">
            @csrf
            <input type="hidden" name="course_id" value="{{ $course->id }}">

            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="amount">Jumlah Pembayaran</label>
            <input type="number" id="amount" name="amount" value="{{ $course->price }}" readonly required>

            <button type="submit">Bayar Sekarang</button>
        </form>
        <div class="form-footer">
            <p>Butuh bantuan? <a href="#">Hubungi kami</a></p>
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
                        // Open Midtrans Snap
                        window.snap.pay(response.snap_token, {
                            onSuccess: function (result) {
                                alert('Pembayaran berhasil');
                                console.log(result);
                            },
                            onPending: function (result) {
                                alert('Pembayaran tertunda');
                                console.log(result);
                            },
                            onError: function (result) {
                                alert('Pembayaran gagal');
                                console.log(result);
                            }
                        });
                    } else {
                        alert('Gagal mendapatkan Snap Token');
                    }
                },
                error: function (xhr) {
                    alert('Terjadi kesalahan');
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
</body>
</html>
