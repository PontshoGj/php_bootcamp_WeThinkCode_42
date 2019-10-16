SELECT UPPER(user_card.last_name) AS NAME, user_card.first_name, subscription.price FROM user_card subscription
WHERE member.id_sub = (SELECT subscription.id_sub FROM subscription WHERE subscription.price > 42) && member.id_user_card = user_card.id_

SELECT * FROM member
WHERE id_sub = (SELECT id_sub FROM subscription WHERE price > 42);

SELECT count(*) FROM `member` 
WHERE id_sub = (SELECT id_sub FROM subscription WHERE price > 42);

SELECT count(*) FROM subscription 
WHERE  price > 42;