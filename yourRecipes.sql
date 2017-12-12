CREATE TABLE  if not exists yourRecipes (
login varchar(40) NOT NULL,
food varchar(50) NOT NULL,
PRIMARY KEY (login, food),
FOREIGN KEY (login) REFERENCES Login(login),
FOREIGN KEY (food) REFERENCES Food(food)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;