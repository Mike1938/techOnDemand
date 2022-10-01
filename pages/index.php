<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/styles/styles.css">
        <title>Tech on Demand Dashboard</title>
    </head>
    <body>
        <div id=pageContainer>
            <div id=content class='morePadding'>
                <nav id="topNav">
                    <ul>
                        <li><a id="selectedPage" class="tNavLinks" href="../pages/index.php">DashBoard</a></li>
                        <li><a class="tNavLinks" href="../pages/products.php">Products</a></li>
                        <li><a class="tNavLinks" href="../pages/employees/employees.php">Employees</a></li>
                    </ul>
                </nav>
                <section id='landingArea'>
                    <header>
                        <h1>Tech on Demand</h1>
                    </header>
                    <div id="productButton">
                        <a href="../pages/products.php"><button class='landingButtons'><svg class='ioniconButton' viewBox='0 0 512 512'><path d='M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z' fill='none' stroke='currentColor' stroke-miterlimit='10' stroke-width='32'/><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-miterlimit='10' stroke-width='32' d='M338.29 338.29L448 448'/></svg>Products</button></a>
                    </div>
                    <div id="employeeProduct">
                        <a href="../pages/employees/employees.php"><button class='landingButtons'><svg class='ioniconButton' viewBox='0 0 512 512'><path d='M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm126.42 327.25a4 4 0 01-6.14-.32 124.27 124.27 0 00-32.35-29.59C321.37 329 289.11 320 256 320s-65.37 9-90.83 25.34a124.24 124.24 0 00-32.35 29.58 4 4 0 01-6.14.32A175.32 175.32 0 0180 259c-1.63-97.31 78.22-178.76 175.57-179S432 158.81 432 256a175.32 175.32 0 01-46.68 119.25z'/><path d='M256 144c-19.72 0-37.55 7.39-50.22 20.82s-19 32-17.57 51.93C191.11 256 221.52 288 256 288s64.83-32 67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39 151.44 275.59 144 256 144z'/></svg>Employees</button></a>
                    </div>
                </section>
                <hr class='divide'>
                <section id="dashBoard">
                    <div>
                        <h1>Dashboard</h1>
                    </div>
                    <div id = "dashInfo">
                        <div id="ytd" class="uniCardStyle">
                            <h2 class="divHeaders">YTD Rev</h2>
                            <?php
                                $serverName = 'localhost';
                                $userName = 'root';
                                $password = '';
                                $dataBase = 'techondemanddbPHP';
                                $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                if($conn->connect_error){
                                    dies("Connection Failed {$conn->connect_error}");
                                }
                                $query = "SELECT YEAR(`OrderDate`) AS 'Year', SUM(`SubTotal`) AS 'Total' FROM salesreciept GROUP BY YEAR(`OrderDate`) ORDER BY YEAR DESC LIMIT 5;";
                                $result = $conn->query($query);
                                if(!$result){
                                    die("There was an error {$conn->connect_error}");
                                }
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo
                                            "<p class='ytdYear'>".$row['Year']."</p>".
                                            "<p class='ytdInfo'>"."$".$row['Total']."</p>";
                                    }
                                }else{
                                    echo 'There was no record available';
                                }
                                $conn->close();
                                $result->close();
                            ?>
                        </div>
                        <div id="topEmp" class="uniCardStyle">
                            <h2 class="divHeaders">Top Employees</h2>
                            <table class="tableStyles">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>ASP</th>
                                        <th>Total Rev</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                        if($conn->connect_error){
                                            die("Connection Error {$conn->connect_error}");
                                        }
                                        $query = 'Select * FROM salesEmpPerformance ORDER BY TotalEarnings DESC limit 5';
                                        $result = $conn->query($query);
                                        if(!$result){
                                            die("There was an error {$conn->connect_error}");
                                        }
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo 
                                                "<tr class='rowStyles'>".
                                                    "<td>". $row['EmployeeID']."</td>".
                                                    "<td>". $row['EmployeeName']."</td>".
                                                    "<td>". $row['AverageSalesPrice']."</td>".
                                                    "<td>". $row['TotalEarnings']."</td>".
                                                "</tr>";
                                            }
                                        }else{
                                            echo "<p>There was no results</p>";
                                        }
                                        $result->close();
                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id='news' class="uniCardStyle">
                            <?php
                                function checkInputs($data){
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                $empID = 2; 
                                $text = "";
                                $textErr = "";
                                $commentID = '';
                                $deleteStatus = '';
                                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    if(isset($_POST['deleteComm'])){
                                        $commentID = checkInputs($_POST['deleteComm']);
                                        $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                        if($conn->connect_error){
                                            die('Failed to connect to database');
                                        }
                                        $query = "DELETE FROM tblcomments WHERE intCommentID = $commentID";
                                        if($conn->query($query) != true){
                                            $deleteStatus = "<span class= 'deletedComm'>There was an error deleting the comment</span>";
                                        }else{
                                            $deleteStatus = "<span class= 'deletedComm'>It was successfully deleted</span>";
                                        }
                                        $conn->close();
                                    }else{
                                        if(empty($_POST['comment'])){
                                            $textErr = "<span class= 'deletedComm'>Error adding comment</span>";
                                        }else{
                                            $text = checkInputs($_POST['comment']);
                                            $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                            if($conn->connect_error){
                                                die("Failed to connect");
                                            }
                                            $query = "INSERT INTO tblcomments(intEmployeeID, txtText) VALUES ($empID, '$text');";
                                            if($conn->query($query) != true){
                                                echo "<p>Error adding comment</p>";
                                            }
                                            $conn->close();
                                        }
                                    }
                                }
                            ?>
                            <h2 class="divHeaders">Task <?php echo $deleteStatus; echo $textErr;?></h2>
                            <div id='commentArea'>
                                <div id='commentSec'>
                                    <?php
                                        $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                        if($conn->connect_error){
                                            die("Failed to connect {$conn->connect_error}");
                                        }
                                        $query = 'SELECT CommentID, EmployeeID, fName, DateHour, Comment FROM comments ORDER BY CommentID DESC limit 6';
                                        $result = $conn->query($query);
                                        if(!$result){
                                            die("There was an error fetching data {$conn->connect_error}");
                                        }
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo "<div class='commentsCont'>
                                                        <p class='comments'><span class='hourTime'>{$row['DateHour']}</span><span class='userName'> {$row['fName']}({$row['EmployeeID']}): </span>{$row['Comment']}</p>
                                                            <form action = '". htmlspecialchars($_SERVER['PHP_SELF']) ."' class='deleteFrm' method = 'post'>
                                                                <button class='deleteButton' value='{$row['CommentID']}' name = 'deleteComm'>Delete</button>
                                                            </form>
                                                    </div>";
                                            }
                                        }else{
                                            echo "<p>There was no results</p>";
                                        }
                                        $result->close();
                                        $conn->close();
                                    ?>
                                </div>
                                <form class ='addComments' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
                                    <input id="commentInput" name="comment" type="text" placeholder="Comment Here">
                                    <button id="commentButton">Send</button>
                                </form>
                            </div>
                        </div>
                        <div id="recentTrans" class="uniCardStyle">
                            <h2 class="divHeaders">Recent Transactions</h2>
                            <table class="tableStyles">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Order Date</th>
                                        <th>First Name</th>
                                        <th>Customers ID</th>
                                        <th>subTotal</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                        if($conn->connect_error){
                                            die("Connection Error {$conn->connect_error}");
                                        }
                                        $query = 'Select * FROM salesreciept ORDER BY OrdersID DESC limit 10';
                                        $result = $conn->query($query);
                                        if(!$result){
                                            die("There was an error {$conn->connect_error}");
                                        }
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo 
                                                "<tr class='rowStyles'>".
                                                    "<td>". $row['OrdersID']."</td>".
                                                    "<td>". $row['OrderDate']."</td>".
                                                    "<td>". $row['CustomersFirstName']."</td>".
                                                    "<td>". $row['CustomersID']."</td>".
                                                    "<td>". $row['SubTotal']."</td>".
                                                    "<td>". $row['Total']."</td>".
                                                "</tr>";
                                            }
                                        }else{
                                            echo "There was no results";
                                        }
                                        $result->close();
                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="topProducts" class="uniCardStyle">
                            <h2 class="divHeaders">top products</h2>
                            <table class="tableStyles">
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Name</th>
                                        <th>Total</th>
                                        <th>Sold</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        function reduceString($data){
                                            if(strlen($data) > 26){
                                                return strtolower(substr($data,0, 50))."...";
                                            }else{
                                                return $data;
                                            }
                                        }
                                        $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                        $query = "SELECT SKU, Name, sum(Price * Quantity) AS 'Total', sum(Quantity) AS 'Quantity' from customerspurchases GROUP BY SKU ORDER BY Quantity DESC LIMIT 10; ";
                                        $result = $conn->query($query);
                                        if(!$result){
                                            die('There was no results');
                                        }
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                echo 
                                                "<tr class='rowStyles'>".
                                                    "<td>". $row['SKU']. "</td>".
                                                    "<td>". reduceString($row['Name']). "</td>".
                                                    "<td>". $row['Total']. "</td>".
                                                    "<td>". $row['Quantity']. "</td>".
                                                "</tr>";
                                            }
                                        }else{
                                            echo "<p>No records were found...</p>";
                                        }
                                        $conn->close();
                                        $result->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="avg" class="uniCardStyle">
                            <h2 class="divHeaders">ADT</h2>
                            <?php
                                $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                $query = "SELECT TRUNCATE(AVG(SubTotal), 2) AS 'AverageSalesPrice' FROM `salesreciept`;";
                                $result = $conn->query($query);
                                if(!$result){
                                    die('There was a problem');
                                }
                                if($result->num_rows > 0){
                                    $row = $result->fetch_assoc();
                                    echo "<p>{$row['AverageSalesPrice']}</p>";
                                }else{
                                    echo "<p>There was a problem getting the result.</p>";
                                }
                                $conn->close();
                                $result->close();
                            ?>
                        </div>
                        <div id="avgItemsTrans" class="uniCardStyle">
                            <h2 class="divHeaders">AVG UPT</h2>
                            <?php
                                $conn = new mysqli($serverName, $userName, $password, $dataBase);
                                $query = "SELECT TRUNCATE(avg(itemsPerTrans), 2) AS 'AVGItemsPerTrans' FROM (SELECT count(OrderID) AS 'itemsPerTrans' FROM customerspurchases GROUP BY OrderID) customerspurchases;";
                                $result = $conn->query($query);
                                if(!$result){
                                    die('There was a problem');
                                }
                                if($result->num_rows > 0){
                                    $row = $result->fetch_assoc();
                                    echo "<p>{$row['AVGItemsPerTrans']}</p>";
                                }else{
                                    echo "<p>There was a problem getting the result.</p>";
                                }
                                $conn->close();
                                $result->close();
                            ?>
                        </div>
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
                                <li><a href="../pages/index.php">Dashboard</a></li>
                                <li><a href="../pages/products.php">Products</a></li>
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
    </body>
</html>