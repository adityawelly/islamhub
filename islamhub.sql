/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     5/7/2019 9:47:12 AM                          */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists BUKU;

drop table if exists CLIENT;

drop table if exists FORUM_USERS;

drop table if exists MELIHAT;

drop table if exists MENCARI;

drop table if exists PAKAR;

drop table if exists PRIVATE_CHAT;

drop table if exists RELATIONSHIP_5;

drop table if exists RELATIONSHIP_6;

drop table if exists VIDEO;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   NIK_ADMIN            varchar(50),
   NAMA_ADMIN           varchar(50),
   NOTELP_ADMIN         varchar(15),
   JK_ADMIN             varchar(10),
   EMAIL_ADMIN          varchar(100),
   PASSWORD_ADMIN       varchar(100),
   LASTEDIT_ADMIN       datetime,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: BUKU                                                  */
/*==============================================================*/
create table BUKU
(
   ID_PAKAR             int not null,
   ID_BUKU              int not null,
   ID_ADMIN             int,
   JUDUL_BUKU           varchar(250),
   BUKU                 varchar(250),
   KOMENTAR_BUKU        text,
   LIKE_BUKU            int,
   LIKE_AAT_BUKU        datetime,
   primary key (ID_PAKAR, ID_BUKU)
);

/*==============================================================*/
/* Table: CLIENT                                                */
/*==============================================================*/
create table CLIENT
(
   ID_CLIENT            int not null,
   ID_CHAT              int,
   ID_ADMIN             int,
   NAMA_CLIENT          varchar(50),
   UNAME_CLIENT         varchar(50),
   EMAIL_CLIENT         varchar(100),
   PASSWORD_CLIENT      varchar(100),
   AVATAR_CLIENT        varchar(250),
   JK_CLIENT            varchar(10),
   ALAMAT_CLIENT        varchar(200),
   NOTEPL_CLIENT        varchar(15),
   BIODATA_CLIENT       text,
   LASTEDIT_CLIENT      datetime,
   primary key (ID_CLIENT)
);

/*==============================================================*/
/* Table: FORUM_USERS                                           */
/*==============================================================*/
create table FORUM_USERS
(
   ID_FORUM             int not null,
   ID_ADMIN             int,
   USERNAME             varchar(50),
   EMAIL                varchar(100),
   PASSWORD             varchar(100),
   AVATAR               varchar(250),
   CREATED_AT           datetime,
   UPDATE_AT            datetime,
   primary key (ID_FORUM)
);

/*==============================================================*/
/* Table: MELIHAT                                               */
/*==============================================================*/
create table MELIHAT
(
   ID_PAKAR             int not null,
   ID_BUKU              int not null,
   ID_CLIENT            int not null,
   primary key (ID_PAKAR, ID_BUKU, ID_CLIENT)
);

/*==============================================================*/
/* Table: MENCARI                                               */
/*==============================================================*/
create table MENCARI
(
   ID_PAKAR             int not null,
   ID_VIDEO             int not null,
   ID_CLIENT            int not null,
   primary key (ID_PAKAR, ID_VIDEO, ID_CLIENT)
);

/*==============================================================*/
/* Table: PAKAR                                                 */
/*==============================================================*/
create table PAKAR
(
   ID_PAKAR             int not null,
   ID_CHAT              int,
   ID_ADMIN             int,
   NAMA_PAKAR           varchar(50),
   UNAME_PAKAR          varchar(50),
   EMAIL_PAKAR          varchar(100),
   PASSWORD_PAKAR       varchar(100),
   AVATAR_PAKAR         varchar(250),
   NIK_PAKAR            int,
   JK_PAKAR             varchar(10),
   ALAMAT_PAKAR         varchar(200),
   TEMPAT_LAHIR_PAKAR   varchar(50),
   TGL_LAHIR_PAKAR      date,
   NOTELP_PAKAR         varchar(15),
   PERGURUANT_PAKAR     varchar(250),
   SETIFIKAT_PAKAR      varchar(250),
   BIODATA_PAKAR        text,
   LASTEDIT_PAKAR       datetime,
   primary key (ID_PAKAR)
);

/*==============================================================*/
/* Table: PRIVATE_CHAT                                          */
/*==============================================================*/
create table PRIVATE_CHAT
(
   ID_CHAT              int not null,
   ID_CLIENT            int,
   ID_PAKAR             int,
   PENGIRIM_CHAT        varchar(50),
   PENERIMA_CHAT        varchar(50),
   ISI_CHAT             text,
   SEND_AT              datetime,
   primary key (ID_CHAT)
);

/*==============================================================*/
/* Table: RELATIONSHIP_5                                        */
/*==============================================================*/
create table RELATIONSHIP_5
(
   ID_FORUM             int not null,
   ID_CLIENT            int not null,
   primary key (ID_FORUM, ID_CLIENT)
);

/*==============================================================*/
/* Table: RELATIONSHIP_6                                        */
/*==============================================================*/
create table RELATIONSHIP_6
(
   ID_PAKAR             int not null,
   ID_FORUM             int not null,
   primary key (ID_PAKAR, ID_FORUM)
);

/*==============================================================*/
/* Table: VIDEO                                                 */
/*==============================================================*/
create table VIDEO
(
   ID_PAKAR             int not null,
   ID_VIDEO             int not null,
   ID_ADMIN             int,
   JUDUL_VIDEO          varchar(250),
   VIDEO                varchar(250),
   KOMENTAR_VIDEO       text,
   LIKE_VIDEO           int,
   LIKE_AT_VIDEO        datetime,
   primary key (ID_PAKAR, ID_VIDEO)
);

alter table BUKU add constraint FK_MEREFERENSIKAN foreign key (ID_PAKAR)
      references PAKAR (ID_PAKAR) on delete restrict on update restrict;

alter table BUKU add constraint FK_RELATIONSHIP_16 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table CLIENT add constraint FK_MENGIRIM foreign key (ID_CHAT)
      references PRIVATE_CHAT (ID_CHAT) on delete restrict on update restrict;

alter table CLIENT add constraint FK_RELATIONSHIP_13 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table FORUM_USERS add constraint FK_RELATIONSHIP_15 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table MELIHAT add constraint FK_MELIHAT foreign key (ID_PAKAR, ID_BUKU)
      references BUKU (ID_PAKAR, ID_BUKU) on delete restrict on update restrict;

alter table MELIHAT add constraint FK_MELIHAT2 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table MENCARI add constraint FK_MENCARI foreign key (ID_PAKAR, ID_VIDEO)
      references VIDEO (ID_PAKAR, ID_VIDEO) on delete restrict on update restrict;

alter table MENCARI add constraint FK_MENCARI2 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table PAKAR add constraint FK_MEMBALAS2 foreign key (ID_CHAT)
      references PRIVATE_CHAT (ID_CHAT) on delete restrict on update restrict;

alter table PAKAR add constraint FK_RELATIONSHIP_14 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table PRIVATE_CHAT add constraint FK_MEMBALAS foreign key (ID_PAKAR)
      references PAKAR (ID_PAKAR) on delete restrict on update restrict;

alter table PRIVATE_CHAT add constraint FK_MENGIRIM2 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table RELATIONSHIP_5 add constraint FK_RELATIONSHIP_5 foreign key (ID_FORUM)
      references FORUM_USERS (ID_FORUM) on delete restrict on update restrict;

alter table RELATIONSHIP_5 add constraint FK_RELATIONSHIP_7 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table RELATIONSHIP_6 add constraint FK_RELATIONSHIP_6 foreign key (ID_PAKAR)
      references PAKAR (ID_PAKAR) on delete restrict on update restrict;

alter table RELATIONSHIP_6 add constraint FK_RELATIONSHIP_8 foreign key (ID_FORUM)
      references FORUM_USERS (ID_FORUM) on delete restrict on update restrict;

alter table VIDEO add constraint FK_MENGUPLOAD foreign key (ID_PAKAR)
      references PAKAR (ID_PAKAR) on delete restrict on update restrict;

alter table VIDEO add constraint FK_RELATIONSHIP_17 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

