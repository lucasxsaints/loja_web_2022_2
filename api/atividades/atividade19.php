create table Produto (
cd_Produto        int  not null identity(1,1)
   nm_NomeProduto     varchar        not null
    nm_Descrição       varchar        not null
    qt_Quantidade      int            not null
    dt_DataAlteracao   int            not null
    vlr_ValorProduto   float          not null
    nr_Largura         float          not null
    nr_Altura          float          not null
    nr_Comprimento     float          not null
    nr_Peso            float          not null

);