create table consulta(
   id_consulta int not null,
   id_expediente int,
   id_veterinario int,
   fecha_consulta date not null,
   hora_consulta time not null,
primary key (id_consulta));
