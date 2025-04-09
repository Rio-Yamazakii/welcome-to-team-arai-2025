CREATE

CREATE TABLE forms (
    formID INT PRIMARY KEY,
    name VARCHAR(100),
    mailaddres VARCHAR(100),
    age INT,
    techID INT
);

CREATE TABLE technologies (
    techID INT PRIMARY KEY,
    lang VARCHAR(100)
);

INSERT

INSERT INTO forms VALUES
(1, 'テスト1', 'test1@com', 10, 1),
(2, 'テスト2', 'test2@com', 20, 3),
(3, 'テスト3', 'test3@com', 30, 2),
(4, 'テスト4', 'test4@com', 40, 5),
(5, 'テスト5', 'test5@com', 50, 4);

INSERT INTO technologies VALUES
(1, 'HTML'),
(2, 'PHP'),
(3, 'CSS'),
(4, 'JAVA'),
(5, 'Ruby');

SELECT

SELECT name, mailaddres FROM forms;

UPDATE

UPDATE forms SET name = 'テスト太郎' WHERE formID = 1;

DELETE

DELETE FROM forms WHERE formID = 2;

INNER JOIN

SELECT f.name, t.lang
FROM forms f
INNER JOIN technologies t ON f.techID = t.techID
WHERE f.formD = 3;

ALTER

ALTER TABLE forms ADD from VARCHAR(100);

UPDATE forms SET from = '東京' WHERE formID = 1;
UPDATE forms SET from = '神奈川' WHERE formID = 2;
UPDATE forms SET from = '埼玉' WHERE formID = 3;
UPDATE forms SET from = '千葉' WHERE formID = 4;
