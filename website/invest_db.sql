CREATE
    DATABASE invest_db;

USE
    invest_db;

CREATE TABLE users
(
    id           INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email        VARCHAR(320) NOT NULL UNIQUE,
    password     VARCHAR(255) NOT NULL,
    account_type VARCHAR(10)  NOT NULL,
    firstname    VARCHAR(50)  NOT NULL,
    lastname     VARCHAR(50)  NOT NULL,
    dob          VARCHAR(20)  NOT NULL,
    gender       VARCHAR(1)   NOT NULL,
    country      VARCHAR(2)   NOT NULL,
    phone        VARCHAR(15)  NOT NULL,
    created_at   DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE investors
(
    email            VARCHAR(320) NOT NULL PRIMARY KEY,
    address1         VARCHAR(255) NOT NULL,
    address2         VARCHAR(255) NOT NULL,
    company_name     VARCHAR(50)  NOT NULL,
    investment_type  VARCHAR(30)  NOT NULL,
    investment_stage VARCHAR(20)  NOT NULL,
    invest_amount    VARCHAR(25)  NOT NULL,
    file_path        VARCHAR(255) NOT NULL,
    FOREIGN KEY (email) REFERENCES users (email)
);


CREATE TABLE academy_stats
(
    district              VARCHAR(50) NOT NULL PRIMARY KEY,
    Arts                  int         NOT NULL,
    ManagementAndCommerce int         NOT NULL,
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

INSERT INTO academy_stats
VALUES ('Colombo', 460, 650, 34, 540, 194, 24, 25, 93, 230, 61, 292, 88);
INSERT INTO academy_stats
VALUES ('Gampaha', 603, 259, 12, 209, 51, 7, 1, 46, 60, 10, 114, 32);
INSERT INTO academy_stats
VALUES ('Kalutara', 474, 171, 8, 122, 22, 2, 1, 39, 18, 5, 9, 28);
INSERT INTO academy_stats
VALUES ('Kandy', 398, 110, 11, 184, 40, 4, 8, 69, 45, 11, 74, 12);
INSERT INTO academy_stats
VALUES ('Matale', 171, 22, 2, 18, 10, 2, 3, 8, 6, 3, 27, 11);
INSERT INTO academy_stats
VALUES ('Nuwara Eliya', 152, 27, 4, 5, 3, 5, 6, 2, 5, 2, 27, 5);
INSERT INTO academy_stats
VALUES ('Galle', 563, 179, 9, 168, 60, 10, 5, 65, 69, 13, 113, 58);
INSERT INTO academy_stats
VALUES ('Matara', 394, 139, 4, 162, 42, 2, 2, 63, 56, 7, 122, 62);
INSERT INTO academy_stats
VALUES ('Hambantota', 297, 44, 6, 85, 16, 4, 3, 18, 34, 1, 54, 23);
INSERT INTO academy_stats
VALUES ('Jaffna', 331, 43, 8, 70, 18, 1, 9, 36, 50, 8, 113, 53);
INSERT INTO academy_stats
VALUES ('Kilinochchi', 42, 4, 5, 2, 1, 7, 9, 1, 3, 2, 2, 1);
INSERT INTO academy_stats
VALUES ('Mannar', 48, 6, 1, 5, 3, 2, 7, 2, 1, 4, 2, 1);
INSERT INTO academy_stats
VALUES ('Mullaitivu', 40, 5, 2, 5, 1, 7, 8, 1, 1, 3, 1, 2);
INSERT INTO academy_stats
VALUES ('Vavuniya', 73, 12, 1, 1, 5, 1, 2, 2, 6, 1, 9, 3);
INSERT INTO academy_stats
VALUES ('Batticalo', 228, 25, 3, 6, 4, 5, 3, 2, 8, 4, 35, 21);
INSERT INTO academy_stats
VALUES ('Ampara', 352, 25, 3, 8, 1, 3, 1, 8, 10, 3, 54, 19);
INSERT INTO academy_stats
VALUES ('Trincomalee', 216, 32, 3, 7, 5, 1, 4, 3, 4, 1, 16, 14);
INSERT INTO academy_stats
VALUES ('Kurunegala', 759, 182, 7, 170, 34, 4, 2, 88, 53, 16, 106, 46);
INSERT INTO academy_stats
VALUES ('Puttalam', 254, 53, 6, 18, 13, 3, 2, 15, 10, 5, 17, 9);
INSERT INTO academy_stats
VALUES ('Anuradhapura', 425, 64, 9, 18, 15, 5, 7, 13, 13, 1, 42, 8);
INSERT INTO academy_stats
VALUES ('Polonnaruwa', 131, 23, 2, 2, 2, 4, 3, 6, 1, 5, 13, 1);
INSERT INTO academy_stats
VALUES ('Badulla', 269, 50, 6, 56, 11, 3, 2, 12, 20, 2, 56, 16);
INSERT INTO academy_stats
VALUES ('Moneragala', 171, 33, 1, 2, 3, 4, 2, 2, 8, 1, 17, 3);
INSERT INTO academy_stats
VALUES ('Rathnapura', 449, 133, 8, 107, 29, 2, 1, 41, 26, 3, 89, 34);
INSERT INTO academy_stats
VALUES ('Kegalle', 339, 65, 2, 75, 6, 1, 9, 30, 26, 2, 52, 15);