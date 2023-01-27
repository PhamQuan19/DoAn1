CREATE DATABASE DB_GR4
GO

USE DB_GR4
GO

CREATE TABLE _user
(
	id_user CHAR(10) PRIMARY KEY,
	name_user NVARCHAR(100),
	acc_user VARCHAR(50),
	pass_user VARCHAR(50)
)
GO 

--drop table nguoidung
go

CREATE TABLE client
(
	client_id CHAR(10) PRIMARY KEY,
	client_name NVARCHAR(100),
	client_phone VARCHAR(12),
	email VARCHAR(100)
)
GO 

--drop table khachhang
go

CREATE TABLE products
(
	prd_id CHAR(10) PRIMARY KEY,
	prd_name NVARCHAR(100),
	prd_image VARCHAR(100),
	price INT,
	quantity INT,
	discription NVARCHAR(200),
	brand_id CHAR(10),
	FOREIGN KEY (brand_id) REFERENCES brands(brand_id)
)
GO 

--drop table sanpham
go

CREATE TABLE _order
(
	_order_id CHAR(10) PRIMARY KEY,
	client_id CHAR(10) FOREIGN KEY (client_id) REFERENCES client(client_id),
	prd_id CHAR(10) FOREIGN KEY (prd_id) REFERENCES products(prd_id),
	deliver_id CHAR(10) FOREIGN KEY (deliver_id) REFERENCES deliver(deliver_id),
	prd_name NVARCHAR(100),
	date_founded DATE,
	total_money VARCHAR(9),
	dispatch NVARCHAR(100),
	note NVARCHAR(200),
)
GO 

--drop table donhang
go

CREATE TABLE deliver
(
	deliver_id CHAR(10) PRIMARY KEY,
	deliver_phone VARCHAR(12),
	deliver_name NVARCHAR(100)
)
GO 

--drop table nguoigiao
go

CREATE TABLE brands
(
	brand_id CHAR(10) PRIMARY KEY,
	brand_name NVARCHAR(50)
)
GO 

CREATE TABLE account
(
	id CHAR(10) PRIMARY KEY,
	_user VARCHAR(100),
	_password VARCHAR(100),
	_level INT
)
GO 

--drop table nhanhieu
go
