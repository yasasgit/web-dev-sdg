CREATE
    DATABASE invest_db;

USE
    invest_db;

CREATE TABLE users
(
    id         INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email      VARCHAR(320) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    acctype    VARCHAR(8)   NOT NULL,
    firstame   VARCHAR(50)  NOT NULL,
    lastname   VARCHAR(50)  NOT NULL,
    dob        VARCHAR(20)  NOT NULL,
    gender     VARCHAR(1)   NOT NULL,
    country    VARCHAR(2)   NOT NULL,
    phone      VARCHAR(15)  NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE academystats
(
    id                    INT         NOT NULL PRIMARY KEY AUTO_INCREMENT,
    district              VARCHAR(50) NOT NULL UNIQUE,
    ManagementandCommerce int         NOT NULL,
    Law                   int         NOT NULL,
    Science               int         NOT NULL,
    Medicine              int         NOT NULL,
    VeterinaryScience     int         NOT NULL,
    Dentistry             int         NOT NULL,
    Agriculture           int         NOT NULL,
    Engineering           int         NOT NULL,
    Architecture          int         NOT NULL,
    ComputerScience       int         NOT NULL,
    OtherCourses          int         NOT NULL
);

INSERT INTO academystats
VALUES ('Colombo', 451, 667, 45, 564, 178, 16, 26, 116, 230, 61, 291, 88);
INSERT INTO academystats
VALUES ('Colombo', 451, 667, 45, 564, 178, 16, 26, 116, 230, 61, 291, 88);