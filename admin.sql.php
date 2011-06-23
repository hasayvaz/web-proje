create table admin (
	id int(11) not null auto_increment,
	ad varchar(20) not null default '',
	parola varchar(12) not null default '',
	prImary key  (id)
) TYPE=MyISAM;
insert into admin (ad, parola)
values ("gokhan", 12345),
       ("hasan", 11111);

