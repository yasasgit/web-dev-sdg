CREATE
DATABASE invest_db;

USE
invest_db;

CREATE TABLE users
(
    id         INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username   VARCHAR(50)  NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    accType    VARCHAR(10)  NOT NULL,
    firstame      VARCHAR(50)  NOT NULL,
    lastname      VARCHAR(50)  NOT NULL,
    dob        VARCHAR(25)  NOT NULL,
    gender     VARCHAR(1)   NOT NULL,
    country    VARCHAR(2)  NOT NULL,
    phone      VARCHAR(15)  NOT NULL,
    email      VARCHAR(45)  NOT NULL UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
