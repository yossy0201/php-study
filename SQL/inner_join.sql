//inner-joinは結合する両テーブルから片方のみの全ての内容を取得

SELECT * FROM dogs
INNER JOIN owners 
ON dogs.owner_id = owners.id;

ownerテーブルから全てのカラムを取得
dogsテーブルのowner_idとownersテーブルのidを結合
