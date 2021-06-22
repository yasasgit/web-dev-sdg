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
    Arts                  int         NOT NULL,
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
VALUES ('Colombo', 460, 650, 34, 540, 194, 24, 25);
INSERT INTO academystats
VALUES ('Gampaha', 603, 259, 12, 209, 51, 7, 1);
INSERT INTO academystats
VALUES ('Kalutara', 474, 171, 8, 122, 22, 2, 1);
INSERT INTO academystats
VALUES ('Kandy', 398, 110, 11, 184, 40, 4, 8);
INSERT INTO academystats
VALUES ('Matale', 171, 22, 2, 18, 10, 2, 3);
INSERT INTO academystats
VALUES ('Nuwara Eliya', 152, 27, 4, 5, 3, 5, 6);
INSERT INTO academystats
VALUES ('Galle', 563, 179, 9, 168, 60, 10, 5);
INSERT INTO academystats
VALUES ('Matara', 394, 139, 4, 162, 42, 2, 2);
INSERT INTO academystats
VALUES ('Hambantota', 297, 44, 6, 85, 16, 4, 3);
INSERT INTO academystats
VALUES ('Jaffna', 331, 43, 8, 70, 18, 1, 9);
INSERT INTO academystats
VALUES ('Kilinochchi', 42, 4, 5, 2, 1, 7, 9);
INSERT INTO academystats
VALUES ('Mannar', 48, 6, 1, 5, 3, 2, 7);
INSERT INTO academystats
VALUES ('Mullaitivu', 40, 5, 2, 5, 1, 7, 8);
INSERT INTO academystats
VALUES ('Vavuniya', 73, 12, 1, 1, 5, 1, 2);
INSERT INTO academystats
VALUES ('Batticalo', 228, 25, 3, 6, 4, 5, 3);
INSERT INTO academystats
VALUES ('Ampara', 352, 25, 3, 8, 1, 3, 1);
INSERT INTO academystats
VALUES ('Trincomalee', 216, 32, 3, 7, 5, 1, 4);
INSERT INTO academystats
VALUES ('Kurunegala', 759, 182, 7, 170, 34, 4, 2);
INSERT INTO academystats
VALUES ('Puttalam', 254, 53, 6, 18, 13, 3, 2);
INSERT INTO academystats
VALUES ('Anuradhapura', 425, 64, 9, 18, 15, 5, 7);
INSERT INTO academystats
VALUES ('Polonnaruwa', 131, 23, 2, 2, 2, 4, 3);
INSERT INTO academystats
VALUES ('Badulla', 269, 50, 6, 56, 11, 3, 2);
INSERT INTO academystats
VALUES ('Moneragala', 171, 33, 1, 2, 3, 4, 2);
INSERT INTO academystats
VALUES ('Rathnapura', 449, 133, 8, 107, 29, 2, 1);
INSERT INTO academystats
VALUES ('Kegalle', 339, 65, 2, 75, 6, 1, 9);