/* Show all elements in the table posts by the ASC (ascendent) or DESC (descending) order of "title" */
SELECT * FROM posts ORDER BY title DESC;

/* itens inside [brackets] are considered optional */
SELECT * FROM posts ORDER BY title [ASC];

/* Show in ASC order by title. If there is any post with the same title, id orders DESC by user_id */
SELECT * FROM posts ORDER BY title ASC, user_id DESC;

/*      There are 3 posts with the title "Joy"
        Each one has a different user_id

        - title will be ordered ASC
        - user_id will be ordered DESC

        So, every set of same titles will be ordered considering user_id DESC
        Like this...

        TITLE  | USER_ID
        "Joy"  |   12
        "Joy"  |    5
        "Joy"  |    1  */

/* Select all Vinicius'posts */
SELECT * FROM posts WHERE user_id=1;

/* Select all comments of Vinicius' posts */
SELECT * FROM comments
WHERE post_id IN
(
    SELECT id FROM posts
    WHERE user_id IN
    (
        SELECT id FROM users WHERE name='Vinicius'
    )
);
