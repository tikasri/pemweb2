<?php
$prodi = [
    'SI' => 'Sistem Informasi',
    'TI' => 'Teknik Informatika',
    'BD' => 'Bisnis Digital'
];

$skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Phyton' => 30,
    'Java' => 50
];

$domisili = ['Jakarta', 'Depok', 'Bogor', 'Tangerang', 'Bekasi', 'Lainnya'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi </title>
</head>

<body>
    <fieldset class="mx-5 border p-2">
        <legend>Form Registrasi IT Club</legend>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action= "proses_registrasi.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama lengkap" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jenis kelamin_0" type="radio" class="custom-control-input" value="laki-laki" required="required">
                        <label for="jenis kelamin_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jenis kelamin_1" type="radio" class="custom-control-input" value="perempuan" required="required">
                        <label for="jenis kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <?php foreach ($prodi as $key => $value) : ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web &amp; Programming</label>
                <div class="col-8">
                    <?php foreach ($skills as $key => $value) : ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
                            <label for="skill<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach($domisili as $value):?>
                            <option value="<?php echo $value?>"><?php echo $value?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
</body>

</html>