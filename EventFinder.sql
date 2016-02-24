CREATE DATABASE EventFinder;

USE EventFinder

CREATE TABLE User (
UserId INT NOT NULL AUTO_INCREMENT,
UserName VARCHAR(500) character set utf8 NOT NULL,
PassWord VARCHAR(500) character set utf8 NOT NULL,
Email VARCHAR(500) character set utf8 NOT NULL,
Name VARCHAR(500) character set utf8 NOT NULL,
ImagePath VARCHAR(2000) character set utf8,
DateCreated DATETIME NOT NULL,
IsDeleted BIT NOT NULL,
PRIMARY KEY ( UserId )
);

CREATE TABLE Event (
EventId INT NOT NULL AUTO_INCREMENT,
UserId INT NOT NULL,
Date DATETIME,
Location VARCHAR(1000) character set utf8,
Name VARCHAR(1000) character set utf8 NOT NULL,
Description VARCHAR (4000) character set utf8,
ImagePath VARCHAR(2000) character set utf8,
ContactPersonInfo VARCHAR(500) character set utf8,
CategoryId INT NOT NULL,
DateCreated DATETIME NOT NULL,
IsDeleted BIT NOT NULL,
PRIMARY KEY ( EventId ),
FOREIGN KEY (UserId) REFERENCES User(UserId),
FOREIGN KEY (CategoryId) REFERENCES Category(CategoryId)
);

CREATE TABLE EventUsers (
EventUsersId INT NOT NULL AUTO_INCREMENT,
UserId INT NOT NULL,
EventId INT NOT NULL,
PRIMARY KEY (EventUsersId),
FOREIGN KEY ( UserId ) REFERENCES User(UserId),
FOREIGN KEY ( EventId ) REFERENCES Event(EventId)
);

CREATE TABLE Category (
CategoryId INT NOT NULL AUTO_INCREMENT,
Name VARCHAR(200) character set utf8 NOT NULL,
ImagePath VARCHAR(2000) character set utf8,
COLOR VARCHAR (50) character set utf8 NOT NULL,
DateCreated DATETIME NOT NULL,
IsDeleted BIT NOT NULL,
PRIMARY KEY ( CategoryId )
);

CREATE TABLE Subcategory(
SubCategoryId INT NOT NULL AUTO_INCREMENT,
CategoryId INT NOT NULL,
Name VARCHAR(200) character set utf8 NOT NULL,
ImagePath VARCHAR(2000) character set utf8,
COLOR VARCHAR(50) character set utf8 NOT NULL,
PRIMARY KEY ( SubCategoryId ),
FOREIGN KEY ( CategoryId ) REFERENCES Category (CategoryId)
);



