<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/styles/styles.css">
        <title>Employees</title>
    </head>
    <body>
        <div id="pageContainer">
            <div id="content">
                <nav id="topNav">
                    <ul>
                        <li><a class="tNavLinks" href="../index.php">DashBoard</a></li>
                        <li><a class="tNavLinks" href="../products.php">Products</a></li>
                        <li><a id="selectedPage" class="tNavLinks" href="../employees/employees.php">Employees</a></li>
                    </ul>
                </nav>
                <section id= 'empLandingSec'>
                    <header>
                        <h1>Employees</h1>
                    </header>
                    <img src="../../images/teamWork.svg" alt="">
                </section>
                <hr class="divide">
                <section id='searchEmp'>
                    <div id="empInformation">
                        <div id="topFilterSec">
                            <h2>Search with filters</h2>
                            <div id="filterLoca">
                                <form class = 'filterFormsHidden' action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" >
                                    <label for='empID'>Employee ID</label> 
                                    <input id='empID' class='hiddenInput' name = 'empID' type='number'>
                                    <button>Submit</button>
                                </form>
                                <form class = 'filterFormsHidden' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method = 'post' >
                                    <label for='phone'>Phone Number</label> 
                                    <input id='phone' class='hiddenInput' name= 'phone' type='text'>
                                    <button>Submit</button>
                                </form>
                                <form class = 'filterFormsHidden' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method = 'post' >
                                    <label for= 'job'>Job Position</label>
                                    <select name= 'job' id='job' class='hiddenInput'>
                                        <option SELECTED></option>
                                        <option value='Manager'>Manager</option>
                                        <option value='Asistant Manager'>Asistant Manager</option>
                                        <option value='Sales Manager'>Sales Manager</option>
                                        <option value='Sales Associate'>sales Associate</option>
                                        <option value='Inventory Manager'>inventory Manager</option>
                                        <option value='Inventory Associate'>Inventory Associate</option>
                                    </select>
                                    <button>Submit</button>
                                </form >
                                <form class = 'filterFormsHidden' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method = 'post' >
                                    <label for='status'>Status</label>
                                    <select name= 'status' id='status' class='hiddenInput'>
                                        <option SELECTED></option>
                                        <option value='Active'>Active</option>
                                        <option value='Inactive'>Inactive</option>
                                    </select>
                                    <button>Submit</button>
                                </form >
                                <form class = 'filterFormsHidden' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method = 'post' >
                                    <label for='name'>Full Name</label> 
                                    <input name= 'fullN' id='name' class='hiddenInput' type='text'>
                                    <button>Submit</button>
                                </form>
                            </div>
                            <button class="filterButtons">Employee Id</button>
                            <button class="filterButtons">Phone Number</button>
                            <button class="filterButtons">Job Position</button>
                            <button class="filterButtons">Status</button>
                            <button class="filterButtons">Name</button>
                            <svg class='empDownArr filterEmpArrows' viewBox='0 0 512 512'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg>
                            <svg class=' empUpArr filterEmpArrows' viewBox='0 0 512 512'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 328l144-144 144 144'/></svg>
                        </div>
                        <div id="fullEmpInfo">
                            <?php
                                $empIDErr = $phoneErr = $jobErr = $statusErr = $fullNErr = '';
                                $upEmpIDErr = $upPhoneErr = $upPhysicalErr = $upEmailErr  = '';
                                $hostName = 'localhost';
                                $username = 'root';
                                $pass = '';
                                $database = 'techondemanddbPHP';
                                $conn = new mysqli($hostName, $username, $pass, $database);
                                if($conn->connect_error){
                                    die("Connection Error with the database");
                                }
                                function phoneFormatter($data){
                                    $location = substr($data, 0, 3);
                                    $middleNum = substr($data, 3, 3);
                                    $endNum = substr($data, 6, 4);
                                    return "$location-$middleNum-$endNum";
                                }
                                function test_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                $empID = $phone = $job = $status = $fullN = $upCityErr = $upZipErr = '';
                                $upEmpID = $upPhone = $upPhysical = $upEmail = $upCity = $upZip = '';
                                $query = 'SELECT * FROM employeesinfo;';
                                $filtersVerification = false;
                                $queryVerification = true;
                                $updateVerification = false;
                                $postVerify = true;
                                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $queryVerification = true;
                                    if(isset($_POST['UpempId'])){
                                        $upEmpID = $_POST['UpempId'];
                                        if(empty($_POST['upPhone'])){
                                            $upPhone = false;
                                        }else{
                                            $upPhone = test_input($_POST['upPhone']);
                                            if(!preg_match('/^[0-9]*$/', $upPhone)){
                                                $upPhone = false;
                                                $upPhoneErr = 'phone was not updated, only numbers...';
                                                echo "<h2 class = 'errSusText error'>Employee #$upEmpID $upPhoneErr</h2>";
                                            }
                                        }
                                        if(empty($_POST['upEmail'])){
                                            $upEmail = false;
                                        }else{
                                            $upEmail = test_input($_POST['upEmail']);
                                            if(!filter_var($upEmail, FILTER_VALIDATE_EMAIL)){
                                                $upEmailErr = 'Email was not formatted correcly and was not updated...';
                                                echo "<h2 class = 'errSusText error'>Employee #$upEmpID $upEmailErr</h2>";
                                                $upEmail = false;
                                            }
                                        }
                                        if(empty($_POST['upPhysical'])){
                                            $upPhysical = false;
                                        }else{
                                            $upPhysical = test_input($_POST['upPhysical']);
                                        }
                                        if(empty($_POST['upCity'])){
                                            $upCity = false;
                                        }else{
                                            $upCity = test_input($_POST['upCity']);
                                            if(!preg_match("/^[a-zA-Z\s]+$/", $upCity)){
                                                $upCityErr = 'City was not updated, letters only';
                                                $upCity = false;
                                                echo "<h2 class = 'errSusText error'>Employee #$upEmpID $upCityErr</h2>";
                                            }
                                        }
                                        if(empty($_POST['upZip'])){
                                            $upZip = false;
                                        }else{
                                            $upZip = test_input($_POST['upZip']);
                                        }
                                        // ? creating the quries for insertion
                                        if($upEmail){
                                            $query = "UPDATE tblemployees SET txtEmail = '{$upEmail}' WHERE intEmployeeID = {$upEmpID};";
                                            $updateVerification = true;
                                        }
                                        if($upPhone){
                                            if($updateVerification){
                                                $query .= "UPDATE tblemployees SET txtPhoneNumber = '{$upPhone}' WHERE intEmployeeID = {$upEmpID};";
                                            }else{
                                                $updateVerification = true;
                                                $query = "UPDATE tblemployees SET txtPhoneNumber = '{$upPhone}' WHERE intEmployeeID = {$upEmpID};";
                                            }
                                        }
                                        if($upPhysical){
                                            if($updateVerification){
                                                $query .= "UPDATE tblemployees SET txtPhysicalAddress = '{$upPhysical}' WHERE intEmployeeID = {$upEmpID};";
                                            }else{
                                                $updateVerification = true;
                                                $query = "UPDATE tblemployees SET txtPhysicalAddress = '{$upPhysical}' WHERE intEmployeeID = {$upEmpID};";
                                            }
                                        }
                                        if($upCity){
                                            if($updateVerification){
                                                $query .= "UPDATE tblemployees SET txtCity = '{$upCity}' WHERE intEmployeeID = {$upEmpID};";
                                            }else{
                                                $updateVerification = true;
                                                $query = "UPDATE tblemployees SET txtCity = '{$upCity}' WHERE intEmployeeID = {$upEmpID};";
                                            }
                                        }
                                        if($upZip){
                                            if($updateVerification){
                                                $query .= "UPDATE tblemployees SET intZipCode = {$upZip} WHERE intEmployeeID = {$upEmpID};";
                                            }else{
                                                $updateVerification = true;
                                                $query = "UPDATE tblemployees SET intZipCode = {$upZip} WHERE intEmployeeID = {$upEmpID};";
                                            }
                                        }
                                        if($updateVerification){
                                            if($conn->connect_error){
                                                die('There was a problem connecting to database');
                                            }
                                            if($conn->multi_query($query) === true){
                                                echo "<h2 class = 'errSusText'>Employee information was updated</h2>";
                                                $query = "SELECT * FROM employeesinfo where EmployeeID = {$upEmpID};";
                                            }else{
                                                die("<h1 class = 'errSusText'>Error inserting information, Try Again...</h1>");
                                            }
                                        }
                                        $conn->close();
                                    }
                                    if(isset($_POST['empID'])){
                                        $filtersVerification = true;
                                        if(empty($_POST['empID'])){
                                            $empIDErr = 'Employee ID cannot be left empty';
                                            echo "<h2 class = 'errSusText error'>$empIDErr</h2>";
                                        }else{
                                            $empID = test_input($_POST['empID']);
                                            $query = "SELECT * FROM employeesinfo WHERE EmployeeID = {$empID};";
                                        }
                                    }elseif(isset($_POST['phone'])){
                                        $filtersVerification = true;
                                        if(empty($_POST['phone'])){
                                            $phoneErr = "Phone number cannot be left empty.";
                                            echo "<h2 class = 'errSusText error'>$phoneErr</h2>";
                                            $postVerify = false;
                                        }else{
                                            $phone = test_input($_POST['phone']);
                                            if(!preg_match('/^[0-9]*$/', $phone)){
                                                $phoneErr = 'Only numbers when searching phones, try again...';
                                                echo "<h2 class = 'errSusText error'>$phoneErr</h2>";
                                            }else{
                                                $query = "SELECT * FROM employeesinfo WHERE PhoneNumber = '{$phone}';";
                                            }
                                        }
                                    }elseif(isset($_POST['job'])){
                                        $filtersVerification = true;
                                        if(empty($_POST['job'])){
                                            $jobErr = 'Job position left empty, try again...';
                                            echo "<h2 class = 'errSusText error'>$jobErr</h2>";
                                            $postVerify = false;
                                        }else{
                                            $job = test_input($_POST['job']);
                                            $query = "SELECT * FROM employeesinfo WHERE JobPosition = '{$job}';";
                                        }
                                    }elseif(isset($_POST['status'])){
                                        $filtersVerification = true;
                                        if(empty($_POST['status'])){
                                            $statusErr = 'Status was left empty, try again...';
                                            echo "<h2 class = 'errSusText error'>$statusErr</h2>";
                                        }else{
                                            $status = test_input($_POST['status']);
                                            $query = "SELECT * FROM employeesinfo WHERE 'Status' = '{$status}';";
                                        }
                                    }elseif(isset($_POST['fullN'])){
                                        $filtersVerification = true;
                                        if(empty($_POST['fullN'])){
                                            $fullNErr = 'Name was left empty, try again...';
                                            echo "<h2 class ='errSusText error'>$fullNErr</h2>";
                                        }else{
                                            $fullN = test_input($_POST['fullN']);
                                            if(!preg_match("/^[a-zA-Z]*$/", $fullN)){
                                                $fullNErr = 'Only Letters in Name, try again...';
                                                echo "<h2 class ='errSusText error'>$fullNErr</h2>";
                                            }else{
                                                $query = "SELECT * FROM employeesinfo WHERE FullName like '%{$fullN}%';";
                                            }
                                        }
                                    }
                                } 
                                $conn = new mysqli($hostName, $username, $pass, $database);
                                $result = $conn->query($query);
                                if(!$result){
                                    die('There was a problem fetching data');
                                }
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo 
                                            "<div class='empCards'>
                                                <?php {$jobErr}?>
                                                <h3>{$row['FullName']} <span class='editInfoLabel'>Edit Info <svg class='ioniconEdit' viewBox='0 0 512 512'><path d='M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path d='M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z'/></svg></span></h3>
                                                <p class='empIdLoc'><span class='dataSubject'>Employee ID:</span> <span class='idNumber'>{$row['EmployeeID']}</span></p>
                                                <form class='hiddenfrmCont' action= '". htmlspecialchars($_SERVER['PHP_SELF'])  ."'method='post'>
                                                    <label for='upPhone'>New Phone Number</label>
                                                    <input class = 'updateForms' id='upPhone' name='upPhone' type='text'>
                                                    <label for='upEmail'>New Email</label>
                                                    <input class = 'updateForms' id='upEmail' name='upEmail' type='email'>
                                                    <label for='upPhysical'>New Physical Address</label>
                                                    <input class = 'updateForms' id='upPhysical' name='upPhysical' type='text'>
                                                    <label for='upCity'>New City</label>
                                                    <input class = 'updateForms' id='upCity' name='upCity' type='text'>
                                                    <label for='upZip'>New ZipCode</label>
                                                    <input class = 'updateForms' id='upZip' name='upZip' type='number'>
                                                    <button name = 'UpempId' class='submitWId' value = '{$row['EmployeeID']}'>Update</button>
                                                </form>
                                                <ul class='extraInfo'>
                                                    <li><span class='dataSubject'>Phone Number: </span>". phoneFormatter($row['PhoneNumber'])."</li>
                                                    <li><span class='dataSubject'>Email: </span>{$row['Email']}</li>
                                                    <li><span class='dataSubject'>Physical Address: </span>{$row['PhysicalAddress']}</li>
                                                    <li><span class='dataSubject'>City: </span>{$row['City']}</li>
                                                    <li><span class='dataSubject'>Zipcode: </span> 00{$row['Zipcode']}</li>
                                                    <li><span class='dataSubject'>JobPosition: </span> {$row['JobPosition']}</li>
                                                    <li><span class='dataSubject'>Status: </span> {$row['Status']}</li>
                                                </ul>
                                            </div>";
                                    }
                                }else{
                                    echo "<h2 class= 'errSusText'>No records were found, please try again...</h2>";
                                }  
                                $conn->close();
                                $result->close();
                            ?>
                        </div>
                    </div>
                </section>
                <hr class="divide">
                <section id="createEmp">
                    <div id='createEmpButton'>
                        <a href='../../pages/employees/recruitEmployee.php'><button>Employee New Hire Form</button></a>
                    </div>
                    <div id='createEmpPic'>
                        <h2>New Employee?</h2>
                        <img src="../../images/create.svg" alt="">
                    </div>
                </section>
                <footer id= 'minFooter'>
                    <div id="container">
                        <div>
                            <p><a class="socials" href="https://github.com/Mike1938" target="_"><svg class='ionicon' viewBox='0 0 512 512'>
                                <path d='M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z'/></svg></a></p>
                            <p><a href="https://twitter.com/home" target="_"><svg class='ionicon' viewBox='0 0 512 512'>
                                <path d='M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z'/></svg></a></p>
                        </div>
                        <div>
                            <h3>Other Pages</h3>
                            <ul id="otherPages">
                                <li><a href="../index.php">Dashboard</a></li>
                                <li><a href="../products.php">Products</a></li>
                                <li><a href="../pages/employees/employees.php">Employee</a></li>
                            </ul>
                        </div>
                        <div>
                            <p><a class="socials" href="https://www.facebook.com/" target="_"><svg class='ionicon' viewBox='0 0 512 512'>
                                <path d='M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z'  fill-rule='evenodd'/></svg></a></p>
                            <p><a href="mailto:mmaldonadosan&#64;outlook&#46;com"><svg class='ionicon' viewBox='0 0 512 512'><rect x='48' y='96' width='416' height='320' rx='40' ry='40' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32' d='M112 160l144 112 144-112'/></svg></a>
                            </p>
                        </div>
                        <p id="backToTop"><a href="#top"><svg class='ionicon' viewBox='0 0 512 512'>
                            <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 244l144-144 144 144M256 120v292'/></svg>Back to Top</a></p>
                        <hr>
                        <p>&copy Malsan inc. 2020</p>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../../public/scripts/employees.js"></script>
    </body>
</html>