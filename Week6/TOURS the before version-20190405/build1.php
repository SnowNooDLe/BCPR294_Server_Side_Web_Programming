<?php

require_once ("MySQLDB.php");
include ("myFunctions.php");

$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'tours';


// create a new empty database 
$db = new MySQL($host , $dbUser , $dbPass , $dbName );
$db->createDatabase();
$db->selectDatabase();

$sql = "drop table tour";
$result = $db->query($sql);

$sql = "drop table customer";
$result = $db->query($sql);

$sql = "drop table Booking";
$result = $db->query($sql);




// create tables
$table="Tour";
$sql = "create table tour ( tourCode  char(3) not null ,
                            tourName varchar(50),
							introduction  text,
							primary key(tourCode) 
						   )"  ;
$db->createTable($table, $sql);


$table="Customer";
$sql = "create table customer (	customerNo  integer not null ,
                                firstname varchar(30),
								surname varchar(30),
								
								primary key(customerNo) 
							   )"  ;
$db->createTable($table, $sql);

$table="Booking";
$sql = "create table Booking ( 	bookingNo integer not null auto_increment ,
								tourCode char(3),
								customerNo integer,
								month smallint,
								deposit decimal(6,2),
								
                                primary key(bookingNo) 
							)"  ;
$db->createTable($table, $sql);

// insert data
$sql = "insert into tour values ( 'ITC','Inca Trail Classic','This is the classic four-day trek along the Inca trail to Machu Picchu.
This magnificent hike is for travelers who are in condition to hike up to ten hours, with breaks, in a single day. 
The pace may be daunting for some, but the beauty and history of the area surround the hiker every step of the way. 
On the last morning we arrive at Machu Picchu with plenty of time to explore the ruins before returning to Cusco by train. ' )";
$db->insertRow($sql);


$sql = "insert into tour values ( 'MDT','Megadiversity Tour',
'Birding the Andes and famous Machu Picchu ruins and environs, plus all altitudes of the Manu area with a list of almost 1,000 species (10% of the global total). 
THE birding trip by excellence.')";
$db->insertRow($sql);

$sql = "insert into tour values ( 'WWM','The Weavers’ Way to Machu Picchu','The Cordillera Urubamba in southern Peru is the last great range of snowcapped mountains before the eastern slope of the Andes falls away to the Amazon basin. 
Tucked behind this 40-mile chain of 18,000 ft.-plus peaks lies a region of high altitude valleys. 
Here the Quechua people maintain an ancient way of life, herding alpacas and llamas, farming the Andean slopes, and practicing a tradition inherited from their Inca ancestors: the making and wearing of superb textiles.

This short trek begins at the eastern end of this mountain chain, at the colonial village of Lares, with its delightful hot springs baths, and ends with a road journey to the famous “living Inca settlement” of Ollantaytambo. 
In between we follow a hiking route that skirts the northern slope of the Cordillera, crossing one high pass. 
We encounter villages where the colorful ponchos of the men vie for attention with the exquisite “manta” shoulder garments of the women, and each wear a distinctive local headgear that announces their origin from this part of Peru. 
The villagers along the way are generally friendly and welcoming, and some will offer to sell you their excellent weavings.' )";
$db->insertRow($sql);

$sql = "insert into tour values ( 'TAM','Tambopata National Reserve','Three extraordinary, contiguous Amazon reserves lie only a 25-minute flight from Cusco - the great Tambopata Madidi Wilderness on the Peru-Bolivia border. 
Taken together, these parks are two-thirds the size of Costa Rica and protect the most species-rich natural habitats in the world (January 1994 and March 2000 cover stories, National Geographic Magazine). 
No other company can offer you as much wildlife viewing in the greater Tambopata-Madidi region.')";
$db->insertRow($sql);
 


$sql = "insert into customer values ( 1850,'Nick', 'Willis' )"  ;
$db->insertRow($sql);


$sql = "insert into customer values ( 1217,'Nathan', 'Brannen' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1040,'Mark', 'Fountain' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1844,'Paul', 'Hamblyn' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1346,'Nick', 'McCormick' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1618,'Ismael', 'Kombich' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values (1231,'Kevin', 'Sullivan' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1068,'Jeremy', 'Roff' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1058,'Craig', 'Mottram' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1838,'Adrian', 'Blincoe' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1619,'Jonathan', 'Komen' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1319,'Andrew', 'Baddeley' )"  ;
$db->insertRow($sql);

$sql =  "insert into customer values ( 2151,'Dorcus', 'Inzikuru' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1125,'Melissa', 'Rollison')"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1106,'Donna', 'McFarlane' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1113,'Victoria', 'Mitchell' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1860,'Kate', 'McIlroy' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1643,'Jeruto', 'Kiptum' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1368,'Joanna', 'Ankier')"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1370,'Tina', 'Brown' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1583,'Madrea', 'Hyman' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1941,'Tebogo', 'Masehla' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1550,'Omar', 'Brown' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1740,'Stephan', 'Buckland' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1570,'Chris', 'Williams' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1048,'Patrick', 'Johnson' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 2121,'Aaron', 'Armstrong' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1774,'Uchenna', 'Emedolu')"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1786,'Enefiok', 'Udo-Obong' )"  ;
$db->insertRow($sql);

$sql = "insert into customer values ( 1840,'James', 'Dolphin' )"  ;
$db->insertRow($sql);


?> 
<br><br>

<a href="mainA.php">Return to main menu</a>
