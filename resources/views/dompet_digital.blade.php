<!DOCTYPE html>
<html>
@include('layouts.link')

<head>
    <title>Dompet Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wallet-container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .wallet-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .wallet-balance {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .wallet-buttons {
            text-align: center;
        }

        .wallet-button {
            display: inline-block;
            margin-right: 10px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .wallet-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="d-flex ">
        <div class="wallet-container">
            <div class="wallet-header">
                <h2>Dompet Wibu Sejahtera</h2>
            </div>
            <div class="wallet-balance" style="text-align: center">
                Saldo: IDR {{ number_format(auth()->user()->duit) }}
            </div>
            <div class="wallet-buttons">


                <form action="/dompet-digital/saldo" method="post">
                    @csrf
                    <div class="row">
                        <input type="integer" class="form-control  " name="jumlah">
                        <div class="col">
                            <button type="submit" name="action" value="tambah" class="btn  btn-success mt-3">Tambah Saldo</button>
                        </div>
                        <div class="col">
                            <button type="submit" name="action" value="tarik" class="btn btn-primary mt-3">Tarik Saldo</button>
                        </div>
                    </div>
                </form>
                <div class="row"> <div class="col"><a href="/home" class="btn btn-outline-dark mt-3">Kembali ke home</a></div></div>
                
                

            </div>
        </div>
    </div>

</body>

</html>
