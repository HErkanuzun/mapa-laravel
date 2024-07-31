<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #33b249;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Yeni Form Gönderimi</h2>
        </div>
        <div class="content">
            <p><strong>İsim:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>İş Tecrüben Kaç Sene?</strong> {{ $data['experience'] }}</p>
            <p><strong>İş Sektörün?</strong> {{ $data['sector'] }}</p>
            <p><strong>Mapa Hakkında Bilgiye Nereden Ulaştın?</strong> {{ $data['infoSource'] }}</p>
            <p><strong>Bu Programa Neden İlgi Duyuyorsun?</strong> {{ $data['interestReason'] }}</p>
            <p><strong>Bize Katılmanı Ne Engelleyebilir?</strong> {{ $data['hindrance'] }}</p>
        </div>
    </div>
</body>
</html>
