/*
verifiedusers
	firstname
	lastname
	email
	password
	xp
	paid

unverifiedusers
	firstname
	lastname
	email
	password
	code

*/



CREATE TABLE unverified_users(
   FIRSTNAME VARCHAR (100)     NOT NULL,
   LASTNAME VARCHAR (100)     NOT NULL,
   EMAIL VARCHAR (100)     NOT NULL,
   PASSWORD VARCHAR (255)     NOT NULL,
   CODE VARCHAR (100)     NOT NULL,
   PRIMARY KEY (EMAIL)
);

CREATE TABLE verified_users(
   FIRSTNAME VARCHAR (100)     NOT NULL,
   LASTNAME VARCHAR (100)     NOT NULL,
   EMAIL VARCHAR (100)     NOT NULL,
   PASSWORD VARCHAR (255)     NOT NULL,
   PAID VARCHAR (10)     NOT NULL,
   XP INT NOT NULL,
   PRIMARY KEY (EMAIL)
);

CREATE TABLE admins(
   FIRSTNAME VARCHAR (100)     NOT NULL,
   LASTNAME VARCHAR (100)     NOT NULL,
   EMAIL VARCHAR (100)     NOT NULL,
   PASSWORD VARCHAR (255)     NOT NULL,
   XP INT NOT NULL,
   PRIMARY KEY (EMAIL)
);