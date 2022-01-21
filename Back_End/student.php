<?php
$students = [
    [
        'img' => 'img/student.jpg',
        'name' => 'username',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
        

    ],
    [
      'name' => 'hamza',
      'email' => 'hamza.laqraa@hotmail.com',
      'phone' => '0630202850',
      'number' => '1234567305477760',
      'date' => '08-Dec, 202',
      'img' => 'img/student.jpg',
  ],
  [
    'name' => 'saida',
    'email' => 'saida.barakat@hotmail.com',
    'phone' => '0630202850',
    'number' => '1234567305477760',
    'date' => '08-Dec, 202',
    'img' => 'img/student.jpg',
],
[
  'name' => 'salim',
  'email' => 'salim.ahmad@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],
[
  'name' => 'maher',
  'email' => 'maher.nourdin@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],
[
  'name' => 'salim',
  'email' => 'salim.ahmad@hotmail.com',
  'phone' => '0630202850',
  'number' => '1234567305477760',
  'date' => '08-Dec, 202',
  'img' => 'img/student.jpg',
],

    
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Dashbord_style.css" rel="stylesheet">
    <link href="css/student.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Students</title>
</head>
<body>
    <div class="container-fluid bg-light overflow-hidden">
        <div class="row flex-nowrap">
        <?php include 'sideBar.php'; ?>
        <div class="col">
        <?php include 'navbar.php'; ?>
              <div class="bg-light div container-fluid">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
              <h5 class="fw-bolder d-none d-sm-block mx-3">Students List</h5>
              <div class="d-flex align-items-center">
              <i class="far fa-sort text-info far fs-6 fa-sort me-3  d-sm-block"></i>
              <button type="button" class="btn  bg-info text-white my-3">ADD NEW STUDENT</button>
            </div>
            </div>
            <hr>
            <div class="table-responsive-sm table-responsive-md">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col" class="text-muted" >Name</th>
                    <th scope="col" class="text-muted">Email</th>
                    <th scope="col" class="text-muted">phone</th>
                    <th scope="col" class="text-muted">Enroll Number</th>
                    <th scope="col" class="text-muted">Date of admission</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach($students as $key)
                  {
                    echo "<tr>
                    <th scope='row' class='salut'><img src='{$key['img']}' alt='students' width='65px' 
                    /></th>
                  <td>{$key['name']}</td>
                  <td>{$key['email']}</td>
                  <td>{$key['phone']}</td>
                  <td>{$key['number']}</td>
                  <td>{$key['date']}</td>
                  <td><i class='fal fa-pen text-info'></i><i class='fal fa-trash text-info mx-1'></i></td>
                    </tr>"; 
                  }
                  ?>

                    
                </tbody>
              </table>
              </div>

            </div>
                </div> 
     </div> 
              
 </div>
    
    


<script src="js/bootstrap.bundle.min.js" ></script>   

</body>
</html>