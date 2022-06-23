---Health System Response Monitoring
/*
I. province
II. district
III. town
IV. assign_province
V. response
*/

CREATE DATABASE hsrm_zambia;
use hsrm_zambia;

CREATE TABLE province(
    p_id int(15) not null primary key auto_increment,
    p_name varchar(15) not null
);

CREATE TABLE district(
    d_id int(15) not null primary key auto_increment,
    d_name varchar(15) not null,
    p_id int(15) not null,
    foreign key (p_id) references province(p_id)
);

CREATE TABLE town(
    t_id int(15) not null primary key auto_increment,
    t_name varchar(15) not null
);

CREATE TABLE assign_province(
    assign_id int(15) not null primary key auto_increment,
    p_idd int(15) not null,
    d_idd int(15) not null,
    t_idd int(15) not null,
    foreign key (p_idd) references province(p_id),
    foreign key (d_idd) references district(d_id),
    foreign key (t_idd) references town(t_id)
);

CREATE TABLE response(
    response_id int(15) not null primary key auto_increment,
    citizen_name varchar(150) not null,
    citizen_phone varchar(150) not null,
    citizen_address text not null,
    description text,
    d_idd int(15) not null,
    date_time datetime,

    foreign key (d_idd) references district(d_id)
);

CREATE TABLE users(
    user_id int(15) not null primary key auto_increment,
    fname varchar(100),
    lname varchar(100),
    email varchar(100),
    pnumber varchar(100),
    username varchar(100),
    role enum("admin","cuser"),
    password text
);


-- Addiministrator
INSERT INTO users(`user_id`,`fname`,`lname`,`email`,`pnumber`,`username`,`role`,`password`) VALUES (null,'admin','Nyangu','nyangu@icu.com','0183081031','admin','admin',md5('123456'));