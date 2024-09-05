<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- cssanimation.io -->
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    <?php include("../form_login/komponen/komponen.php")?>

</head>

<body>
    <div class="d-flex">
        <div class="w-50">
            <img src="image/background/bg.jpg" alt="gif" id="bg-login-admin">
        </div>
        <div class="flex-shrink-1 me-auto ms-auto mt-auto mb-auto">
            <form action="proses.php" method="post">
                <h2 class="mt-4 cssanimation fadeInBottom" id="judul">Beri saran kamu</h2>
                <div class="mt-4 mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control" id="form-control-admin-login" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input class="form-control" id="form-control-admin-login" name="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" id="form-control-admin-login" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input class="form-control" id="form-control-admin-login" name="kelas">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="laki" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Laki Laki</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="perempuan" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="saran" rows="2"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn" id="btn-submit" name="login">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>