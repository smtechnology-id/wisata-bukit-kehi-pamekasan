<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background for better contrast */
        }

        .card {
            border-radius: 15px;
            /* Rounded corners for the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        h3 {
            color: #007bff;
            /* Primary color for headings */
        }

        .btn-primary {
            background-color: #28a745;
            /* Green button for submission */
            border: none;
            /* Remove border */
        }

        .btn-primary:hover {
            background-color: #218838;
            /* Darker green on hover */
        }

        .alert-danger {
            background-color: #f8d7da;
            /* Light red for error messages */
            border-color: #f5c6cb;
            /* Red border */
        }
    </style>
</head>

<body>
    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey mb-5">
        <div class="container">
            <div class="card" style="">
                <img class="card-img-top" src="{{ asset('storage/ticket/' . $ticket->photo) }}" alt="{{ $ticket->name }}"
                    style="width: 100%; height: 400px; object-fit: cover;">
                <div class="card-body">
                    <div class="container">
                        <h3>Detail Tiket</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset('storage/ticket/' . $ticket->photo) }}"
                                                    alt="{{ $ticket->name }}" class="img-fluid"
                                                    style="max-width: 100px; height: auto;"></td>
                                            <td>{{ $ticket->name }}</td>
                                            <td>Rp. {{ number_format($ticket->price, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h3>Informasi Rekening Pembayaran</h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Bank</td>
                                            <td>BCA</td>
                                        </tr>
                                        <tr>
                                            <td>No. Rekening</td>
                                            <td>1234567890</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>PT. ABC</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Silahkan transfer ke rekening di atas dan upload bukti transfer di bawah ini.</p>
                            </div>
                            <div class="col-lg-12">
                                <!-- Form Checkout Starts -->
                                <form action="{{ route('checkout.process') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name" required
                                            value="{{ Auth::user()->name }}" autocomplete="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="ticket_date">Tanggal Ticket</label>
                                        <input type="date" class="form-control" id="ticket_date" name="ticket_date" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Jumlah Ticket</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" required
                                            autocomplete="quantity" min="1">
                                    </div>
                                    <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                                    <div class="form-group">
                                        <label for="payment_proof">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control" id="payment_proof" name="payment_proof"
                                            required accept="image/*">
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary">Proses Pesanan</button>
                                    </div>
                                </form>
                                <!-- Form Checkout Ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eHz" crossorigin="anonymous"></script>

</body>

</html>