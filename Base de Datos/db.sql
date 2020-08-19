create database hospital;
use hospital;
set sql_mode='';

create table usuario(
id int not null auto_increment primary key,
nombre varchar(50),
apellidos varchar(50),
fecha_nac date,
email varchar(50),
username varchar(50),
password varchar(50),
cargo varchar(35)
);

insert into usuario(nombre,apellidos,email,password,cargo)
value ("Administrador","","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad","Doctor");

create table c_sexo(
id_sexo int not null auto_increment primary key,
sexo varchar(10)
);

insert into c_sexo(sexo)
value ("Hombre"),("Mujer");

create table c_estado(
id_estado int not null auto_increment primary key,
estado varchar(10)
);

insert into c_estado(estado)
value ("No visto"),("Visto");

create table pacientes(
id_pacientes int not null auto_increment primary key,
nombre varchar(35),
ap_paterno varchar(35),
ap_materno varchar(35),
id_sexo int,
fecha_nacimiento date,
fecha_hora_ingreso datetime,
fecha_hora_alta datetime,
motivo_alta text,
fecha_defuncion date,
motivo_ingreso text,
diagnostico text,

foreign key (id_sexo) references c_sexo(id_sexo)
);

create table asignacion(
id_asignacion int not null auto_increment primary key,
id_usuario int,
id_pacientes int,
parentesco varchar(20),

foreign key (id_usuario) references usuario(id),
foreign key (id_pacientes) references pacientes(id_pacientes)
);

create table notificacion(
id_notificacion int not null auto_increment primary key,
titulo varchar(50),
detalle text,
fecha_hora datetime,
id_estado int,
id_usuario int,
id_pacientes int,

foreign key (id_estado) references c_estado(id_estado),
foreign key (id_usuario) references usuario(id),
foreign key (id_pacientes) references pacientes(id_pacientes)
);
