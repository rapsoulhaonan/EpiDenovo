create table RNA_eMED_mouse (
	Symbol varchar(60) not null,
	MIIoocyte_FPKM float(16,9),
	zygote_FPKM float(16,9),
	early2cell_FPKM float(16,9),
	cell2_FPKM float(16,9),
	cell4_FPKM float(16,9),
	cell8_FPKM float(16,9),
	ICM_FPKM float(16,9),
	mESC_FPKM float(16,9),

key_num int(20) unsigned not null auto_increment,
primary key(key_num),

key(Symbol)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


