-- 3-1 SELECT
SELECT name, email FROM laravel_forms;

-- 3-2 UPDATE
UPDATE laravel_forms SET name = 'テスト太郎' WHERE form_id = 1;

-- 3-3 DELETE
DELETE FROM laravel_forms WHERE form_id = 2;

-- 3-4 INNER JOIN
SELECT f.name, t.language
FROM laravel_forms f
INNER JOIN laravel_technologies t ON f.tech_id = t.tech_id
WHERE f.form_id = 3;

-- 3-5 ALTER
ALTER TABLE laravel_forms ADD origin VARCHAR(255);

-- origin UPDATE
UPDATE laravel_forms SET origin = '東京' WHERE form_id = 1;
UPDATE laravel_forms SET origin = '神奈川' WHERE form_id = 2;
UPDATE laravel_forms SET origin = '埼玉' WHERE form_id = 3;
UPDATE laravel_forms SET origin = '千葉' WHERE form_id = 4;
