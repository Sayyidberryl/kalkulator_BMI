<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
     

        .main {
            height: 100vh;
        }

        .login-box {
            height: 300px;
            width: 500px;
            box-sizing: border-box;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <p class="text-center fs-5 fw-bold">Kalkulator BMI</p>
            <form action="" method="post">
                <div>
                    <label for="berat">Berat badan</label>
                    <input type="number" class="form-control" name="berat" id="berat">
                </div>
                <div>
                    <label for="tinggi">Tinggi badan</label>
                    <input type="number" class="form-control" name="tinggi" id="tinggi">
                </div>
                <div>
                    <button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">login</button>
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['loginbtn'])) {
            $berat = isset($_POST['berat']) ? $_POST['berat'] : 0;
            $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : 0;
            if ($berat > 0 && $tinggi > 0) {
                $kal = $tinggi / 100;
                $bmi = number_format($berat / pow($kal, 2), 1);
                if ($bmi <= 18.5) {
                    echo "<span class='text-warning mt-3'>BMI anda " . $bmi . " Berat badan anda rendah. Utamakan hidup sehat dan perhatikan konsumsi harian</span>";
                } else if ($bmi >= 18.5 && $bmi < 25) {
                    echo "<span class='text-success mt-3'>BMI anda " . $bmi . " Berat anda ideal. Pastikan asupan kalori sesuai dengan kebutuhan kalori harian & konsumsi makanan sehat</span>";
                } else if ($bmi >= 25 && $bmi < 30) {
                    echo "<span class='text-warning mt-3'>BMI anda " . $bmi . " Berat anda berlebih. Utamakan hidup sehat dan perhatikan konsumsi harian</span>";
                } else if ($bmi >= 30 && $bmi < 35) {
                    echo "<span class='text-danger mt-3''>BMI anda " . $bmi . " Anda obesitas. Utamakan hidup sehat dan perhatikan konsumsi harian</span>";
                } else if ($bmi >= 35) {
                    echo "<span class='text-danger mt-3'>BMI anda " . $bmi . " Anda obesitas extreme !. Utamakan hidup sehat dan perhatikan konsumsi harian</span>";
                } else {
                    echo "<span class='text-danger mt-3'>BMI anda " . $bmi . " maka mutu anda E dinyatakan tidak lulus</span>";
                }
            } else {
                echo "<div class='mt-3'>Masukkan berat dan tinggi Anda</div>";
            }
        }
        ?>


    </div>
</body>

</html>