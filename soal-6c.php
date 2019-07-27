<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "arkademy";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT name.id as 'id', name.name as 'nama', work.name as 'pekerjaan', kategori.salary as 'gaji'
    FROM name INNER JOIN work
    ON name.id_work = work.id 
    INNER JOIN kategori
    ON work.id_salary = kategori.id";
    
    $result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reza Aulia - Arkademy</title>

  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="logo-arkademy.svg"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <h4><a class="nav-item nav-link active" href="#"> <strong>ARKADEMY BOTCAMP</strong></a></h4>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mb-3">
            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-primary shadow" id="add" onclick="Swal('Hello', 'Latihan', 'Success')" > Add </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead class="text-center shadow-sm">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Work</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>'.$row["nama"].'</td>
                                            <td>'.$row["pekerjaan"].'</td>
                                            <td>'.$row["gaji"].'</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-primary"> Edit </a>
                                                <a type="button" href="./delete_data.php?id='.$row["id"].'" class="btn btn-sm btn-danger"> Delete </a>
                                            </td>
                                        </tr>';
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Sweet Alert -->
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>