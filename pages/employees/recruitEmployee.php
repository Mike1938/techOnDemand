<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/styles/styles.css">
        <title>New Employee</title>
    </head>
    <body>
    <div id="pageContainer">
        <div id="content" class="morePadding">
            <nav id="topNav">
                <ul>
                    <li><a class="tNavLinks" href="../index.php">DashBoard</a></li>
                    <li><a class="tNavLinks" href="../products.php">Products</a></li>
                    <li><a class="tNavLinks" href="../employees/employees.php">Employees</a></li>
                </ul>
            </nav>
            <?php
                $fNameErr = $lName1Err = $lName2Err = $middleErr = $genderErr = $dobErr = $physicalErr = $cityErr = $zipErr = $phoneErr = $jobErr = $empWageErr = $emailErr = "";
                $fName = $lName1 = $lName2 = $middle = $gender = $dob = $physical = $city = $zip = $phone = $job = $empWage = $email = "";
                $added = '';
                $validation = true;
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(empty($_POST['fName'])){
                        $fNameErr = 'Name is required';
                        $validation = false;
                    }else{
                        $fName = test_input($_POST['fName']);
                        if(!preg_match("/^[a-zA-Z ]*$/", $fName)){
                            $fNameErr = 'Only Letters';
                            $validation = false;
                        }
                    }
                    if(empty($_POST['lName1'])){
                        $lName1Err = 'The Last Name is required';
                        $validation = false;
                    }else{
                        $lName1 = test_input($_POST['lName1']);
                        if(!preg_match("/^[a-zA-Z]*$/", $lName1)){
                            $lName1Err = 'Only letters';
                            $validation = false;
                        }
                    }
                    if(empty($_POST['lName2'])){
                        $lName2 = null;
                    }else{
                        $lName2 = test_input($_POST['lName2']);
                        if(!preg_match("/^[a-zA-Z]*$/", $lName2)){
                            $validation = false;
                            $lName2Err = 'Only letters';
                        }
                    }
                    if(empty($_POST['middleName'])){
                        $middle = null;
                    }else{
                        $middle = test_input($_POST['middleName']);
                        if(!preg_match("/^[a-zA-Z]*$/", $middle)){
                            $middleErr = 'Only letters';
                            $validation = false;
                        }
                        if(strlen($middle) > 1){
                            $middleErr = 'Only initial letter';
                            $validation = false;
                        }
                    }
                    if(empty($_POST['gender'])){
                        $genderErr = 'The gender is required';
                        $validation = false;
                    }else{
                        $gender = test_input($_POST['gender']);
                    }
                    if(empty($_POST['dob'])){
                        $dobErr = 'DOB is required';
                        $validation = false;
                    }else{
                        $dob = test_input($_POST['dob']);
                    }
                    if(empty($_POST['physicalAdd'])){
                        $physicalErr = 'Address is required';
                        $validation = false;
                    }else{
                        $physical = test_input($_POST['physicalAdd']);
                    }
                    if(empty($_POST['city'])){
                        $cityErr = 'city is required';
                        $validation = false;
                    }else{
                        $city = test_input($_POST['city']);
                        if(!preg_match("/^[a-zA-Z\s]+$/", $city)){
                            $validation = false;
                            $cityErr = 'Only Letters';
                        }
                    }
                    if(empty($_POST['zipcode'])){
                        $zipErr = 'Zipcode is required';
                        $validation = false;
                    }else{
                        $zip = test_input($_POST['zipcode']);
                    }
                    if(empty($_POST['phone'])){
                        $validation = false;
                        $phoneErr = 'Phone number required';
                    }else{
                        $phone = test_input($_POST['phone']);
                        if(!preg_match('/^[0-9]*$/', $phone)){
                            $phoneErr = 'Only numbers';
                            $validation = false;
                        }
                    }
                    if(empty($_POST['jobPos'])){
                        $validation = false;
                        $jobErr = 'This field is required';
                    }else{
                        $job = test_input($_POST['jobPos']);
                    }
                    if(empty($_POST['empWage'])){
                        $empWage = 15.00;
                    }else{
                        $empWage = test_input($_POST['empWage']);
                        if(!preg_match('/^[0-9]*$/', $empWage)){
                            $empWageErr = 'Only Numbers';
                        }
                    }
                    if(empty($_POST['email'])){
                        $emailErr = 'Email is required';
                        $validation = false;
                    }else{
                        $email = test_input($_POST['email']);
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $validation = false;
                            $emailErr = 'Email not formatted correctly';
                        }
                    }
                    if($validation){
                        $hostName = 'localhost';
                        $username = 'root';
                        $pass = '';
                        $database = 'techondemanddbPHP';
                        $conn = new mysqli($hostName, $username, $pass, $database);
                        if($conn->connect_error){
                            die("There was a ploblem fetching the database");
                        }
                        $query = "INSERT INTO tblemployees(txtEmployeeFName, txtMiddleName, txtEmployeeLName1, txtEmployeeLName2, txtGender, datDOB, txtPhysicalAddress, txtCity, intZipCode, txtPhoneNumber, txtEmail, txtJobCodeID, curEmployeeWage)
                                    VALUES('$fName', '$middle', '$lName1', '$lName2', '$gender', '$dob', '$physical', '$city', $zip, '$phone', '$email', '$job', $empWage);";
                        if($conn->query($query)){
                            $added = "<h1 id= 'addedEmp'>The employee $fName has been added</h1>";
                        }else{
                            echo "<h1>There was an error and data couldn't be added</h1>";
                        }
                        $conn->close();
                    }
                }
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            <section id= "frmSection">
                <header id='recruitHead'>
                    <h1>Employee New Hire Form</h1>
                </header>
                <?php echo $added?>
                <form id="empForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
                    <div id="frmContainer">
                        <div id="generalInfo">
                            <h2>General Info</h2>
                            <label class="labelStyles" for="fName">First Name <span class="error"><?php echo "* $fNameErr";?></span></label>
                            <input class='inputStyles' id='fName' placeholder="First Name" type= 'text' name='fName' value = '<?php echo $fName?>''>
                            <label class="labelStyles" for="lName1">Last Name<span class="error"><?php echo "* $lName1Err";?></span></label>
                            <input class='inputStyles' placeholder="Last Name" id='lName1' type= 'text' name='lName1' value = '<?php echo $lName1?>''>
                            <label class="labelStyles" for="lName2">Second Last Name<span class="error"><?php echo " $lName2Err";?></span></label>
                            <input class='inputStyles' id='lName2' type='text' placeholder="Second Last Name" name='lName2' value = '<?php echo $lName2?>''>
                            <label class="labelStyles" for="middle">Middle Name Initial<span class="error"><?php echo " $middleErr";?></span></label>
                            <input class='inputStyles' id='middle' type='text' placeholder="Middle Name" name='middleName' value = '<?php echo $middle?>''>
                            <label class= 'labelStyles'>Gender <span class="error"><?php echo "* $genderErr";?></span></label>
                            <label class="genderLabels" for="female">Female</label>
                            <input class="genderRadio" <?php if (isset($gender) && $gender=="F")?> id='female' type= 'radio' name='gender' Value="F">
                            <label class="genderLabels" for="male">Male</label>
                            <input class="genderRadio" <?php if (isset($gender) && $gender=="M")?>  id='male' type= 'radio' name='gender' value="M">
                            <label class="genderLabels" for="other">Other</label>
                            <input class="genderRadio" <?php if (isset($gender) && $gender=="Other")?>  id='other' type= 'radio' name='gender' value="Other">
                            <label class="labelStyles" class='labelStyles' for="dob">Date of Birth<span class="error"><?php echo "* $dobErr";?></span></label>
                            <input class='inputStyles' id='dob' type= 'date' name='dob' value = '<?php echo $dob?>''>
                        </div>
                        <div id="importantInfo">
                            <h2>Detail Information</h2>
                            <label class="labelStyles" for="physical">Physical Address<span class="error"><?php echo "* $physicalErr";?></span></label>
                            <input class='inputStyles' placeholder="Physical Address" id='physical' type= 'text' name='physicalAdd' value = '<?php echo $physical;?>''>
                            <label class="labelStyles" for="city">City<span class="error"><?php echo "* $cityErr";?></span></label>
                            <input class='inputStyles' placeholder="City" id='city' type= 'text' name='city' value = '<?php echo $city;?>''>
                            <label class="labelStyles"  placeholder="Zipcode" for="zip">Zipcode<span class="error"><?php echo "* $zipErr";?></span></label>
                            <input class='inputStyles' id='zip' type='number' name='zipcode' value = '<?php echo $zip?>''>
                            <label class="labelStyles" for="phone">Phone Number<span class="error"><?php echo "* $phoneErr";?></span></label>
                            <input class='inputStyles' id='phone' type= 'text' name='phone' value = '<?php echo $phone?>''>
                            <label class="labelStyles" for="jobPos">Job Position<span class="error"><?php echo " * $jobErr";?></span></label>
                            <select class='inputStyles' name="jobPos" id="jobPos" value = '<?php echo $job?>''>
                                <option selected value=""></option>
                                <option value="MGR_FT">Manager</option>
                                <option value="ASMGR_FT">Asistant Manager</option>
                                <option value="INVMGR_FT">Inventory Manager</option>
                                <option value="SMGR_FT">Sales Manager</option>
                                <option value="Invassoc_FT">Inventory Associate FT</option>
                                <option value="Invassoc_PT">Inventory Associate PT</option>
                                <option value="Sassoc_FT">Sale Associate FT</option>
                                <option value="Sassoc_PT">Sale Associate PT</option>
                            </select>
                            <label class="labelStyles" for="empWage">Employee Wage<span class="error"><?php echo "* $empWageErr";?></span></label>
                            <input class='inputStyles' id='empWage' type='number' name='empWage' value = '<?php echo $empWage;?>''>
                            <label class="labelStyles" for="email">Email<span class="error"><?php echo "* $emailErr";?></span></label>
                            <input class='inputStyles'  placeholder="example@email.com" id='email' type='email' name='email' value = '<?php echo $email;?>''>
                        </div>
                    </div>
                    <button>Submit</button>
                </form>
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
                            <li><a href="../employees/employees.php">Employee</a></li>
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
    </body>
</html>