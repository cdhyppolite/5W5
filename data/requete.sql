-- Sélectionner titre
SELECT post_title FROM wp_posts

-- Sélectionner titre (Cours)
SELECT post_title FROM wp_posts WHERE post_title LIKE '___-___ %'

-- Sélectionner titre (Cours) sans trois premier chiffre
SELECT SUBSTR(post_title,5) FROM wp_posts WHERE post_title LIKE '___-___ %'

-- Update titre (Cours) sans trois premier chiffre
UPDATE wp_posts 
SET post_title = CONCAT(SUBSTR(post_title,5,3), SUBSTR(post_title,8))
WHERE post_title LIKE '___-___%'