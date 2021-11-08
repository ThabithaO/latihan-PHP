<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuatan Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class ="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-info">
                    <div class="card-header text-center">
                        <h2 class="card-title">Form Input Data Diri</h2>
                    </div> 
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Nama</th>
                                <td>
                                    :
                                    <?php
                                        echo $nama;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <td>
                                    :
                                    <?php
                                        echo $nim;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Universitas</th>
                                <td>
                                    :
                                    <?php
                                        echo $universitas;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>
                                    :
                                    <?php
                                        echo $jenis_kelamin;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Foto Diri</th>
                                <td>
                                    :
                                    <?php
                                        echo "<img src = '". $link_foto ."'class = 'img-fluid'>";
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <hr style="border-color: white;">
                        <div class="form-group text-center">
                            <a href="form.php"><button class="btn btn-light w-50">Back</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>