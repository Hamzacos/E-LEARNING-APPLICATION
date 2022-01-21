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
    <title>Payments</title>
</head>
<body>
    <div class="container-fluid bg-light overflow-hidden">
        <div class="row flex-nowrap vh-100 ">
        <?php include 'sideBar.php'; ?>
        <div class="col">
        <?php include 'navbar.php'; ?>
              <div class=" div container-fluid">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
              <h5 class="fw-bolder d-none d-sm-block py-3">Payments</h5>
              <i class="far fa-sort text-info far fs-6 fa-sort me-3  d-sm-block "></i>
            </div>
            <hr>
            <div class="table-responsive-sm table-responsive-md">
            <table class="table table-borderless  px-4">
                <thead>
                  <tr>
                    <th scope="col" class="text-muted">Name</th>
                    <th scope="col" class="text-muted" >Payment Schedule</th>
                    <th scope="col" class="text-muted">Bill Number</th>
                    <th scope="col" class="text-muted">Amount Paid</th>
                    <th scope="col" class="text-muted">Balance amount</th>
                    <th scope="col" class="text-muted">Date </th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=" bg-white">
                    <th scope="row" >Karthi</th>
                    <td>First</td>
                    <td>00012223</td>
                    <td>DHS 100,000</td>
                    <td>DHS 500,000</td>
                    <td>05-Jan, 2022</td>
                    <td><i class="fal fa-eye text-info"></i></td>
                    </tr>
                    <tr>
                        <th scope="row" >Karthi</th>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="fal fa-eye text-info"></i></td>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row" >Karthi</th>
                            <td>First</td>
                            <td>00012223</td>
                            <td>DHS 100,000</td>
                            <td>DHS 500,000</td>
                            <td>05-Jan, 2022</td>
                            <td><i class="fal fa-eye text-info"></i></td>
                            </tr>
                            <tr >
                                <th scope="row" >Karthi</th>
                                <td>First</td>
                                <td>00012223</td>
                                <td>DHS 100,000</td>
                                <td>DHS 500,000</td>
                                <td>05-Jan, 2022</td>
                                <td><i class="fal fa-eye text-info"></i></td>
                                </tr>
                  
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