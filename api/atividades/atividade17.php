create table Endereço (

cd_Endereço    int        not null identity(1,1)
nr_Cep        int        not null
nm_Logradouro  varchar(30)    not null
nm_Bairro    varchar(30)    not null
nm_Cidade    varchar(30)    not null
abr_Uf        char(4)        not null

);