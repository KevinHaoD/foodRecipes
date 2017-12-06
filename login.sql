create database login;

use login;

create table if not exists login (
email varchar(40) not null,
username varchar(40) not null,
password varchar(40) not null,
primary key (email)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into login (email, username, password) values
('admin', 'admin', 'admin');