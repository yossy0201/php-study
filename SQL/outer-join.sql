// outer-joinで結合した場合は片方のテーブルに対応する条件が
   不在の場合はnullで対応することができる

// 左外部結合は結合時に左側のテーブルを軸にし結合される。
この場合はownersテーブルが軸となり左側に配置され、右側にdogsテーブルが配置される
SELECT * FROM dogs 
LEFT OUTER JOIN owners 
ON dogs.owner_id = owners.id;