create database Frota;
use Frota;

create table Usuario(
	idUsuario int primary key auto_increment,
    nome varchar(45)not null unique,
    senha varchar(32) not null,
    Email varchar(64),
    tipo tinyint not null default 1,
    constraint senha check (length(senha)between 8 and 32)
);

create table Veiculo(
	idVeiculo int primary key auto_increment,
    placa varchar(7) not null unique,
    km_rodado bigint not null default 0,
    manutencao date,
    constraint placa check (length(placa)=7),
    constraint km_rodado check (km_rodado>=0)
);

create table Reserva(
	idReserva int primary key auto_increment,
    data_retirada datetime not null,
    data_entrega datetime,
    Veiculo_idVeiculo int,
    foreign key (Veiculo_idVeiculo) references Veiculo(idVeiculo)
);

create table Viagem(
	Usuario_idUsuario int,
    Veiculo_idVeiculo int,
    Usuario_idMotorista int,
    data_viagem date not null,
    distancia float,
    estatus boolean not null default 1,
    foreign key (Usuario_idUsuario) references Usuario(idUsuario),
    foreign key (Veiculo_idVeiculo) references Veiculo(idVeiculo),
    foreign key (Usuario_idMotorista) references Usuario(idUsuario)
);

create view dados_usuario as
select nome, tipo, email
from usuario;

create view dados_veiculo as
select placa, km_rodado, manutencao
from veiculo;

select *
from usuario;