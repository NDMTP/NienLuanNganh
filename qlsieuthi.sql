/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2/18/2024 3:35:15 PM                         */
/*==============================================================*/


drop table if exists ANHDANHGIA;

drop table if exists CHITIETHOADON;

drop table if exists CHITIETPHIEUNHAP;

drop table if exists DANHGIASP;

drop table if exists GIAOHANG;

drop table if exists HOADON;

drop table if exists KHUYENMAI;

drop table if exists LOAISANPHAM;

drop table if exists NGUOIDUNG;

drop table if exists NHACUNGCAP;

drop table if exists NHASANXUAT;

drop table if exists PHIEUNHAP;

drop table if exists PHUONGTHUCTT;

drop table if exists SANPHAM;

drop table if exists THANHPHO;

/*==============================================================*/
/* Table: ANHDANHGIA                                            */
/*==============================================================*/
create table ANHDANHGIA
(
   MALINKANH            int not null,
   LINKANHDG            varchar(100),
   primary key (MALINKANH)
);

/*==============================================================*/
/* Table: CHITIETHOADON                                         */
/*==============================================================*/
create table CHITIETHOADON
(
   MAHOADON             int not null,
   MASP                 varchar(10) not null,
   SOLUONGSP            int,
   primary key (MAHOADON, MASP)
);

/*==============================================================*/
/* Table: CHITIETPHIEUNHAP                                      */
/*==============================================================*/
create table CHITIETPHIEUNHAP
(
   MAPHIEUNHAP          int not null,
   MASP                 varchar(10) not null,
   SOLUONG              int,
   DONGIA               int,
   primary key (MAPHIEUNHAP, MASP)
);

/*==============================================================*/
/* Table: DANHGIASP                                             */
/*==============================================================*/
create table DANHGIASP
(
   EMAIL                varchar(70) not null,
   MASP                 varchar(10) not null,
   MALINKANH            int not null,
   NOIDUNGDG            varchar(300),
   LINKANHDG            varchar(100)
);

/*==============================================================*/
/* Table: GIAOHANG                                              */
/*==============================================================*/
create table GIAOHANG
(
   MATP                 varchar(20) not null,
   EMAIL                varchar(70) not null,
   PHIGIAO              int,
   GHICHU               varchar(70),
   primary key (MATP, EMAIL)
);

/*==============================================================*/
/* Table: HOADON                                                */
/*==============================================================*/
create table HOADON
(
   MAHOADON             int not null,
   MAKM                 varchar(10),
   EMAIL                varchar(70) not null,
   MAPT                 varchar(20) not null,
   NGAYLAP              datetime,
   TRANGTHAIHOADON      varchar(40),
   primary key (MAHOADON)
);

/*==============================================================*/
/* Table: KHUYENMAI                                             */
/*==============================================================*/
create table KHUYENMAI
(
   MAKM                 varchar(10) not null,
   PHANTRAMKM           decimal,
   DIEUKIENKM           int,
   NGAYBD               date,
   NGAYKT               date,
   primary key (MAKM)
);

/*==============================================================*/
/* Table: LOAISANPHAM                                           */
/*==============================================================*/
create table LOAISANPHAM
(
   MALOAI               varchar(10) not null,
   TENLOAI              varchar(50),
   primary key (MALOAI)
);

/*==============================================================*/
/* Table: NGUOIDUNG                                             */
/*==============================================================*/
create table NGUOIDUNG
(
   EMAIL                varchar(70) not null,
   MATKHAU              varchar(70) not null,
   DIACHI               varchar(100) not null,
   TEN                  varchar(50) not null,
   SDT                  varchar(12) not null,
   PHANQUYEN            varchar(20) not null,
   primary key (EMAIL)
);

/*==============================================================*/
/* Table: NHACUNGCAP                                            */
/*==============================================================*/
create table NHACUNGCAP
(
   MANCC                int not null,
   TENNCC               varchar(100) not null,
   DIACHI               varchar(100) not null,
   primary key (MANCC)
);

/*==============================================================*/
/* Table: NHASANXUAT                                            */
/*==============================================================*/
create table NHASANXUAT
(
   MANSX                varchar(10) not null,
   TENNSX               varchar(100) not null,
   primary key (MANSX)
);

/*==============================================================*/
/* Table: PHIEUNHAP                                             */
/*==============================================================*/
create table PHIEUNHAP
(
   MAPHIEUNHAP          int not null,
   MANCC                int not null,
   TENPHIEUNHAP         varchar(100) not null,
   primary key (MAPHIEUNHAP)
);

/*==============================================================*/
/* Table: PHUONGTHUCTT                                          */
/*==============================================================*/
create table PHUONGTHUCTT
(
   MAPT                 varchar(20) not null,
   TENPT                varchar(40),
   primary key (MAPT)
);

/*==============================================================*/
/* Table: SANPHAM                                               */
/*==============================================================*/
create table SANPHAM
(
   MASP                 varchar(10) not null,
   MANSX                varchar(10) not null,
   MALOAI               varchar(10) not null,
   TENSP                varchar(100) not null,
   DONGIABANSP          varchar(100) not null,
   MOTA                 varchar(300) not null,
   LINKANH              varchar(200) not null,
   primary key (MASP)
);

/*==============================================================*/
/* Table: THANHPHO                                              */
/*==============================================================*/
create table THANHPHO
(
   MATP                 varchar(20) not null,
   TENTP                varchar(70),
   PHIGIAO              int,
   primary key (MATP)
);

alter table CHITIETHOADON add constraint FK_CHITIETGIOHANG foreign key (MASP)
      references SANPHAM (MASP) on delete restrict on update restrict;

alter table CHITIETHOADON add constraint FK_GIOHANG_CTGIOHANG foreign key (MAHOADON)
      references HOADON (MAHOADON) on delete restrict on update restrict;

alter table CHITIETPHIEUNHAP add constraint FK_RELATIONSHIP_14 foreign key (MAPHIEUNHAP)
      references PHIEUNHAP (MAPHIEUNHAP) on delete restrict on update restrict;

alter table CHITIETPHIEUNHAP add constraint FK_RELATIONSHIP_15 foreign key (MASP)
      references SANPHAM (MASP) on delete restrict on update restrict;

alter table DANHGIASP add constraint FK_ANHCUADANHGIA foreign key (MALINKANH)
      references ANHDANHGIA (MALINKANH) on delete restrict on update restrict;

alter table DANHGIASP add constraint FK_DANHGIACUANGUOIDUNG foreign key (EMAIL)
      references NGUOIDUNG (EMAIL) on delete restrict on update restrict;

alter table DANHGIASP add constraint FK_DANHGIACUASP foreign key (MASP)
      references SANPHAM (MASP) on delete restrict on update restrict;

alter table GIAOHANG add constraint FK_GIAOHANGND foreign key (EMAIL)
      references NGUOIDUNG (EMAIL) on delete restrict on update restrict;

alter table GIAOHANG add constraint FK_KHUVUC_GIAOHANG foreign key (MATP)
      references THANHPHO (MATP) on delete restrict on update restrict;

alter table HOADON add constraint FK_HOADONCUAKHACH foreign key (EMAIL)
      references NGUOIDUNG (EMAIL) on delete restrict on update restrict;

alter table HOADON add constraint FK_KHUYENMAI_HOADON foreign key (MAKM)
      references KHUYENMAI (MAKM) on delete restrict on update restrict;

alter table HOADON add constraint FK_PTTHANHTOANCUAHD foreign key (MAPT)
      references PHUONGTHUCTT (MAPT) on delete restrict on update restrict;

alter table PHIEUNHAP add constraint FK_DANGKI foreign key (MANCC)
      references NHACUNGCAP (MANCC) on delete restrict on update restrict;

alter table SANPHAM add constraint FK_LOAICUASP foreign key (MALOAI)
      references LOAISANPHAM (MALOAI) on delete restrict on update restrict;

alter table SANPHAM add constraint FK_SANPHAMSANXUAT foreign key (MANSX)
      references NHASANXUAT (MANSX) on delete restrict on update restrict;

