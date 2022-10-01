<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/styles/styles.css">
        <title>Products Page</title>
    </head>
    <body>
        <div id= pageContainer>
            <div id='content'>
                <nav id="topNav">
                    <ul>
                        <li><a class="tNavLinks" href="../pages/index.php">DashBoard</a></li>
                        <li><a id="selectedPage" class="tNavLinks" href="../pages/products.php">Products</a></li>
                        <li><a class="tNavLinks" href="../pages/employees/employees.php">Employees</a></li>
                    </ul>
                </nav>
                <section id="productsInfo">
                    <div id="sideFilters">
                        <form id="filters" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" METHOD="GET">
                            <div id="filterOpt">
                                <h3>Choose Filters</h3>
                                <svg class='ioniconDown filterArrows' viewBox='0 0 512 512'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg>
                                <svg class='ioniconUp filterArrows' viewBox='0 0 512 512'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 328l144-144 144 144'/></svg>
                            </div>
                            <div id="cattInputs">
                                <h2>Categories</h2>
                                    <label for="cpu">CPU</label>
                                    <input id="cpu" name="cpuCat" type="checkbox" value="CPU">
                                    <label for="motherboards">Motherboards</label>
                                    <input id="motherboards" name="motherCat" type="checkbox" value="Motherboards">
                                    <label for="cpuCoolingSolutions">Cpu Cooling Solutions</label>
                                    <input id="cpuCoolingSolutions" name="coolingCat" type="checkbox" value="CPU Cooling Solutions">
                                    <label for="graphicsCard">Graphics Card</label>
                                    <input id="graphicsCard" name="graphicsCat" type="checkbox" value="Graphics Card">
                                    <label for="ram">Ram</label>
                                    <input id="ram" name="ramCat" type="checkbox" value="Ram">
                                    <label for="powerSupplies">Power Supplies</label>
                                    <input id="powerSupplies" name="powerCat" type="checkbox" value="Power Supplies">
                                    <label for="computerCases">Computer Cases</label>
                                    <input id="computerCases" name="caseCat" type="checkbox" value="Computer Cases">
                                    <label for="internalStorage">Internal Storage</label>
                                    <input id="internalStorage" name="internalCat" type="checkbox" value="Internal Storage">
                                    <label for="caseFans">Case Fans</label>
                                    <input id="caseFans" name="fansCat" type="checkbox" value="Case Fans">
                                    <label for="externalStorage">External Storage</label>
                                    <input id="externalStorage" name="externalCat" type="checkbox" value="External Storage">
                                    <label for="gamingPeripherals">Gaming Peripherals</label>
                                    <input id="gamingPeripherals" name="gamingCat" type="checkbox" value="Gaming Peripherals">
                                    <label for="batteryBackup">Battery Backup</label>
                                    <input id="batteryBackup" name="batteryCat" type="checkbox" value="Battery Backup">
                                    <label for="software">Softwares</label>
                                    <input id="software" name="softwareCat" type="checkbox" value="Softwares">
                                    <label for="misc">Misc</label>
                                    <input id="misc" name="miscCat" type="checkbox" value="Misc">
                            </div>
                            <div id="manuInputs">
                                <h2>Manufactures</h2>
                                    <label for="amd">AMD</label>
                                    <input id="amd" name="amdFact" type="checkbox" value="AMD">
                                    <label for="intel">Intel</label>
                                    <input id="intel" name="intelFact" type="checkbox" value="Intel">
                                    <label for="nvidia">Nvidia</label>
                                    <input id="nvidia" name="nvidiaFact" type="checkbox" value="Nvidia">
                                    <label for="corsair">Corsair</label>
                                    <input id="corsair" name="corsairFact" type="checkbox" value="Corsair">
                                    <label for="msi">MSI</label>
                                    <input id="msi" name="msiFact" type="checkbox" value="MSI">
                                    <label for="asus">Asus</label>
                                    <input id="asus" name="asusFact" type="checkbox" value="Asus">
                                    <label for="samsung">Samsung</label>
                                    <input id="samsung" name="samsungFact" type="checkbox" value="Samsung">
                                    <label for="wd">Western Digital</label>
                                    <input id="wd" name="wdFact" type="checkbox" value="Western Digital">
                                    <label for="gSkill">G.Skill</label>
                                    <input id="gSkill" name="gskillFact" type="checkbox" value="G.Skill">
                                    <label for="logitech">Logitech</label>
                                    <input id="logitech" name="logiFact" type="checkbox" value="Logitech">
                                    <label for="evga">EVGA</label>
                                    <input id="evga" name="evgaFact" type="checkbox" value="EVGA">
                            </div>
                            <div id="priceInputs">
                                <h2>Price</h2>
                                <label for="fromNum">From</label>
                                <input id="fromNum" name="from" type=Number min= 0>
                                <label for="toNum">to</label>
                                <input id="toNum" name="to" type=Number min= 0>
                                <button class="sideButton">Apply Filters</button>
                            </div>
                        </form>
                    </div>
                    <div id="productSection">
                        <form id=pSearchForm action="../pages/products.php" METHOD = "GET">
                                    <label for="searchP">Search for Product</label>
                                    <input id="searchP" name="search" type="text" placeholder="Name of Product" min= 1>
                                    <button class="bGStyle">Search</button>
                        </form>
                        <div id="productSpace">
                            <?php
                                $query = 'SELECT * FROM products';
                                $tempHold = '';
                                $queryVerify = false;
                                $manufactVerify = false;
                                if(!empty($_GET['cpuCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['cpuCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['cpuCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['motherCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['motherCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['motherCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['coolingCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['coolingCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['coolingCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['graphicsCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['graphicsCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['graphicsCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['ramCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['ramCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['ramCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['powerCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['powerCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['powerCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['caseCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['caseCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['caseCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['internalCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE IN ('{$_GET['internalCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['internalCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['fansCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['fansCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['fansCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['externalCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['externalCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['externalCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['gamingCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['gamingCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['gamingCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['batteryCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['batteryCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['batteryCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['softwareCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['softwareCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['softwareCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['miscCat'])){
                                    if(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Category IN ('{$_GET['miscCat']}'";
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = " ,'{$_GET['miscCat']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if($queryVerify){
                                    $query = "$query)";
                                }
                                $tempHold = '';
                                if(!empty($_GET['amdFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['amdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $manufactVerify = true;
                                        $queryVerify = True;
                                        $tempHold ="WHERE Company IN ('{$_GET['amdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['amdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['intelFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['intelFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['intelFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['intelFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['nvidiaFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['nvidiaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['nvidiaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['nvidiaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['corsairFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['corsairFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['corsairFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['corsairFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['msiFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['msiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['msiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['msiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['asusFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['asusFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['asusFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['asusFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['samsungFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['samsungFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['samsungFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['samsungFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['wdFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['wdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['wdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['wdFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                
                                if(!empty($_GET['gskillFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['gskillFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['gskillFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['gskillFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['logiFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['logiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['logiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['logiFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['evgaFact'])){
                                    if($queryVerify && empty($tempHold)){
                                        $manufactVerify = true;
                                        $tempHold ="&& Company IN ('{$_GET['evgaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $manufactVerify = true;
                                        $tempHold ="WHERE Company IN ('{$_GET['evgaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                    else{
                                        $tempHold = " ,'{$_GET['evgaFact']}'";
                                        $query = "$query $tempHold";
                                    }
                                }
                                if($manufactVerify){
                                    $query = "$query)";
                                }
                                $tempHold = '';
                                if(!empty($_GET['from'])){
                                    if($queryVerify && empty($tempHold)){
                                        $tempHold ="&& Price BETWEEN {$_GET['from']}";
                                        if(empty($_GET['to'])){
                                            $tempHold = "&& Price > {$_GET['from']}";
                                        }
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Price BETWEEN {$_GET['from']}";
                                        if(empty($_GET['to'])){
                                            $tempHold = "Where Price > {$_GET['from']}";
                                        }
                                        $query = "$query $tempHold";
                                    }
                                }
                                if(!empty($_GET['to'])){
                                    if($queryVerify && empty($tempHold)){
                                        $tempHold ="&& Price BETWEEN {$_GET['to']}";
                                        if(empty($_GET['from'])){
                                            $tempHold = "&& Price > {$_GET['to']}";
                                        }
                                        $query = "$query $tempHold";
                                    }
                                    elseif(!$queryVerify){
                                        $queryVerify = True;
                                        $tempHold ="WHERE Price BETWEEN {$_GET['to']}";
                                        if(empty($_GET['from'])){
                                            $tempHold = "Where Price < {$_GET['to']}";
                                        }
                                        $query = "$query $tempHold";
                                    }else{
                                        $tempHold = "AND {$_GET['to']}";
                                        $query = "$query $tempHold";
                                    }
                                }  
                                if(!empty($_GET['search'])){
                                    $query = "$query WHERE Name LIKE  '%{$_GET['search']}%'";
                                }
                                $serverName = 'localhost';
                                $userName = 'root';
                                $passWord = '';
                                $dataBase = 'techondemanddbPHP';
                                $conn = new mysqli($serverName, $userName, $passWord, $dataBase);
                                if($conn->connect_error){
                                    die("Connection failed: {$conn->connect_error}");
                                }
                                $result = $conn->query($query);
                                if(!$result){
                                    die("There was an error: {$conn->connect_error}");
                                }
                                $rows = $result->num_rows;
                                function checkStock($data){
                                    if($data <= 3){
                                        if($data <= 0){
                                            return "<li class='noStock'>No Stock</li>";
                                        }else{
                                            return "<li class='inStock'><span class= 'noStock'>HURRY!</span> {$data}</li>";
                                        }
                                    }else{
                                        return "<li class='inStock'>{$data}</li>";
                                    }
                                }
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo 
                                        "<div class='productCards'>". 
                                            "<img src= '". $row['Picture'] ."' alt='Image not Found'"."<br>".
                                            "<h3>". $row['Name'] . '</h3>'.
                                            "<P class='infoHid'>". $row['Description']. "</P>".
                                            "<ul>".
                                                "<li>". "Model: ". $row['Model']."</li>".
                                                "<li>". "SKU:".$row['SKU']."</li>".
                                                checkStock($row['Stock']).
                                                "<li>". "$".$row['Price']."</li>".
                                            "</ul>".
                                        "</div>";
                                    }
                                }else{
                                    echo "<div><h1>Product not found, try again...</h1></div>";
                                }
                                $result->close();
                                $conn->close();
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
        <script src="../public/scripts/product.js"></script>
    </body>
</html>
