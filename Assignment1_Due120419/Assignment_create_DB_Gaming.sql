-- Make sure run this if you change PC
drop database if exists BCPR294_Gaming;
-- Create database called BCPR294_Gaming
create database BCPR294_Gaming;

-- using database called BCPR294_Gaming for future reference
use BCPR294_Gaming;

-- Normal table
-- It seems User is already taken as came up blue, replace to Users
create table Users(
userName varchar(20) NOT NULL PRIMARY KEY,
userPassword varchar(50) NOT NULL,
firstName varchar(25) NOT NULL,
lastName varchar(25) NOT NULL,
userDOB date,
userEmail varchar(255) 
)engine = InnoDB;

create table Post(
postNum INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
postTitle varchar(255),
postContent MEDIUMTEXT,
postDate date,
noOfLikes INT,
userName varchar(20),
foreign key (userName) references Users (userName)
)engine = InnoDB;

-- Backup purpose with trigger
create table BackupPost(
postTitle varchar(255),
postContent MEDIUMTEXT,
postDate date,
userName varchar(20)
)engine = InnoDB;