
create table user_reg(name varchar(50),
email varchar(50),
contact int(10),
password varchar(8),
address varchar(250)
);
create table service_prov_reg(name varchar(50),
email varchar(50),
contact int(10),
password varchar(8),
occupation varchar(20),
service varchar(100),
area varchar(20),
address varchar(250)
);
create table contact(name varchar(50),
email varchar(50),
contact int (10),
message varchar(250)
);
create table book(name varchar(50),
email varchar(30),
service varchar(40),
date varchar(20),
request varchar(250)
);
create table admin(admin_id int(5),
name varchar(20),
email_id varchar(50),
password varchar(8)
);
create table request(name varchar(50),
email varchar(50),
contact int(10),
occupation varchar(20),
service varchar(100),
area varchar(20),
address varchar(250)
);
