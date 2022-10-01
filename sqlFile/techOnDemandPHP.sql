DROP DATABASE IF EXISTS techOnDemandDBPHP;
CREATE DATABASE techOnDemandDBPHP;
USE techOnDemandDBPHP ;

-- -----------------------------------------------------
-- *Table tblZipCode
-- -----------------------------------------------------

CREATE TABLE tblZipCode (
  intZipCode SMALLINT NOT NULL PRIMARY KEY COMMENT "numeric, primary key zip code",
  intZipPlus4 INT  COMMENT "numeric, zipcode extension",
  txtCity VARCHAR(25) NOT NULL COMMENT "alphanumeric, city",
  txtState VARCHAR(2) NOT NULL DEFAULT 'PR' COMMENT "alphanumeric, state, default value PR"
);

-- -----------------------------------------------------
-- ? INSERT INTO tblZipCode
-- -----------------------------------------------------
INSERT INTO tblZipCode(intZipCode, intZipPlus4, txtCity, txtState) values
    (0,0,'N/A','PR'),
    (601,0,'Adjuntas','PR'),
    (602,0,'Aguada','PR'),
    (603,0,'Aguadilla','PR'),
    (604,0,'Aguadilla Ramey','PR'),
    (605,0,'Aguadilla P.O. B','PR'),
    (606,0,'Maricao','PR'),
    (610,0,'Anasco','PR'),
    (611,0,'Utuado Angeles','PR'),
    (612,0,'Arecibo','PR'),
    (613,0,'Arecibo P.O. Bo','PR'),
    (614,0,'Arecibo P.O. Bo','PR'),
    (616,0,'Arecibo Bajadero','PR'),
    (617,0,'Barceloneta','PR'),
    (622,0,'Cabo Rojo Boqu','PR'),
    (623,0,'Cabo Rojo','PR'),
    (624,0,'Penuelas','PR'),
    (627,0,'Camuy','PR'),
    (631,0,'Lares Castaner','PR'),
    (636,0,'San German Rosar','PR'),
    (637,0,'Sabana Grande','PR'),
    (638,0,'Ciales','PR'),
    (641,0,'Utuado','PR'),
    (646,0,'Dorado','PR'),
    (647,0, 'Guanica Ensenad','PR'),
    (650,0,'Florida','PR'),
    (652,0,'Arecibo Garrocha','PR'),
    (653,0,'Guanica','PR'),
    (656,0,'Guayanilla','PR'),
    (659,0,'Hatillo','PR'),
    (660,0,'Hormigueros','PR'),
    (662,0,'Isabela','PR'),
    (664,0,'Jayuya','PR'),
    (667,0,'Lajas','PR'),
    (669,0,'Lares','PR'),
    (670,0,'Las Marias','PR'),
    (674,0,'Manati','PR'),
    (676,0,'Moca','PR'),
    (677,0,'Rincon','PR'),
    (678,0,'Quebradillas','PR'),
    (680,0,'Mayaguez','PR'),
    (681,0,'Mayaguez P.O.','PR'),
    (682,0,'Mayaguez','PR'),
    (683,0,'San German','PR'),
    (685,0,'San Sebastian','PR'),
    (687,0,'Morovis','PR'),
    (688,0,'Arecibo Sabana H','PR'),
    (690,0,'Aguadilla San A','PR'),
    (692,0,'Vega Alta','PR'),
    (693,0,'Vega Baja','PR'),
    (694,0,'Vega Baja P.O. B','PR'),
    (698,0,'Yauco','PR'),
    (703,0,'Aguas Buenas','PR'),
    (704,0,'Guayama Aguirre','PR'),
    (705,0,'Aibonito','PR'),
    (707,0,'Maunabo','PR'),
    (714,0,'Arroyo','PR'),
    (715,0,'Ponce Mercedita','PR'),
    (716,0,'Ponce','PR'),
    (717,0,'Ponce','PR'),
    (718,0,'Naguabo','PR'),
    (719,0,'Naranjito','PR'),
    (720,0,'Orocovis','PR'),
    (721,0,'Rio Grande Palme','PR'),
    (723,0,'Patillas','PR'),
    (725,0,'Caguas','PR'),
    (726,0,'Caguas P.O. Box','PR'),
    (727,0,'Caguas','PR'),
    (728,0,'Ponce','PR'),
    (729,0,'Canovanas','PR'),
    (730,0,'Ponce','PR'),
    (731,0,'Ponce','PR'),
    (732,0,'Ponce Pmpanos','PR'),
    (733,0,'Ponce Atocha','PR'),
    (734,0,'Ponce Playa','PR'),
    (735,0,'Ceiba','PR'),
    (736,0,'Cayey','PR'),
    (737,0,'Cayey P.O. Box','PR'),
    (738,0,'Fajardo','PR'),
    (739,0,'Cidra','PR'),
    (740,0,'Fajardo Puerto R','PR'),
    (741,0,'Humacao Punta','PR'),
    (742,0,'Ceiba P.O. Box','PR'),
    (744,0,'Naguabo Rio B','PR'),
    (745,0,'Rio Grande','PR'),
    (751,0,'Salinas','PR'),
    (754,0,'San Lorenzo','PR'),
    (757,0,'Santa Isabel','PR'),
    (765,0,'Vieques','PR'),
    (766,0,'Villalba','PR'),
    (767,0,'Yabucoa','PR'),
    (769,0,'Coamo','PR'),
    (771,0,'Las Piedras','PR'),
    (772,0,'Loiza','PR'),
    (773,0,'Luquillo','PR'),
    (775,0,'Culebra','PR'),
    (777,0,'Juncos','PR'),
    (778,0,'Gurabo','PR'),
    (780,0,'Ponce Coto Lau','PR'),
    (782,0,'Comerio','PR'),
    (783,0,'Corozal','PR'),
    (784,0,'Guayama','PR'),
    (785,0,'Guayama P.O. Bo','PR'),
    (786,0,'Aibonito La Plat','PR'),
    (791,0,'Humacao','PR'),
    (792,0,'Humacao P.O.','PR'),
    (794,0,'Barranquitas','PR'),
    (795,0,'Juana Diaz','PR'),
    (901,0,'San Juan Old San','PR'),
    (902,0,'San Juan Old San','PR'),
    (906,0,'San Juan Puerta','PR'),
    (907,0,'San Juan Santurce','PR'),
    (908,0,'San Juan Santurce','PR'),
    (909,0,'San Juan Fernando','PR'),
    (910,0,'San Juan Fernando','PR'),
    (911,0,'San Juan Loiza S','PR'),
    (912,0,'San Juan Loiza S','PR'),
    (913,0,'San Juan Loiza S','PR'),
    (914,0,'San Juan Loiza S','PR'),
    (915,0,'San Juan Barrio','PR'),
    (916,0,'San Juan Barrio','PR'),
    (917,0,'San Juan Hato Rey','PR'),
    (919,0,'San Juan Hato Rey','PR'),
    (920,0,'San Juan Caparra','PR'),
    (921,0,'San Juan','PR'),
    (923,0,'San Juan 65 de I','PR'),
    (924,0,'San Juan 65 de I','PR'),
    (925,0,'San Juan Rio Piedras','PR'),
    (926,0,'San Juan Rio Piedras','PR'),
    (927,0,'San Juan Rio Piedras','PR'),
    (928,0,'San Juan Rio Piedras','PR'),
    (929,0,'San Juan 65 de I','PR'),
    (930,0,'San Juan San Jos','PR'),
    (931,0,'San Juan UPR Sta','PR'),
    (933,0,'San Juan Veteran','PR'),
    (934,0,'San Juan Fort Bu','PR'),
    (936,0,'San Juan General','PR'),
    (940,0,'San Juan Minilla','PR'),
    (949,0,'Toa Baja','PR'),
    (950,0,'Toa Baja Levitton','PR'),
    (951,0,'Toa Baja P.O. Bo','PR'),
    (952,0,'Toa Baja Sabana','PR'),
    (953,0,'Toa Alta','PR'),
    (954,0,'Toa Alta P.O. Bo','PR'),
    (956,0,'Bayamon','PR'),
    (957,0,'Bayamon','PR'),
    (958,0,'Bayamon Garden','PR'),
    (959,0,'Bayamon','PR'),
    (960,0,'Bayamon Brac','PR'),
    (961,0,'Bayamon','PR'),
    (962,0,'Catano','PR'),
    (963,0,'Catano P.O. Bo','PR'),
    (965,0,'Guaynabo','PR'),
    (966,0,'Guaynabo','PR'),
    (967,0,'Guaynabo','PR'),
    (968,0,'Guaynabo','PR'),
    (969,0,'Guaynabo','PR'),
    (970,0,'Guaynabo P.O.','PR'),
    (971,0,'Guaynabo','PR'),
    (976,0,"Trujillo Alto","PR"),
    (977,0,"Trujillo Alto P.","PR"),
    (978,0,"Trujillo Alto Sa","PR"),
    (979,0,"Carolina","PR"),
    (981,0,"Carolina P.O.","PR"),
    (982,0,"Carolina","PR"),
    (983,0,"Carolina","PR"),
    (984,0,"CarolinaP.O.","PR"),
    (985,0,"Carolina","PR"),
    (986,0,"Carolina Puebl","PR"),
    (987,0,"Carolina","PR"),
    (988,0,"Carolina Plaza","PR");


-- -----------------------------------------------------
-- *Table tblCustomers
-- -----------------------------------------------------
CREATE TABLE tblCustomers (
  intCustomersID SERIAL NOT NULL PRIMARY KEY  COMMENT 'numeric, Customers id, auto increment',
  txtCustomersFName VARCHAR(20) NOT NULL COMMENT 'alphanumeric, Customers first name',
  txtMiddleName VARCHAR(1) COMMENT 'Alphanumerical, First word of middleName',
  txtCustomersLName1 VARCHAR(20) NOT NULL COMMENT 'alphanumeric, customers first last name',
  txtCustomersLName2 VARCHAR(20) NULL COMMENT 'alphanumeric, customers second last name',
  txtPhysicalAddress VARCHAR(100) NOT NULL COMMENT 'alphanumeric, where the customers live',
  txtCity VARCHAR(20) NOT NULL COMMENT 'alphanumeric, city where the customer lives',
  intZipCode SMALLINT NOT NULL COMMENT 'numeric, customers zipCode, foreign Key',
  txtPhoneNumber VARCHAR(13) NOT NULL COMMENT 'alphanumeric, customers Phone Number',
  datMemberSince DATE NOT NULL DEFAULT CURDATE() COMMENT 'Date, date they started an account with tech on demand',
  FOREIGN KEY (intZipCode)
  REFERENCES tblZipCode(intZipCode)
);


-- -----------------------------------------------------
-- *Table tblJobs
-- -----------------------------------------------------
CREATE TABLE tblJobs (
  txtJobCodeID varchar(20) NOT NULL PRIMARY KEY  COMMENT 'Alphanumeric, job code',
  txtJobName VARCHAR(30) NOT NULL COMMENT 'alphanumeric, Name of the job'
);


-- -----------------------------------------------------
-- *Table tblEmployees
-- -----------------------------------------------------
CREATE TABLE tblEmployees (
  intEmployeeID SERIAL NOT NULL PRIMARY KEY COMMENT 'numeric, Employee id, auto increment',
  txtEmployeeFName VARCHAR(20) NOT NULL COMMENT 'alphanumeric, Employee first name',
  txtMiddleName VARCHAR(1) COMMENT 'Alphanumerical, First word of middleName',
  txtEmployeeLName1 VARCHAR(20) NOT NULL COMMENT 'alphanumeric, Employee first last name',
  txtEmployeeLName2 VARCHAR(20) NULL COMMENT 'alphanumeric, Employee second last name',
  txtGender VARCHAR(1) NOT NULL DEFAULT 'M' COMMENT 'alphanumeric, Employee gender, accepted values M, F, default value M',
  datDOB DATE NOT NULL COMMENT 'date, date of birth of Employee , yyyy-mm-dd',
  txtPhysicalAddress VARCHAR(100) NOT NULL COMMENT 'alphanumeric, where the Employee live',
  txtCity VARCHAR(20) NOT NULL COMMENT 'alphanumeric, city where the Employee lives',
  intZipCode SMALLINT NOT NULL COMMENT 'numeric, Employee zipCode, foreign Key',
  txtPhoneNumber VARCHAR(16) NOT NULL COMMENT 'alphanumeric, Employee Phone Number',
  datDateOfHired DATE NOT NULL DEFAULT NOW() COMMENT 'date, date the employee was hired',
  datDateLayof DATE NULL COMMENT 'date, date the employee was layoff',
  txtJobCodeID varchar(20) NOT NULL COMMENT 'numeric, foreign key, the job code of the employee',
  curEmployeeWage decimal(4,2) NOT NULL DEFAULT 15.00 COMMENT 'decimal, wage of t he employee',
    CONSTRAINT check_gender CHECK(txtGender = 'F' || txtGender = 'M' || txtGender = 'Other'),
    FOREIGN KEY (intZipCode)
    REFERENCES tblZipCode(intZipCode),
    FOREIGN KEY (txtJobCodeID)
    REFERENCES tblJobs (txtJobCodeID)
);


-- -----------------------------------------------------
-- *Table tblSuppliers
-- -----------------------------------------------------
CREATE TABLE tblSuppliers (
  intSuppliersID SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'numeric, Primary Key, auto increment',
  txtSuppliersName VARCHAR(45) NOT NULL COMMENT 'alphanumeric, name of the supplier',
  txtEmail varchar(100) NOT NULL COMMENT 'alphanumeric, email address of supplier',
  txtPhysicalAddress VARCHAR(100) NOT NULL COMMENT 'alphanumeric, where the supplier is located',
  txtPostalAddress VARCHAR(50) NOT NULL COMMENT 'alphanumeric, supplier postal address',
  txtCity VARCHAR(20) NOT NULL COMMENT 'alphanumeric, city where the supplier is located',
  intZipCode SMALLINT NOT NULL COMMENT 'numeric, Employee zipCode, foreign Key',
  txtPhoneNumber VARCHAR(16) NOT NULL COMMENT 'alphanumeric, supplier Phone Number',
    FOREIGN KEY (intZipCode)
    REFERENCES tblZipCode (intZipCode)
);


-- -----------------------------------------------------
-- *tblCategories
-- -----------------------------------------------------
CREATE TABLE tblCategories (
  intCategoryID SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'numeric,Primary Key, auto increment',
  txtCategoryName VARCHAR(50) NOT NULL COMMENT 'alphanumeric, name of the category'
);


-- -----------------------------------------------------
-- *Table tblProducts
-- -----------------------------------------------------
CREATE TABLE tblProducts (
  intProductsID SERIAL NOT NULL PRIMARY KEY COMMENT 'numeric, primary key, auto increment',
  txtProductName VARCHAR(150) NOT NULL COMMENT 'alphanumeric, Name of the product',
  txtProductModel VARCHAR(45) NOT NULL COMMENT 'alphanumeric, model of the product',
  intSuppliersID SMALLINT NOT NULL COMMENT 'numeric, foreign key, supplier of the product',
  txtitemDescription BLOB NOT NULL COMMENT 'alphanumeric, description of the product',
  datDateOfReleased DATE NOT NULL COMMENT 'date, date of the released of the product',
  curPrice DECIMAL(8,2) NOT NULL COMMENT 'decimal, price of the product',
  intCategoryID SMALLINT NOT NULL COMMENT 'numeric, foreign key, category of the product',
  txtPictureLoc varchar(100) DEFAULT '../pictures/notImage.jpg',
    FOREIGN KEY (intSuppliersID)
    REFERENCES tblSuppliers (intSuppliersID),
    FOREIGN KEY (intCategoryID)
    REFERENCES tblCategories (intCategoryID)
);


-- -----------------------------------------------------
-- *Table tblOrders
-- -----------------------------------------------------
CREATE TABLE  tblOrders (
  intOrderID SERIAL NOT NULL PRIMARY KEY COMMENT 'numeric, primary Key',
  datOrderDate TIMESTAMP NOT NULL DEFAULT NOW() COMMENT 'date, date and time of the order',
  intCustomersID BIGINT UNSIGNED NOT NULL COMMENT 'numeric, foreign key, customers id',
  intEmployeeID BIGINT UNSIGNED NOT NULL  COMMENT 'numeric, foreign key, employee id to know who did the transaction',
    FOREIGN KEY (intCustomersID)
    REFERENCES tblCustomers (intCustomersID),
    FOREIGN KEY (intEmployeeID)
    REFERENCES tblEmployees (intEmployeeID)
);


-- -----------------------------------------------------
-- *Table tblOrderDetails
-- -----------------------------------------------------
CREATE TABLE tblOrderDetails (
  intOrderID BIGINT UNSIGNED NOT NULL COMMENT 'numeric, foreign key, id of the order info with all the customers info',
  intProductsID BIGINT UNSIGNED NOT NULL  COMMENT 'numeric, foreign key, id of the product',
  intQuantity SMALLINT NOT NULL DEFAULT 1 COMMENT 'numeric, how many of the smae product you want',
    FOREIGN KEY (intProductsID)
    REFERENCES tblProducts (intProductsID),
    FOREIGN KEY (intOrderID)
    REFERENCES tblOrders (intOrderID)
);


-- -----------------------------------------------------
-- *Table tblSockets
-- -----------------------------------------------------
CREATE TABLE tblSockets (
  intSocketsID SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'numeric, primary key auto increment',
  txtSocket VARCHAR(15) NOT NULL COMMENT 'alphanumeric, motherboard socket.'
);


-- -----------------------------------------------------
-- *Table tblCompatability
-- -----------------------------------------------------
CREATE TABLE tblCompatability (
  intProductsID BIGINT UNSIGNED NOT NULL COMMENT 'numeric, foreign key',
  intSocketsID SMALLINT NOT NULL COMMENT 'numeric, foreign key',
    FOREIGN KEY (intProductsID)
    REFERENCES tblProducts (intProductsID),
    FOREIGN KEY (intSocketsID)
    REFERENCES tblSockets (intSocketsID)
);
-- -----------------------------------------------------
-- *Table tblComments
-- -----------------------------------------------------
CREATE TABLE tblComments(
  intCommentID int NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'numeric, id comment table, auto Increment',
  intEmployeeID BIGINT UNSIGNED NOT NULL COMMENT 'numeric, foreign key, employee id',
  txtText varchar(250) NOT NULL COMMENT 'alphanumerical, area where they are going to comment',
  datCommentTime DATETIME DEFAULT NOW() NOT NULL COMMENT 'date, date and time where the comment was added',
  FOREIGN KEY(intEmployeeID) REFERENCES tblEmployees(intEmployeeID)
);


-- -----------------------------------------------------
-- ! triggers
-- -----------------------------------------------------
DELIMITER $$
  -- -----------------------------------------------------
  -- ! Check employee date of birth
  -- -----------------------------------------------------
  CREATE TRIGGER checkEmployeeDOB
  BEFORE INSERT ON tblEmployees FOR EACH ROW
  BEGIN
      IF NEW.datDOB >= CURDATE()
    THEN
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = 'The Date of birth you added is greater or equal to today';
    ELSEIF YEAR(CURDATE()) - YEAR(NEW.datDOB) < 18
    THEN
      SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'The Employee age is lower than the required';
    END IF;
  END $$
  -- -----------------------------------------------------
  -- ! Check products availabilty
  -- -----------------------------------------------------
  CREATE TRIGGER checkProductsAvailabilty
  BEFORE INSERT ON tblOrderDetails FOR EACH ROW
  BEGIN
      IF (SELECT intStock FROM tblProducts WHERE intProductsID = NEW.intProductsID) = 0
    THEN
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = 'The Product you are selecting is out of stock';
    ELSE
      UPDATE tblProducts SET intStock = (SELECT intStock FROM tblProducts WHERE intProductsID = NEW.intProductsID) - NEW.intQuantity WHERE intProductsID = NEW.intProductsID;
    END IF;
  END $$
DELIMITER ;

-- -----------------------------------------------------
-- * Alter tblProducts
-- -----------------------------------------------------
ALTER TABLE tblProducts
  ADD intStock SMALLINT NOT NULL DEFAULT 0 COMMENT 'numeric, available stock of product';

-- -----------------------------------------------------
-- * Alter tblJobs
-- -----------------------------------------------------
ALTER TABLE tblJobs
  ADD txtTimeWork varchar(20) NOT NULL COMMENT 'Alphanumerical, if the work is full time and part time or seasonal';

-- -----------------------------------------------------
-- * Alter tblSuppliers
-- -----------------------------------------------------
ALTER TABLE tblSuppliers
  ADD txtContactPerson varchar(30) NOT NULL COMMENT 'Alphanumerical, who to contact when problem with products';

-- -----------------------------------------------------
-- * Alter tblProducts
-- -----------------------------------------------------
ALTER TABLE tblProducts
  MODIFY COLUMN txtitemDescription TEXT;

-- -----------------------------------------------------
-- * Alter tblCustomers
-- -----------------------------------------------------
ALTER TABLE tblCustomers
  ADD txtEmail varchar(64) NOT NULL COMMENT 'Alphanumerical, email address of the customer';

-- -----------------------------------------------------
-- * Alter tblEmployees
-- -----------------------------------------------------
ALTER TABLE tblEmployees
  ADD txtEmail varchar(64) NOT NULL COMMENT 'Alphanumerical, email address of the employee';

-- -----------------------------------------------------
-- ? Insert tblCategories
-- -----------------------------------------------------
INSERT INTO tblCategories(txtCategoryName) 
  values
    ('CPU'), ('Motherboards'), ('CPU Cooling Solutions'), 
    ('Graphics Card'), ('Ram'), ('Power Supplies'), ('Computer Cases'), ('Internal Storage'), 
    ('Case Fans'), ('External Storage'), ('Gaming Peripherals'), ('Battery Backup'), 
    ('Softwares'), ('Misc');
-- -----------------------------------------------------
-- ? Insert tblJobs
-- -----------------------------------------------------
INSERT INTO tblJobs (txtJobCodeID, txtJobName, txtTimeWork) 
  VALUES
    ('MGR_FT','Manager', 'Full-Time'), ('ASMGR_FT','Asistant Manager', 'Full-Time'), 
    ('SMGR_FT', 'Sales Manager', 'Full-Time'), ('Sassoc_FT', 'Sales Associate', 'Full-Time'),
    ('Sassoc_PT', 'Sales Associate', 'Part-Time'), ('INVMGR_FT', 'Inventory Manager', 'Full_Time'),
    ('Invassoc_FT', 'Inventory Associate', 'Full-Time'), ('Invassoc_PT', 'Inventory Associate', 'Part-Time');

-- -----------------------------------------------------
-- ? Insert tblSuppliers
-- -----------------------------------------------------
INSERT INTO tblSuppliers(txtSuppliersName, txtEmail, txtPhysicalAddress, txtPostalAddress, txtCity, intZipCode, txtPhoneNumber, txtContactPerson) 
  VALUES
    ('AMD', 'amdcorp@amd.com', 'Calle Israel fh-23', 'Po-Box 324', 'Yauco', 00698, '787-234-4353', 'Richard'),
    ('Intel', 'intelcorp@intel.com', 'Calle Amalia ng-16', 'Po-Box 7563', 'Cabo Rojo', 00623, '939-724-8204', 'Jefferson'),
    ('Nvidia', 'nvidiacorp@nvidia.com', 'Calle Dr.Martinez Guasp', 'Po-Box 2378', 'Mayaguez', 00682, '787-936-9725', 'Michael'),
    ('Corsair', 'corsaircorp@corsair.com', 'Calle Riollano yt-234', 'Po-Box 124', 'Aguadilla', 00603, '787-025-4000', 'Anthony'),
    ('Msi', 'msicorp@msi.com', 'Calle Scorro ht-292', 'Po-Box 13', 'Quebradillas', 00678, '939-500-3456', 'Nick'),
    ('Asus', 'asuscorp@asus.com', 'Calle A Iglesias tt-86', 'Po-Box 1235', 'Quebradillas', 00678, '787-637-8383', 'Robert'),
    ('Samsung', 'samsungcorp@sumsung.com', 'Carr Cheo Soto nj-38', 'Po-Box 237', 'Camuy', 00627, '939-947-0200', 'Jasmine'),
    ('Western Digital', 'wdcorp@wd.com', 'Calle Acueducto gb-764', 'Po-Box 2346', 'Lares', 00669, '787-900-4352', 'Marie'),
    ('G.Skill', 'gskillcorp@gkill.com', 'Calle Hipolito Santiago vf-23', 'Po-Box 12', 'Lares', 00669, '787-184-2212', 'Jasmine'),
    ('Logitech', 'logitechcorp@logi.com', 'Cll Los Colones vc-34', 'Po-Box 235', 'Arecibo', 00612, '787-253-0493', 'Lewis'),
    ('EVGA', 'evgap@evga.com', 'Calle Gregorio ee-23', 'Po-Box 123', 'Orocovis', 00720, '787-896-9734', 'Joel');


-- -----------------------------------------------------
-- ? Insert tblProducts
-- -----------------------------------------------------
INSERT INTO tblProducts(txtProductName, txtProductModel, intSuppliersID, txtitemDescription, datDateOfReleased, curPrice, intCategoryID, txtPictureLoc)
  Values
    ('Ryzen 7 5800x 4th Gen 8-core, 16-threads', '100-100000063WOF', 1, 
    'The 8 cores 16 threads optimized for high-FPS gaming rigs, Gets you the highest gaming performance With a base clock of 3.8GHz and a Max Boost Clock up to 4.7GHz making it one of the world’s best desktop processors.',
    '2020-11-5', 449.00, 1, '../images/1ryzen75800x.jpg'),

    ('Ryzen 9 5900X 4th Gen 12-core, 24-threads','100-100000061WOF', 1,
    '12 cores, 24 threads to power through gaming, streaming and more. Get the high-speed gaming performance With a base clock of 3.7GHz and a Max Boost Clock up to 4.8GHz on one of the world’s best desktop processor. A fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen processor.',
    '2020-11-05', 549.00, 1, '../images/2ryzen95900X.jpg'),

    ('Ryzen 5 5600X', '100-100000065BOX', 1, '
    Game with the Best 6 incredible cores and 12 threads for those who just want to game. Get the high-speed gaming performance With a base clock of 3.7GHz and a Max Boost Clock up to 4.8GHz on one of the world’s best desktop processor. AMD StoreMI Technology a fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen processor.',
    '2020-11-05', 299.99, 1, '../images/3ryzen55600X.jpg'),

    ('Intel - Core i9-10850K Desktop Processor - 10 Cores', 'BX8070110850K', 2, '
    The 10th Gen Intel Core i9-10850K unlocked desktop processor. Featuring Intel Turbo Boost Max Technology 3.0, The new unlocked 10th Gen Intel Core desktop processors are optimized for enthusiast gamers and serious creators to help and deliver high performance overclocking for an added boost with a Base clock of 3.60GHz and a Max Turbo Frequency 5.20GHz.',
    '2020-07-27', 469.99, 1, '../images/4i910850K.jpg'),

    ('Intel - Core i7-10700K 10th Generation 8-Cores', 'BX8070110700K', 2, '
    The 10th Gen Intel Core i7 desktop processor is the new powerfull processor from Intel with eight cores and 16 threads Hyper-Threading technology support advanced multitasking, while the base clock speeds of up to 3.1GHz and a Max Boost Clock of 5.10GHz deliver speedy responses. This unlocked Intel Core i7 desktop processor features Intel Turbo Boost Max to handle complex content creation tools.',
    '2020-04-30', 389.99, 1, '../images/5i710700K.jpg'),

    ('Intel - Core i5-10600K 10th Generation 6-Cores', 'BX8070110600K', 2, 'Set up a powerful desktop PC with this 10th Gen Intel Core i5 processor. DDR4 support and six cores provide accelerated multitasking support, while the base clock speeds of up to 4.1GHz deliver high-speed responses. This Intel Core i5 processor features Intel Turbo Boost technology for enhanced performance to handle demanding applications.',
    '2020-04-30', 279.99, 1, '../images/6i510600K.jpg'),

    ('NVIDIA GeForce RTX 3090 24GB GDDR6X PCI Express 4.0 Graphics Card', '9001G1362510000', 3, '
    The GeForce RTX 3090 is colossally powerful in every way, giving you a whole new tier of performance. It’s powered by Ampere NVIDIA’s 2nd gen RTX architecture doubling down on ray tracing and AI performance with enhanced RT Cores, Tensor Cores, and new streaming multiprocessors. Plus, it features a staggering 24 GB of G6X memory, all to deliver the ultimate gaming experience.',
    '2020-09-24', 1499.99, 4, '../images/7nvideartx3090.jpg'),

    ('NVIDIA GeForce RTX 3080 10GB GDDR6X PCI Express 4.0 Graphics Card', '9001G1332530000', 3, '
    The GeForce RTX 3080 delivers the ultra performance that gamers crave, powered by Ampere NVIDIA’s 2nd gen RTX architecture. It’s built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and superfast G6X memory for an amazing gaming experience.',
    '2020-09-17', 699.99, 4, '../images/8nvideartx3080.jpg'),

    ('NVIDIA GeForce RTX 3070 8GB GDDR6 PCI Express 4.0 Graphics Card', '9001G1422510000', 3, '
    The GeForce RTX 3070 is powered by Ampere NVIDIA’s 2nd gen RTX architecture. Built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory, it gives you the power you need to rip through the most demanding games.',
    '2020-10-29', 499.99, 4, '../images/9nvideartx3070.jpg'),

    ('NVIDIA GeForce RTX 3060 Ti 8GB GDDR6 PCI Express 4.0 Graphics Card', '900-1G142-2520-000', 3, '
    The GeForce RTX 3060 Ti lets you take on the latest games using the power of Ampere NVIDIA’s 2nd generation RTX architecture. Discover incredible performance with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory.',
    '2020-12-02', 399.99, 4, '../images/10nvideartx3060Ti.jpg'),

    ('CORSAIR - Vengeance RGB PRO 16GB (2PK 8GB) 3.2GHz PC4-25600 DDR4 DIMM Unbuffered Non-ECC Desktop Memory Kit with RGB Lighting', 'CMW16GX4M2C3200C16', 4, '
    Light up your computer with this CORSAIR Vengeance RGB PRO DDR4 RAM. It comes as two 8GB sticks so that you get 16GB to hammer through games, and each stick has RGB LEDs that glow and can be controlled from your computer. Each stick of 3200MHz CORSAIR Vengeance RGB PRO DDR4 RAM is carefully selected and screened for high overclocking potential.',
    '2019-02-07', 99.99, 5, '../images/11vengancergbpro16GB.jpg'),

    ('CORSAIR Vengeance LPX 64GB (2 x 32GB) 288-Pin DDR4 SDRAM DDR4 3000 (PC4 24000) Desktop Memory', 'CMK64GX4M2D3000C16', 4, "Corsair's Vengeance LPX DDR4 memory is designed for gamers and DIY enthusiasts seeking a compact performance memory solution. Equipped with an eight-layer PCB, highly-screened memory ICs and efficient aluminum heat spreader, Vengeance LPX DDR4 memory runs extremely fast on various motherboards and keeps high temperature at bay for superior overclocking headroom.",
    '2019-08-08', 274.99, 5, '../images/12vengancelpx64GB.jpg'),

    ('CORSAIR - VENGEANCE LPX Series 16GB (2PK 8GB) 3.2GHz DDR4 Desktop Memory - White', 'CMK16GX4M2B3200C16W', 4, 'Handle high-bandwidth overclocking demands with this 16GB CORSAIR VENGEANCE LPX memory kit. Its two 8GB modules provide high-speed operation of up to 3200MHz, and it automatically adjusts overclocking performance with its XMP 2.0 support. The DDR4 form factor of this CORSAIR VENGEANCE LPX memory kit runs efficiently with Intel X99 and 100 Series motherboards.',
    '2018-05-24', 83.99, 5, '../images/13vengancelpxSeries16GBwhite.jpg'),

    ('CORSAIR - RMx Series 850W ATX12V 2.4/EPS12V 2.92 80 Plus Gold Modular Power Supply', 'CP-9020180-NA', 4, "Build an efficient, high-performance computer with this 850W Corsair RMx power supply unit. Its industrial-grade Japanese capacitors ensure solid power delivery, and it's fully modular for flexible configuration. Set this 80 PLUS Gold-rated Corsair RMx power supply unit on zero fan mode for quiet operation during low and medium loads.",
    '2018-02-21', 144.99, 6, '../images/14rmxseries850W.jpg'),

    ('CORSAIR - RM Series 750W ATX12V 2.52/EPS12V 2.92 80 Plus Gold Modular Power Supply', 'CP-9020195-NA', 4, 'Distribute power in your computer with this Corsair RM Series 750W modular PSU. The 221 degree Fahrenheit-rated capacitors offer stable power during surges, and the Zero RPM fan mode ensures quiet performance during light tasks. This 80 PLUS Gold-certified Corsair RM Series 750W modular PSU has fully modular cables for easy installation.',
    '2020-07-31', 124.99, 6, '../images/15rmseries750W.jpg'),

    ('CORSAIR - CX-M Series 650W ATX12V 2.4/EPS12V 2.92 80 Plus Bronze Modular Power Supply', 'CX650M', 4, "Power your custom-built computer with this CORSAIR power supply. It's built for efficient operation, so it saves energy and doesn’t produce much heat, and it operates quietly at slow and medium speeds for a better work environment. The modular cable system of this CORSAIR power supply provides easy, clutter-free installation in compatible ATX desktop cases.",
    '2016-02-09', 94.99, 6, '../images/16cxmseries650W.jpg'),

    ('CORSAIR - LL Series 120mm Case Cooling Fan Kit with RGB lighting', 'CO-9050072-WW', 4, "Upgrade a desktop computer's looks and cooling with this CORSAIR LED fan set. Sixteen independent RGB LEDs allow color customization, and the specially engineered fan blades keep the heat down with minimal noise. This CORSAIR LED fan set's speed and lighting controls ensure full command of your rig's cooling performance and style.",
    '2017-10-09', 129.99, 9, '../images/17llseries120mmcasecoolingfankitrgblighting.jpg'),

    ('CORSAIR - LL Series 120mm Case Cooling Fan with RGB lighting', 'CO-9050071-WW', 4, "
    Design a cool desktop tower with this 120mm Corsair PWM fan. It has an adjustable speed of 600-1,500 rpm, and the double-loop form of its 16 RGB LEDs enable customization of lighting effects. This low-noise Corsair PWM fan is an expansion unit for the Corsair RGB Lighting hub and Lighting Node PRO system.",
    '2017-10-09', 39.99, 9, '../images/18llseries120mmcasecoolingfan.jpg'),

    ('CORSAIR iCUE H100i ELITE CAPELLIX CPU Cooler - Black', 'CW-9060046-WW', 4, 'The CORSAIR iCUE H100i ELITE CAPELLIX Liquid CPU Cooler delivers powerful, low-noise cooling for your CPU, with a 240mm radiator and two CORSAIR ML120 RGB Magnetic Levitation PWM fans controllable between 400 RPM and 2,400 RPM. 33 Ultra-bright CAPELLIX LEDs on the pump head and eight RGB LEDs per fan let you completely personalize your cooler’s look.',
    '2020-12-28', 149.99, 3, '../images/19iCUEH100iELITECAPELLIXCPUCoolerBlack.jpg'),

    ('CORSAIR iCUE H150i ELITE CAPELLIX CPU Cooler - Black', 'CW-9060048-WW', 4, 'The CORSAIR iCUE H150i ELITE CAPELLIX Liquid CPU Cooler delivers powerful, low-noise cooling for your CPU, with a 360mm radiator and three CORSAIR ML120 RGB PWM fans controllable between 400 RPM and 2,400 RPM.',
    '2020-09-22', 189.99, 3, '../images/20iCUEH150iELITECAPELLIXCPUCoolerBlack.jpg'),

    ('CORSAIR - Hydro Series 120mm Radiator CPU Liquid Cooling System - Black', 'H60', 4 , "Prevent your computer from overheating with this Corsair Hydro Series liquid CPU cooler. A micro-fin copper cold plate removes heat quickly, and the advanced fan design reduces noise for quiet operation. This Corsair Hydro Series liquid CPU cooler comes prefilled and never needs to be refilled for convenient, long-lasting cooling.",
    '2018-10-07', 79.99, 3, '../images/21Hydro Series120mmRadiatorCPULiquid CoolingSystemBlack.jpg'),

    ('MSI - MPG Z490 GAMING EDGE WIFI (Socket LGA1200) USB-C Gen1 Intel Motherboard with LED Lighting', 'MPG Z490 GAMING EDGE WIFI', 5, 'Set up a high-performance desktop PC with this MSI MPG Z490 Gaming Edge ATX motherboard. The two-way AMD Crossfire graphics support the use of multiple graphics cards, while the premium thermal solution helps keep your devices cool. This MSI MPG Z490 Gaming Edge ATX motherboard features Core Boost technology and DDR4 Boost to unleash maximum performance.',
    '2020-04-23', 199.99, 2, '../images/22MSIMPGZ490GAMINGEDGEWIFISocketLGA1200.jpg'),

    ('MSI - MPG X570 GAMING EDGE WIFI (Socket AM4) USB-C Gen2 AMD Motherboard', 'MPG X570 GAMING EDGE WIFI', 5, "Build a powerful PC with this MSI MPG X570 Gaming Edge motherboard. The AM4 socket handles second-generation and third-generation AMD Ryzen processors for smooth gaming performance, while DDR4 Boost supports RAM overclocking and rapid data transfer. This MSI MPG X570 Gaming Edge motherboard features a PCIe 4.0 interface for high-end graphics cards and SSDs.",
    '2019-07-07', 209.99 , 2, '../images/23MPGX570GAMINGEDGEWIFISocketAM4.jpg'),

    ('MSI B550 GAMING PLUS (Socket AM4) USB-C Gen 2 AMD ATX GAMING Motherboard PCIE Gen 4 - Black', 'MAG B550 TOMAHAWK', 5, 'The MAG series was born through rigorous quality testing and designed to be a symbol of sturdiness and durability. Focused on providing the best user experience, the MAG series has a simple installation process coupled with a friendly user interface making it the best choice for entry level gamers.',
    '2020-06-16', 149.99, 2, '../images/24MSIB550GAMINGPLUSSocketAM4.jpg'),

    ('CORSAIR - iCUE 220T RGB Airflow ATX Mid-Tower Smart Case - Black', 'CC-9011173-WW', 4, 'Build your next PC with the corsair iCUE 220T mid-tower ATX smartcase, with high airflow and three already included 120mm RGB fans and easy to access fan filters, make this the perfect choice',
    '2019-07-17', 114.99, 7, '../images/25iCUE220TRGBAirflowATXMidTowerSmartCaseBlack.jpg'),

    ('Samsung 970 EVO NVMe M.2 SSD 1TB', 'MZ-V7E1T0BW', 7, 'Feel the NVMe difference. The 970 EVO transforms high-end gaming and streamlines graphic-intensive workflows with the new Phoenix controller and Intelligent TurboWrite technology. Get stunning sequential read/write speeds of 3,500/2,500 MB/s*, up to 32% faster writes than the previous generation.',
    '2018-05-05', 169.99, 8, '../images/26Samsung970EVONVMeM2SSD1TB.jpg'),

    ('Samsung SSD 860 EVO 1TB 2.5 Inch SATA III Internal SSD', 'MZ-76E1T0B/AM', 7, 'Speeds are consistent, even under heavy workloads and multi-tasking allowing for faster file transfer. The 860 EVO performs at sequential read speeds up to 550 MB/s* with Intelligent TurboWrite technology, and sequential write speeds up to 520 MB/s. The TurboWrite buffer size* is upgraded from 12 GB to 78 GB.',
    '2018-01-22', 99.99, 8, '../images/27SamsungSSD860EVO1TB25InchSATAIIIInternalSSD.jpg'),

    ('Western Digital 1TB WD Blue PC Hard Drive - 7200 RPM Class, SATA 6 Gb/s, 64 MB Cache', 'WD10EZEX', 8, 'Boost your PC storage with 1TB WD Blue drive, the brand designed just for desktop and all-in-one PCs with a variety of storage capacities. Perfect to store photos, videos, documents, and others. ',
    '2012-06-04', 44.69, 8, '../images/28WesternDigital1TBWDBluePCHardDrive.jpg'),

    ('Western Digital 4TB WD Blue PC Hard Drive - 5400 RPM Class, SATA 6 Gb/s, 64 MB Cache', 'WD40EZRZ', 7, 'Boost your PC storage with 4TB of WD Blue dirve, capable of holding thousands of photos, videos, documents and more.',
    '2015-08-21', 89.89, 8, '../images/29WesternDigital4TBWDBluePCHardDrive.jpg'),

    ('CORSAIR - XTM50 High Performance Thermal Paste Kit - Gray', 'CT-9010002-WW', 4, 'Help prevent components from overheating with this CORSAIR high performance thermal paste kit. The syringe design makes application simple. This CORSAIR high-performance thermal paste kit has ultralow thermal impedance for effective cooling, and there are 5 grams for thoroughly covering several surfaces.',
    '2019-08-01', 14.99, 3, '../images/30CORSAIRXTM50.jpg' ),

    ('ROG Strix Helios White Edition', 'GX601', 6, 'premium mid-tower gaming case with three tempered glass panels, a silver-white aluminum frame and integrated front-panel RGB lighting. Built-in cable management, including a multifunction cover with GPU braces, keeps the interior sharp and tidy. Engineered for expandability and performance, its ready for an up to EATX motherboard and serious water-cooling setup.',
    '2020-10-29', 252.99, 7, '../images/31rogStrixHeliosWEdition.jpg');



-- -----------------------------------------------------
-- ? Insert tblSockets
-- -----------------------------------------------------
INSERT INTO tblSockets(txtSocket) 
  VALUES
    ('AM4'),('LGA1200');

-- -----------------------------------------------------
-- ? Insert tblEmployees
-- -----------------------------------------------------
INSERT INTO tblEmployees(txtEmployeeFName, txtMiddleName, txtEmployeeLName1, txtEmployeeLName2, txtGender, datDOB, txtPhysicalAddress, txtCity, intZipCode, txtPhoneNumber, txtEmail, datDateOfHired, txtJobCodeID)
  VALUES
    ('Luis', 'M', 'Rodriguez', 'Santiago', 'M', '1978-10-11', 'Urb Levittown, Calle Lydia', 'Toa Baja', 00949, '7317111675', 'lrodriguezsantiago@gmail.com', '2019-01-19', 'MGR_FT'),
    ('Jose', 'A', 'Garcia', 'Ortiz', 'M', '1981-01-23', 'Urb Levittown, Calle Dr Fransisco Trelles', 'Toa Baja', 00949, '4959357706', 'josegarciao15@gmail.com', '2019-02-01', 'ASMGR_FT'),
    ('Cristina', 'A', 'Figueroa', 'Hernandez', 'F', '1985-02-21', 'Calle Ceferino Barbosa 660', 'Dorado', 00646, '5408355585', 'cristifigueroa@hotmail.com', '2019-02-01', 'SMGR_FT'),
    ('Millie', 'D', 'Hernandez', ' Garcia', 'F', '1980-05-06', 'Calle Giresel 234', 'Barceloneta', 00617, '592783810', 'millieherngar@gmail.com', '2019-02-1', 'Sassoc_FT'),
    ('Natalia', 'A', 'Glover', 'Figueroa', 'F', '1976-09-10', 'Calle Valle Arena 10', 'Toa Alta', 00953, '6799347347', 'nataliaglover52@yahoo.com', '2019-02-1', 'INVMGR_FT'),
    ('Jodie', 'E', 'Grimes', 'Stark', 'F', '1990-12-11', 'Calle Loma Linda h23', 'Corozal', 00783, '3026376094', 'grimestarkJ@gmail.com', '2019-03-20', 'Sassoc_PT'),
    ('Nico', 'E', 'Walker', 'Metz', 'M', '1981-05-17', 'Calle Alpierre 14', 'Guaynabo', 00969, '7156954473', 'wmnico42@outlook.com', '2019-03-20', 'Invassoc_FT'),
    ('Drew', 'O', 'Maldonado', 'figueroa', 'M', '1960-04-20', 'Bahringer Lakes 23', 'Dorado', 00646, '2324064657', 'maldonadodrew253@gmail.com', '2019-05-05', 'Sassoc_FT'),
    ('Gabriel', 'A', 'Gonzalez', 'Rosado', 'M', '1997-03-27', 'Tressie Rapid Road 32', 'San Juan', 00901, '6039921032', 'gabrielagr@icloud.com', '2019-05-28', 'Sassoc_PT'),
    ('Juan', 'E', 'Colon', 'Santiago', 'M', '1994-08-20', 'Calle Aurora 23', 'San Juan', 00907, '4015169816', 'juanecs@gmail.com', '2020-01-10', 'Invassoc_PT');


-- -----------------------------------------------------
-- ? Insert tblCustomers
-- -----------------------------------------------------
INSERT INTO tblCustomers(txtCustomersFName, txtMiddleName, txtCustomersLName1, txtCustomersLName2, txtPhysicalAddress, txtCity, intZipCode, txtPhoneNumber, txtEmail, datMemberSince)
  VALUES
    ('Matthew', 'A', 'Rodriguez', 'Robel', 'Calle Joaquin Burset t43', 'Toa Baja', 00949, '2327650861', 'mattrodriguezrobel@gmail.com', '2019-02-01'),
    ('Angel', 'A', 'Garcia', 'Hernandez', 'Calle Antonio R. Barcelo 23', 'Catano', 00969, '5755302743', 'ghangel32@outlook.com', '2019-02-01'),
    ('Michael', 'E', 'Santiago', 'Maldonado', 'Calle Pepe Diaz 215', 'San Juan', 00917, '7457090407', 'msantiago392@gmail.com', '2019-02-03'),
    ('Carla', NULL , 'Cruz', 'Gonzalez', 'Calle Ulises Ortiz 1051', 'Corolina', 00985, '3135916334', 'cruzgcarla@yahoo.com', '2019-03-24'),
    ('Adrian', NULL, 'Figueroa', 'Gutierrez', 'Calle dos Hermanos g43', 'Santurce', 00907, '6072036165', 'adrian.figueroa234@hotmail.com', '2019-03-24'),
    ('Geraldo', 'F', 'Gutierrez', 'Garcia', 'Calle Las Villas j23', 'Bayamon', 00957, '7529296881', 'ggutierrezgarcia@outlook.com', '2019-03-24'),
    ('Felix', 'A', 'Klein', 'Gonzalez', 'Calle Roman C Diaz 39', 'Aguas Buenas', 00725, '5254064519', 'felixkg421@gmail.com', '2019-03-24'),
    ('Luz', 'L', 'Maldonado', 'Ortiz', 'Calle Cardona 23', 'Aguadilla', 00603, '9844096525', 'lmaldonadoortiz@yahoo.com', '2019-05-20'),
    ('Alyssa', NULL, 'Fisher', 'Reichel', 'Calle Ceferino Barbosa h643', 'Dorado', 00646, '8489576109', 'afisherreichel@outlook.com', '2019-05-20'),
    ('Kevin', 'A', 'Rodriguez', 'Pintor', 'Calle Lydia W 23', 'Toa Baja', 00949, '4485161520', 'kevinrp@gmail.com', '2019-06-26'),
    ('Erika', 'I', 'Eminet', 'Rosado', 'Calle Virgilio Davila kt23', 'Toa Baja', 00949, '4025123992', 'e.eminetrosado@gmail.com', '2019-08-10'),
    ('Osvaldo', 'A', 'Rosado', 'garcia', 'Paseo Criolla j2', 'Toa Baja', 00949, '4475880736', 'osvaldo_rg23@outlook.com', '2019-08-15'),
    ('Ricardo', 'E', 'Gonzalez', 'Maldonado', 'Calle Dr Sanders y66', 'Canovanas', 00729, '6267169753', 'rgm389@yahoo.com', '2019-09-20'),
    ('Alondra', 'A', 'Toledo', 'Cruz', 'Calle Luis de Celis 210', 'Fajardo', 00738, '3836635414', 'alotolecru@gmail.com', '2020-01-02'),
    ('Jonathan', 'E', 'Pagan', 'Merced', 'Calle Tous Soto t32', 'San Lorenzo', 00754, '6764631013', 'jpagmer@outlook.com', '2020-01-05'),
    ('Naomi', NULL, 'Perez', 'Ortiz', 'Calle Rio Ingenio t11', 'Bayamon', 00961, '9796454645', 'naopeortz@icloud.com', '2020-01-05');
-- -----------------------------------------------------
-- ? UPDATE tblproducts
-- -----------------------------------------------------
  update tblProducts SET intStock = 10 WHERE intProductsID = 1;
  update tblProducts SET intStock = 6 WHERE intProductsID = 2;
  update tblProducts SET intStock = 2 WHERE intProductsID = 3;
  update tblProducts SET intStock = 11 WHERE intProductsID = 4;
  update tblProducts SET intStock = 15 WHERE intProductsID = 6;
  update tblProducts SET intStock = 4 WHERE intProductsID = 7;
  update tblProducts SET intStock = 19 WHERE intProductsID = 8;
  update tblProducts SET intStock = 9 WHERE intProductsID = 9;
  update tblProducts SET intStock = 3 WHERE intProductsID = 10;
  update tblProducts SET intStock = 23 WHERE intProductsID = 11;
  update tblProducts SET intStock = 6 WHERE intProductsID = 12;
  update tblProducts SET intStock = 6 WHERE intProductsID = 14;
  update tblProducts SET intStock = 13 WHERE intProductsID = 15;
  update tblProducts SET intStock = 7 WHERE intProductsID = 16;
  update tblProducts SET intStock = 14 WHERE intProductsID = 17;
  update tblProducts SET intStock = 1 WHERE intProductsID = 18;
  update tblProducts SET intStock = 3 WHERE intProductsID = 19;
  update tblProducts SET intStock = 6 WHERE intProductsID = 20;
  update tblProducts SET intStock = 4 WHERE intProductsID = 21;
  update tblProducts SET intStock = 13 WHERE intProductsID = 22;
  update tblProducts SET intStock = 6 WHERE intProductsID = 23;
  update tblProducts SET intStock = 1 WHERE intProductsID = 24;
  update tblProducts SET intStock = 8 WHERE intProductsID = 25;
  update tblProducts SET intStock = 16 WHERE intProductsID = 26;
  update tblProducts SET intStock = 10 WHERE intProductsID = 27;
  update tblProducts SET intStock = 7 WHERE intProductsID = 28;
  update tblProducts SET intStock = 2 WHERE intProductsID = 29;
-- -----------------------------------------------------
-- ? Insert tblOrders
-- -----------------------------------------------------
INSERT INTO tblOrders(intCustomersID, intEmployeeID, datOrderDate)
  VALUES
    (1, 1, '2019-02-01 10:52:32'), (2, 4, '2019-02-01 12:10:10'),
    (1, 4, '2019-02-01 16:09:20'), (3, 4, '2019-02-03 10:31:01'),
    (2, 2, '2019-02-03 11:24:21'), (4, 6, '2019-03-24 13:22:17'),
    (5, 6, '2019-03-24 13:43:25'), (6, 6, '2019-03-24 15:04:12'),
    (5, 4, '2019-03-24 15:32:12'), (7, 4, '2019-03-24 17:08:50'),
    (1, 3, '2019-03-24 18:12:05'), (2, 6, '2019-04-10 10:10:10'),
    (3, 4, '2019-04-10 10:31:27'), (7, 3, '2019-04-29 12:47:41'),
    (4, 6, '2019-05-06 13:16:32'), (2, 3, '2019-05-06 13:55:10'),
    (8, 6, '2019-05-20 15:16:45'), (9, 3, '2019-05-20 17:23:33');
-- -----------------------------------------------------
-- ? Insert tblOrderDetails
-- -----------------------------------------------------
INSERT INTO tblOrderDetails(intOrderID, intProductsID, intQuantity)
  VALUES
    (1, 2, 1), (1,7,1), (2, 3, 1), (3, 11, 1), (4, 2, 1),
    (4, 23, 1), (4, 19, 1), (4, 12, 1), (4, 14, 1), (4, 8, 1),
    (5, 17, 1), (5, 26, 1), (6, 25,1), (7, 3, 1), (7, 24, 1),
    (7, 11, 1), (8, 12, 2), (9, 15, 1), (10, 10, 1), (11, 26, 1),
    (12, 15, 1), (13, 27, 2), (14, 14, 1), (15, 17, 1), (15, 21, 1),
    (16, 9, 1), (17, 4, 1), (17, 7, 1), (17, 12, 2), (17, 14, 1),
    (17, 19, 1), (17, 22, 1), (17, 25, 1), (17, 26, 2), (17, 27, 2),
    (18, 29, 2);
-- -----------------------------------------------------
-- ? Insert tblCompatability 1AM4 2LGA1200
-- -----------------------------------------------------
INSERT INTO tblCompatability(intProductsID, intSocketsID)
  VALUES
    (1, 1), (2, 1), (3, 1), (4, 2), (5, 2), (6, 2), (11, 2), (11, 1),
    (12, 1), (12, 2), (13, 1), (13, 2), (19, 1), (19, 2), (20, 1), (20, 2),
    (21, 1), (21, 2), (22, 2), (23, 1), (24, 1);

-- -----------------------------------------------------
-- ? Insert tblComments
-- -----------------------------------------------------
insert INTO tblComments(intEmployeeID, txtText, datCommentTime)
  VALUES
    (1, 'Check the order status', "2021-01-03 10:30:32"), (1, 'Customer name Gerardo(6) have item sku: 4 on hold, will be passing feb-4', "2021-01-03 16:01:10"),
    (3, 'There will be a call tomorrow with amd supplier around 12pm', "2021-01-10 12:11:02"), (1,'The supplier called, it was to verify how many ryzen cpu we have in stock', "2021-01-11 13:11:02"),
    (5, 'We are recieving shipment the 20 of jan of new graphics cards', "2021-01-15 17:37:44"), (1, 'Meeting tomorrow at 9am about sales and future recruits', "2021-02-01 10:10:26"),
    (2, 'Customer by the name of Rose will be coming later this week to pick up order 19', "2021-02-01 13:10:43"), (1, 'Customer Rose arrived and pick up her order', "2021-02-04 11:25:23"),
    (5, 'Customer by the name of Alexander left the store agitated because of a item we didnt have be aware', "2021-02-05 14:12:09"), (1, 'Tomorrow we gotta try and work with orders, we a bit behind', "2021-02-06 11:02:46");

-- -----------------------------------------------------
-- ! STORE PROCEDURES
-- -----------------------------------------------------
DELIMITER $$
  -- -----------------------------------------------------
  -- ? SALES PROCEDURES
  -- -----------------------------------------------------
  CREATE PROCEDURE sale()
    BEGIN
      START TRANSACTION;
        INSERT INTO tblOrders(intCustomersID, intEmployeeID) 
          VALUES (customersID, employeeID);
        INSERT INTO tblOrderDetails(intOrderID, intProductsID, intQuantity)
          VALUES (LAST_INSERT_ID(), productID, quantity);
      COMMIT;
    END $$
  -- -----------------------------------------------------
  -- ? STOCK PROCEDURES
  -- -----------------------------------------------------
  CREATE PROCEDURE updateStock()
    BEGIN
      UPDATE tblProducts SET intStock = quantity WHERE intProductsID = productID;
    END $$
  -- -----------------------------------------------------
  -- ? Customer Purchase History PROCEDURES
  -- -----------------------------------------------------
  CREATE PROCEDURE customersPurchaseHistory()
    BEGIN
      SELECT SKU, Name, Price, Quantity FROM customersPurchases
      WHERE OrderID = ID;
    END $$
  -- -----------------------------------------------------
  -- ? Search for Product PROCEDURES
  -- -----------------------------------------------------
  CREATE PROCEDURE searchProduct()
    BEGIN
      SELECT * FROM products 
      WHERE Name LIKE CONCAT('%',nameOfProduct, '%');
    END $$
DELIMITER ;

-- -----------------------------------------------------
-- * salesReciept VIEW
-- -----------------------------------------------------
  CREATE VIEW salesReciept
    AS
      SELECT 
        tblOrders.intOrderID AS 'OrdersID', 
        tblOrders.datOrderDate AS 'OrderDate', 
        tblCustomers.txtCustomersFName AS 'CustomersFirstName', 
        tblCustomers.intCustomersID AS 'CustomersID', sum(tblProducts.curPrice * intQuantity) AS 'SubTotal', 
        TRUNCATE(sum(tblProducts.curPrice * intQuantity) * 0.115 + sum(tblProducts.curPrice * intQuantity), 2) AS 'Total'
      FROM tblOrderDetails
      JOIN tblOrders
      ON tblOrderDetails.intOrderID = tblOrders.intOrderID
      LEFT JOIN tblProducts
      ON tblOrderDetails.intProductsID = tblProducts.intProductsID
      JOIN tblCustomers
      ON tblOrders.intCustomersID = tblCustomers.intCustomersID
      GROUP BY tblOrders.intOrderID;
-- -----------------------------------------------------
-- * Products VIEW
-- -----------------------------------------------------
  CREATE VIEW products
    AS
      SELECT
        intProductsID AS 'SKU',
        tblProducts.txtProductName AS 'Name',
        tblSuppliers.txtSuppliersName AS 'Company',
        tblProducts.txtProductModel AS 'Model',
        tblCategories.txtCategoryName AS 'Category',
        tblProducts.txtitemDescription AS 'Description',
        tblProducts.curPrice AS 'Price',
        tblProducts.datDateOfReleased AS 'Release Date',
        tblProducts.txtPictureLoc AS 'Picture',
        Case
          WHEN intStock = 0 
            THEN '0 Out Of Stock'
          ELSE CONCAT(intStock,' ', 'In Stock')
        END AS 'Stock'
      FROM tblProducts
      INNER JOIN tblSuppliers
      ON tblProducts.intSuppliersID = tblSuppliers.intSuppliersID
      JOIN tblCategories
      ON tblProducts.intCategoryID = tblCategories.intCategoryID
      ORDER BY intProductsID;
-- -----------------------------------------------------
-- * Customers Purchases VIEW
-- -----------------------------------------------------
  CREATE VIEW customersPurchases
    AS
      SELECT
        tblOrders.intOrderID AS 'OrderID',
        tblProducts.intProductsID AS 'SKU',
        tblProducts.txtProductName AS 'Name',
        tblProducts.curPrice AS 'Price',
        tblOrderDetails.intQuantity AS 'Quantity'
      FROM tblOrders
      JOIN tblOrderDetails
      ON tblOrders.intOrderID = tblOrderDetails.intOrderID
      JOIN tblProducts
      ON tblOrderDetails.intProductsID = tblProducts.intProductsID;
-- -----------------------------------------------------
-- * Customers Employee Sales Performance VIEW
-- ----------------------------------------------------- 
CREATE VIEW salesEmpPerformance
  AS
    SELECT
      tblOrders.intEmployeeID AS 'EmployeeID',
      CONCAT(tblEmployees.txtEmployeeFName, " ", tblEmployees.txtEmployeeLName1) AS 'EmployeeName',
      TRUNCATE(AVG(tblProducts.curPrice), 2) AS 'AverageSalesPrice', 
      sum(tblProducts.curPrice * tblOrderDetails.intQuantity) AS 'TotalEarnings'
    FROM tblOrders
    JOIN tblEmployees
    ON tblOrders.intEmployeeID = tblEmployees.intEmployeeID
    JOIN tblOrderDetails
    ON tblOrders.intOrderID = tblOrderDetails.intOrderID
    JOIN tblProducts
    ON tblOrderDetails.intProductsID = tblProducts.intProductsID
    WHERE tblEmployees.txtJobCodeID = "Sassoc_FT" || tblEmployees.txtJobCodeID = "Sassoc_PT"
    GROUP BY tblOrders.intEmployeeID
    ORDER BY TotalEarnings DESC;
-- -----------------------------------------------------
-- * Employees info VIEW
-- ----------------------------------------------------- 
CREATE VIEW employeesInfo
  AS
    SELECT
      intEmployeeID AS 'EmployeeID',
      CONCAT(txtEmployeeFName, " ", txtMiddleName, " ", txtEmployeeLName1, " ", txtEmployeeLName2) AS 'FullName',
      txtPhoneNumber AS 'PhoneNumber',
      txtEmail AS 'Email',
      tblJobs.txtJobName AS 'JobPosition',
      txtPhysicalAddress AS 'PhysicalAddress',
      txtCity AS 'City',
      intZipCode AS 'Zipcode',
      Case
        WHEN datDateLayof IS NULL
          THEN "Active"
        ELSE "Inactive"
      END AS 'Status'
    FROM tblEmployees
    JOIN tblJobs
    ON tblEmployees.txtJobCodeID = tblJobs.txtJobCodeID
    ORDER BY EmployeeID ASC;

-- -----------------------------------------------------
-- * comments view
-- ----------------------------------------------------- 
CREATE VIEW comments
  AS
    SELECT tblComments.intCommentID AS 'CommentID', tblComments.intEmployeeID AS 'EmployeeID', tblEmployees.txtEmployeeFName AS 'fName', DATE_FORMAT(datCommentTime, '%b-%d %h:%i%P') AS 'DateHour', txtText AS 'Comment'  FROM tblComments
    JOIN tblEmployees
    ON tblComments.intEmployeeID = tblEmployees.intEmployeeID
    ORDER BY DateHour;
-- -----------------------------------------------------
-- * Year To Date Revenue
-- ----------------------------------------------------- 
SELECT YEAR(`OrderDate`) AS 'Year', SUM(`SubTotal`) AS 'Total' FROM salesreciept GROUP BY YEAR(`OrderDate`) ORDER BY YEAR DESC LIMIT 5;
-- -----------------------------------------------------
-- * Avg sale price of a transaction
-- ----------------------------------------------------- 
SELECT TRUNCATE(AVG(SubTotal), 2) AS 'AverageSalesPrice' FROM `salesreciept`;
-- -----------------------------------------------------
-- * Avg items per transaction
-- ----------------------------------------------------- 
SELECT TRUNCATE(avg(itemsPerTrans), 2) AS 'AVGItemsPerTrans' FROM (SELECT count(OrderID) AS 'itemsPerTrans' FROM customerspurchases GROUP BY OrderID) customerspurchases;
-- -----------------------------------------------------
-- ? UPDATE tblproducts
-- -----------------------------------------------------
update tblProducts SET intStock = 19 WHERE intProductsID = 24;
update tblProducts SET intStock = 11 WHERE intProductsID = 18;
update tblProducts SET intStock = 9 WHERE intProductsID = 13;
update tblProducts SET intStock = 4 WHERE intProductsID = 5;
update tblProducts SET intStock = 31 WHERE intProductsID = 30;
update tblProducts SET intStock = 5 WHERE intProductsID = 31;

-- -----------------------------------------------------
-- ? Insert tblOrders
-- -----------------------------------------------------
INSERT INTO tblOrders(intCustomersID, intEmployeeID, datOrderDate)
  VALUES
    (14, 8, "2020-01-05 10:45:25"), (7, 9, "2020-01-05 15:23:43"), (15, 8, "2020-02-15 11:45:23"),
    (14, 6, "2020-02-15 13:02:21"), (16, 9, "2020-02-27 16:43:23"), (2, 4, "2020-11-27 16:43:23"),
    (1, 8, "2021-01-10 10:55:35"), (13, 9, "2021-01-16 14:23:54"), (16, 4, "2021-02-05 14:23:54");

-- -----------------------------------------------------
-- ? Insert tblOrderDetails
-- -----------------------------------------------------
INSERT INTO tblOrderDetails(intOrderID, intProductsID, intQuantity)
  VALUES
    (19, 1, 2), (19, 24, 2), (19, 13, 2), (20, 25, 1), (20, 20, 1), (21, 5, 1), (21, 13, 1),
    (21, 22, 1), (21, 8, 1), (22, 26, 2), (23, 21, 1), (23, 17, 2), (24, 30, 1), 
    (25, 30, 1), (25, 1, 1), (25, 24, 1), (25, 14, 1), (25, 12, 1), (25, 9, 1),
    (26, 28, 1), (26, 26, 1), (27, 2, 1), (27, 23, 1), (27, 26, 1), (27, 19, 1), (27, 14, 1), (27, 8, 1),
    (27, 13, 1), (27, 31, 1);