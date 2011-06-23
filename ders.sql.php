create table ders (
	id int(11) not null auto_increment,
	numara varchar(20) not null default '',
	sifre varchar(12) not null default '',
	sinif int(1) not null ,
	prog int(3) not null ,
	prog2 int(3) not null ,
	veriyap int(3) not null ,
	veriyap2 int(3) not null ,
	saytas int(3) not null ,
	saytas2 int(3) not null ,
	mesing int(3) not null ,
	mesing2 int(3) not null ,
	primary key  (id)
) TYPE=MyISAM;


