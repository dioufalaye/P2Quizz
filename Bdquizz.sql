/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  29/05/2020 14:10:28                      */
/*==============================================================*/


drop table if exists UTILISATEUR;

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   LOGIN                varchar(25) not null,
   PWD                  varchar(25) not null,
   PRENOM               varchar(25) not null,
   NOM                  varchar(20) not null,
   ROLE                 varchar(10) not null,
   PHOTO                longblob,
   primary key (LOGIN)
);

