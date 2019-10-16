SELECT count(id_film) AS 'nb__short-films' FROM film
WHERE duration <= 42 && id_genre = (SELECT id_genre from genre WHERE name = 'short film');