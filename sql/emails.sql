use containerdb;


DROP TABLE IF EXISTS tbl_emails;
CREATE TABLE  tbl_emails (

    ID INT(11) AUTO_INCREMENT,
    FNAME VARCHAR(20) NOT NULL,
    LNAME VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(100) NOT NULL,
    MSG VARCHAR(255) NOT NULL,   
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_emails (FNAME, LNAME, EMAIL, MSG) VALUES ('Bodie', 'Keys', 'Bodiekeys@hotmail.com', 'Contact me');
INSERT INTO tbl_emails (FNAME, LNAME, EMAIL, MSG) VALUES ('Leo', 'Cookson','LeoCookson@outlook.com', 'Email me');
INSERT INTO tbl_emails (FNAME, LNAME, EMAIL, MSG) VALUES ('JJ', 'Smith','JJ@gmail.com', 'hey ');
INSERT INTO tbl_emails (FNAME, LNAME, EMAIL, MSG) VALUES ('D.Trump', 'Daman','Trump69@yahoo.com', 'Nice website');
INSERT INTO tbl_emails (FNAME, LNAME, EMAIL, MSG) VALUES ('Reme', 'Whie','reme@gmail.com', 'I really want to meet up');

 SELECT * FROM tbl_emails;