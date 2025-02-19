
-- CREAR LA BASE DE DATOS
CREATE DATABASE TIENDAONLINE;

-- USAR LA BASE DE DATOS
USE TIENDAONLINE;

-- CREAR TABLA DE CONTACTO 
CREATE TABLE CONTACTO (
	contactoId int IDENTITY(1,1) PRIMARY KEY,
	nombre varchar(60),
	correo varchar(100),
	telefono bigint,
	contenidoMensaje varchar(200)
);

-- INSERTAR DATO DE CONTACTO ------------------------
INSERT INTO CONTACTO VALUES ('Marco Antonio Rico Valadez', 'marcoricovaladez@gmail.com', 33205216 ,'Me puedas dar mas informacion en mi correo electronico.');

-- CREAR TABLA DE CATEGORIAS 1ER
CREATE TABLE CATEGORIA (
	categoriaId int AUTO_INCREMENT ,
	nombre varchar(20) not null,
	UNIQUE(nombre),
	PRIMARY KEY(categoriaId)
);

-- INSERTAR DATO DE PRUEBA ------------------------
INSERT INTO CATEGORIA VALUES ('MUEBLES'), ('TECNOLOGIA');

-- CREAR TABLA DE MARCA 2DA
CREATE TABLE MARCA (
	marcaId int(10) AUTO_INCREMENT,
	nombre varchar(20),
	UNIQUE(nombre),
	PRIMARY KEY (marcaId)
);

-- INSERTAR DATO DE PRUEBA-----------------------
INSERT INTO MARCA VALUES ('PLACENCIA'), ('ASUS');
INSERT INTO MARCA VALUES ('HP');

--- CREAR TABLA DE TESTIMONIOS
CREATE TABLE TESTIMONIOS (
	id_comentario int not null,
	productoId int not null,
	usuarioId int not null
);

CREATE TABLE TESTIMONIOS_C (
	
);

-- CREAR TABLA DE PRODUCTOS 3DA
CREATE TABLE PRODUCTOS (
	productoId int(10) AUTO_INCREMENT,
	nombre varchar(50),
	descripcion varchar(120),
	marcaId int,
	categoriaId int,
	stock int, 
	imagen1 varchar(100),
	imagen2 varchar(100),
	imagen3 varchar(100),
	imagen4 varchar(100),
	imagen5 varchar(100),
	estatusProducto bit,
	estatusPromo bit,
	promocion integer,
	monto integer,
	descuento1 smallint,
	descuento2 smallint,
	iva bit,
	vendidos integer,
	FOREIGN KEY (marcaId) REFERENCES MARCA(marcaId),
	FOREIGN KEY (categoriaId) REFERENCES CATEGORIA(categoriaId),
	PRIMARY KEY (productoId),
    UNIQUE(nombre)
);

-- INSERTAR DATOS
INSERT INTO PRODUCTOS(nombre, descripcion,marcaId,categoriaId, stock,imagen1,imagen2,imagen3,imagen4,imagen5,estatusProducto,estatusPromo,promocion,monto,descuento1,descuento2,iva,vendidos) VALUES ('SALA ESQUINADA', 'SALA ESQUINADA DE COLOR ROJO  ', 1, 1, 30, 'IMAGEN1.png', 'IMAGEN2.png', 'IMAGEN3.png', 'IMAGEN4.png', 'IMAGEN5.png', 1, 0, 15000, 20000, 0, 0, 1, 1);

-- INSERTAR DATO DE PRUEBA----------------------
INSERT INTO PRODUCTOS VALUES ('SALA ESQUINADA', 'SALA ESQUINADA DE COLOR ROJO  ', 1, 1, 30, 'IMAGEN1.png', 'IMAGEN2.png', 'IMAGEN3.png', 'IMAGEN4.png', 'IMAGEN5.png', 1, 0, 15000, 20000, 0, 0, 1, 1);
							 
INSERT INTO PRODUCTOS VALUES ('MONITOR 23 PUL', 'MONITOR ASUS DE 30 PULGADAS 4K', 2, 2, 30, 'IMAGEN1.png', 'IMAGEN2.png', 'IMAGEN3.png', 'IMAGEN4.png', 'IMAGEN5.png', 1, 0,  5500, 7500,  0, 0, 1, 1);

INSERT INTO PRODUCTOS VALUES ('MONITOR 24 PUL', 'MONITOR ASUS DE 30 PULGADAS 4K', 3, 2, 30, 'IMAGEN1.png', 'IMAGEN2.png', 'IMAGEN3.png', 'IMAGEN4.png', 'IMAGEN5.png', 1, 0,  5500, 7500,  0, 0, 1, 1);

--	CREAR TABLA DE USUARIOS
CREATE TABLE USUARIOS (
	usuarioId int IDENTITY(1,1) PRIMARY KEY,
	mail varchar(60),
	pass varchar(200),
	correoValidado char(1),
	token varchar(60),
	nombre varchar(30),
	apellido varchar(20),
	direccion varchar(60),
	numeroExterior varchar(15),
	numeroInterior varchar(15),
	cPostal integer,
	calle1 varchar(60),
	calle2 varchar(60),
	municipio varchar(30),
	colonia varchar(30),
	estado varchar (30),
	pais varchar (50),
	lada varchar (10),
	celular bigint,
	rfc varchar (80),
	razonSocial varchar(80),
	UNIQUE(mail)
);

-- INSERTAR DATOS
INSERT INTO USUARIOS VALUES (
    'esmeralda@gmail.com', 
    '$2y$10$sqETU1sRqh9viWTkK29PLuU2.qrBoDd/XZBYCfvZVOpBb9h7Kxj0O',
    'F',
    '21',
    'Esmeralda',
    'Valencia Acosta',
    'Calle San pablo',
    '78A', '',
    45690, 
    'Catarino Muñoz',
    'Jose Luis Lupercio',
    'El salto', 
    'La pacifico', 
    'Jalisco', 
    'Mexico', 
    '+52', 
    3320525516, 
    'RIV02', 
    'Persona Moral');

--	CREAR TABLA DE PEDIDO
CREATE TABLE PEDIDO (
	pedidoId int IDENTITY(1,1) PRIMARY KEY,
	userId integer,
	estatus char,
	subtotal decimal,
	descuento_total decimal,
	iva_total decimal,
	montoTotal decimal,
	fechaCompra datetime,
	fechaEntrega datetime,
	CONSTRAINT fk_usuarioId FOREIGN KEY (userId) REFERENCES USUARIOS(usuarioId)
);

--	INSERTAR DATOS DEL PEDIDO
INSERT INTO PEDIDO VALUES (2,'P',12000,2000,1600,11600,'2024-12-10','2024-12-25');

--	CREAR TABLA DE DETALLES DEL DEPIDO
CREATE TABLE PEDIDO_DETALLES (
	pedidoDetallesId int(10) AUTO_INCREMENT,
	pedidoId integer,
	productoId integer,
	cantidad integer,
	precioUnitario decimal,
	montoXCantidad decimal,
	ivaUnitario decimal,
	descuentoUnitario decimal,
	totalUbitario decimal,
	totalPedido decimal,
	fechaCompra datetime,
	fechaEntrega datetime,
	FOREIGN KEY (pedidoId) REFERENCES PEDIDO(pedidoId),
	FOREIGN KEY (productoId) REFERENCES PRODUCTOS(productoId),
	PRIMARY KEY (pedidoDetallesId)
);

--	INSERTAR DATOS DEL DETALLE DEL PEDIDO
INSERT INTO PEDIDO_DETALLES  VALUES (2, 7, 1, 2000, 2000, 320, 0, 2320, 10000,'2024-12-10','2024-12-25'),
									(2, 9, 1, 7500, 7500, 1200, 0, 8700, 10000,'2024-12-10','2024-12-25');

-- EJECUTAR CONSULTAS
SELECT * FROM CONTACTO;
SELECT * FROM CATEGORIA;
SELECT * FROM MARCA;
SELECT * FROM USUARIOS;
SELECT * FROM PEDIDO;
SELECT * FROM PEDIDO_DETALLES;
SELECT * FROM PRODUCTOS;

--	VISTA PARA MOSTRAR INFORMACION SOBRE LOS DETALLES DEL PEDIDO
SELECT pedidoId AS 'ID PEDIDO', PRODUCTOS.nombre AS PRODUCTO FROM PEDIDO_DETALLES 
LEFT JOIN PRODUCTOS ON PEDIDO_DETALLES.productoId = PRODUCTOS.productoId 

--	VISTA PARA MOSTRAR EL PEDIDO EN GENERAL
SELECT PEDIDO.pedidoId AS 'NUMERO DE PEDIDO', USUARIOS.nombre AS CLIENTE, PEDIDO.montoTotal FROM PEDIDO 
LEFT JOIN USUARIOS ON PEDIDO.userId = USUARIOS.usuarioId WHERE USUARIOS.usuarioId = 1;

