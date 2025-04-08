-- database_operations.sql

-- ① CREATE - テーブル作成
CREATE TABLE technologies (
    技術ID INT PRIMARY KEY AUTO_INCREMENT,
    得意な言語 VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE forms (
    フォームID INT PRIMARY KEY AUTO_INCREMENT,
    名前 VARCHAR(255) NOT NULL,
    メールアドレス VARCHAR(255) NOT NULL,
    年齢 INT,
    技術ID INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ② INSERT - データ挿入
INSERT INTO technologies (技術ID, 得意な言語) VALUES
(1, 'HTML'),
(2, 'PHP'),
(3, 'CSS'),
(4, 'JAVA'),
(5, 'Ruby');

INSERT INTO forms (フォームID, 名前, メールアドレス, 年齢, 技術ID) VALUES
(1, 'テスト1', 'test1@com', 10, 1),
(2, 'テスト2', 'test2@com', 20, 3),
(3, 'テスト3', 'test3@com', 30, 2),
(4, 'テスト4', 'test4@com', 40, 5),
(5, 'テスト5', 'test5@com', 50, 4);

-- ③ SELECT - データ取得
-- formsテーブルの「名前」「メールアドレス」を取得
SELECT 名前, メールアドレス FROM forms;

-- ④ UPDATE - データ更新
-- フォームIDが「1」の名前を「テスト太郎」に変更
UPDATE forms SET 名前 = 'テスト太郎' WHERE フォームID = 1;

-- ⑤ DELETE - データ削除（物理削除）
-- フォームIDが「2」のデータを削除
DELETE FROM forms WHERE フォームID = 2;

-- 論理削除の説明（コメントとして記載）
-- 物理削除：実際にデータをDBから削除する
-- 論理削除：削除フラグや削除日時を設定し、データは残すが削除されたとみなす
-- 論理削除の例：
-- ALTER TABLE forms ADD COLUMN deleted_at DATETIME DEFAULT NULL;
-- UPDATE forms SET deleted_at = NOW() WHERE フォームID = 2;
-- SELECT * FROM forms WHERE deleted_at IS NULL; -- 削除されていないデータのみ取得

-- ⑥ INNER JOIN - テーブル結合
-- フォームIDが「3」の「名前」と「得意な言語」を取得
SELECT f.名前, t.得意な言語
FROM forms f
INNER JOIN technologies t ON f.技術ID = t.技術ID
WHERE f.フォームID = 3;

-- ⑦ ALTER TABLE - テーブル構造変更
-- formsテーブルに「出身」というカラムを追加
ALTER TABLE forms ADD COLUMN 出身 VARCHAR(255);

-- 出身データを更新
UPDATE forms SET 出身 = '東京' WHERE フォームID = 1;
UPDATE forms SET 出身 = '神奈川' WHERE フォームID = 3;
UPDATE forms SET 出身 = '埼玉' WHERE フォームID = 4;
UPDATE forms SET 出身 = '千葉' WHERE フォームID = 5;