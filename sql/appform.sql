use containerdb;

DROP TABLE IF EXISTS tbl_appointment;

CREATE TABLE tbl_appointment(
    ID INT(11) AUTO_INCREMENT,
    FNAME VARCHAR(30) NOT NULL,
    LNAME VARCHAR(30) NOT NULL,  
    EMAIL VARCHAR (50) NOT NULL,
    PHONE VARCHAR (20) NOT NULL,
    DAYOF VARCHAR (30) NOT NULL,
    TIMEOF VARCHAR (20) NOT NULL,
    MSG VARCHAR (255) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_appointment (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES('Bob', 'Smith', 'bobsmith@hotmail.com', '0219485678', 'Tuesday', '3pm', 'Hey id like to meet at this time');
INSERT INTO tbl_appointment (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES('Jess', 'stevenson', 'jesssssss@gmail.com', '0223457634', 'Monday', '10am', 'This time would be ideal');
INSERT INTO tbl_appointment (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES('Conor', 'Wanger', 'connorTe@yahoo.com', '0278567845', 'Monday', '1pm', 'Thanks');
INSERT INTO tbl_appointment (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES('Rachel', 'Wan', 'Rach0930@gmail.com', '0203456367', 'Friday', '11am', 'Looking foward to the meeting');
INSERT INTO tbl_appointment (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES('Alan', 'smither', 'RAS@gmail.com', '0233434', 'Thursday', '11am', 'Good time to have a meeting');

SELECT * FROM tbl_appointment;



