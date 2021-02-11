
CREATE TABLE usermc(
	id_usuario int AUTO_INCREMENT PRIMARY KEY,
    usuario varchar(40) NOT NULL UNIQUE,
    nombre varchar(40) NOT NULL,
    apellido varchar(40) NOT NULL,
    contrasena TEXT NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
    ON UPDATE CURRENT_TIMESTAMP
);

);


insert into usermc(usuario,nombre,apellido,contrasena)
values
('bryan@surprise','Bryan','Terán','$2y$10$2ssot96dYI2TtAdZY5mpuu1xOMvwp5O4FiQYuV3fW4NfK6BdYsh3y'),
('bryan@surprise','Bryan','Terán','$2y$10$Q2Q2.dDQmu/lu58O79Sx.Ox.Mq0mw6.46FoBx.WqHcicSPuGaGBoG');

