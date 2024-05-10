<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
        }

        .table th {
            font-weight: bold;
            color: #333;
        }

        .table-container {
            margin-bottom: 20px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
        }

        .button-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>User Profile</h1>
    <div class="container">
        <div class="table-container">
            <table class="table">
                <tr>
                    <th>Nama Akun</th>
                    <td>{{ $profileData['nama_akun'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $profileData['email'] }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $profileData['gender'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $profileData['tanggal_lahir'] }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $profileData['alamat'] }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="table-container">
            <table class="table">
                <tr>
                    <th>Nama Toko</th>
                    <td>{{ $profileData['nama_toko'] }}</td>
                </tr>
                <tr>
                    <th>Rate</th>
                    <td>{{ $profileData['rate'] }}</td>
                </tr>
                <tr>
                    <th>Produk Terbaik</th>
                    <td>{{ $profileData['produk_terbaik'] }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $profileData['deskripsi'] }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="button-container btn-success">
        <a href="{{ route('query-builder.listproduct') }}">
            <button>Kembali ke List Product</button>
        </a>
    </div>
</body>
</html>
