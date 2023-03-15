Project Title - INVENTORY_MANAGEMENT_SYSTEM

Setup Guide
 
The setup Instrucions are as follows

Pre requistes to run this application

1)XAMPP
2)XAMPP Control panel with MySQL configured

To install XAMPP use this link https://www.apachefriends.org/download.html

After that, Navigate to the htdocs folder inside your XAMPP directory

Extract the Inventory_Management_System.zip file in the htdocs

Add the database file included in the folder inventory_management_Databasefile 

if the database is not working properly then create a databse and add these tables:

Login: create table Login(email varchar(40) primary key,Password varchar(20) Not null, User_type varchar(10) default="customer")

Customer: create table Customer(Cust_id int primary key,Cust_name varchar(20),Address varchar(30),Phone Bigint,Email varchar(20), foreign key(Email) references Login(email))

Supplier: create table Supplier(Sup_id int primary key,Sup_name varchar(20),Address varchar(30),Phone Bigint,Email varchar(20))

Items: create table Items(Item_id int primary key,Item_name varchar(20),Item_price int,Categories varchar(20))

Supply: create table Supply(Sup_id int,Item_id int,primary key(Sup_id,Item_id),Stock int,foreign key(Sup_id) references Supplier(Sup_id),foreign key(Item_id) references Items(Item_id))

Orders: create table Orders(Order_id int primary key auto increment,Cust_id int,Item_id int,Item_quantity int,Item_price int,Order status varchar(20) default="pending",foreign key(Cust_id) references Customer(Cust_id),foreign key(Item_id) references Items(Item_id))

Add Trigger - CREATE TRIGGER Decrease_Stock AFTER UPDATE ON Orders FOR EACH ROW 
UPDATE Supply SET Stock = Stock - (SELECT Item_quantity FROM Orders O,Supply S 
WHERE O.Item_Id = S.Item_id AND O.Order_status = "ACK" )WHERE Supply.Item_id 
IN (SELECT O.Item_id FROM Orders O,Supply S WHERE O.Item_Id = S.Item_id AND 
O.Order_status = "ACK" );

These commands will create the required triggers for your database.

To connect with the database you must also change the username and the password for the mysqli connect to the database for the application to function properly.

And Then Do the changes where ever required

After creation of Databases and Triggers your basic setup of the application is complete!

Add an Admin to the login table in the database and use that Email and password to first login.

Now visit to the below mentioned website link with your favorite web browser

http://localhost/CoolAdmin-master/index.html

After visiting the link in your browser the application is up and running locally in your system.

After Entering the welcome page click on LOGIN button to go to the login page.

After entering the Email and Password for admin you can successfully login as admin and you can do functionalties like adding,deleting,Editing Stocks,Customer,Supplier etc.