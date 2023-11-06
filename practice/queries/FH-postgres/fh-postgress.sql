SELECT
    name,
    SUBSTRING(name, 0, POSITION(' ' in name)) as first_name,
    SUBSTRING(name, POSITION(' ' in name) + 1) as second_name
FROM users;

UPDATE "users"
SET
    "first_name" = SUBSTRING(name, 0, POSITION(' ' in name)),
    "last_name" = SUBSTRING(name, POSITION(' ' in name) + 1);