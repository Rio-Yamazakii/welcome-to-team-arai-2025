-- database_operations.sql

-- ① CREATE - テーブル作成
CREATE TABLE technologies (
    technology_id INT PRIMARY KEY AUTO_INCREMENT,
    language_name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE forms (
    form_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT,
    technology_id INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ② INSERT - データ挿入
INSERT INTO technologies (technology_id, language_name) VALUES
(1, 'HTML'),
(2, 'PHP'),
(3, 'CSS'),
(4, 'JAVA'),
(5, 'Ruby');

INSERT INTO forms (form_id, name, email, age, technology_id) VALUES
(1, 'テスト1', 'test1@com', 10, 1),
(2, 'テスト2', 'test2@com', 20, 3),
(3, 'テスト3', 'test3@com', 30, 2),
(4, 'テスト4', 'test4@com', 40, 5),
(5, 'テスト5', 'test5@com', 50, 4);

-- ③ SELECT - データ取得
-- formsテーブルの「名前」「メールアドレス」を取得
SELECT name, email FROM forms;

-- ④ UPDATE - データ更新
-- フォームIDが「1」の名前を「テスト太郎」に変更
UPDATE forms SET name = 'テスト太郎' WHERE form_id = 1;

-- ⑤ DELETE - データ削除（物理削除）
-- フォームIDが「2」のデータを削除
DELETE FROM forms WHERE form_id = 2;

-- 論理削除の説明（コメントとして記載）
-- 物理削除：実際にデータをDBから削除する
-- 論理削除：削除フラグや削除日時を設定し、データは残すが削除されたとみなす
-- 論理削除の例：
-- ALTER TABLE forms ADD COLUMN deleted_at DATETIME DEFAULT NULL;
-- UPDATE forms SET deleted_at = NOW() WHERE form_id = 2;
-- SELECT * FROM forms WHERE deleted_at IS NULL; -- 削除されていないデータのみ取得

-- ⑥ INNER JOIN - テーブル結合
-- フォームIDが「3」の「名前」と「得意な言語」を取得
SELECT f.name, t.language_name
FROM forms f
INNER JOIN technologies t ON f.technology_id = t.technology_id
WHERE f.form_id = 3;

-- ⑦ ALTER TABLE - テーブル構造変更
-- formsテーブルに「出身」というカラムを追加
ALTER TABLE forms ADD COLUMN birthplace VARCHAR(255);

-- 出身データを更新
UPDATE forms SET birthplace = '東京' WHERE form_id = 1;
UPDATE forms SET birthplace = '神奈川' WHERE form_id = 3;
UPDATE forms SET birthplace = '埼玉' WHERE form_id = 4;
UPDATE forms SET birthplace = '千葉' WHERE form_id = 5;