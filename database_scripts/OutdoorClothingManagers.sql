CREATE TABLE OutdoorClothingManagers (
    OutdoorClothingManagerID INT(11) NOT NULL AUTO_INCREMENT,
    emailAddress VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    pronouns VARCHAR(60) NOT NULL,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    dateCreated DATETIME NOT NULL,
    PRIMARY KEY (OutdoorClothingManagerID)
);

INSERT INTO OutdoorClothingManagers(emailAddress, password, pronouns, firstName, lastName, dateCreated) 
VALUES
('seb@clothing.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Taylor', 'Swift', NOW()),
('dany@clothing.com', SHA2('s3cur3P@ssw0rd', 256), 'He/Him', 'John', 'Doe', NOW()),
('ivy@clothing.com', SHA2('b00kR3v3rse', 256), 'He/Him', 'Alex', 'Smith', NOW());

SELECT * FROM OutdoorClothingManagers;

