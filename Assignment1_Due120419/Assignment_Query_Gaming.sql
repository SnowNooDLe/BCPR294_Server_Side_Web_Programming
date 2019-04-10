-- using database called BCPR294_Gaming for future reference
use BCPR294_Gaming;
-- Testing Gaming communitys tables
SELECT * FROM Users;
SELECT * FROM Post;
SELECT * FROM BackupPost;

-- Change Query & Test
UPDATE Users SET userPassword = 'OMGOMG12345@' WHERE userName = 'arcuMorbi';
SELECT * FROM Users;

-- Simple Query 
SELECT *
FROM Users 
WHERE lastName LIKE 'T%' OR lastName LIKE 'P%';

-- Complex Query
SELECT Users.userName, CONCAT(firstName, ' ', lastName) AS 'Full Name', userDOB, userEmail, postTitle, postDate
FROM Users 
JOIN Post on Users.userName = Post.userName
WHERE (userDOB BETWEEN '2018-08-17' AND '2018-10-08');

-- Awesomely Complex Query - Trigger
-- Everytime user writes new post, not only in Post table, will backup into BackupPost
-- In case user accidently deletes it or if its related to crime or something bad and user deleted, we can cooperate to police as an evidence
DELIMITER $$
DROP TRIGGER PostBackup_AI$$

CREATE TRIGGER PostBackup_AI
AFTER INSERT ON Post
FOR EACH ROW
-- Logic 
BEGIN
	INSERT INTO BackupPost (postTitle, postContent, postDate, userName)
	VALUES (NEW.postTitle, NEW.postContent, NEW.postDate, NEW.userName);
END;
$$
DELIMITER ;

-- Test query for Trigger
INSERT INTO `Post` (`postNum`,`postTitle`,`postContent`,`postDate`,`noOfLikes`, `userName`) VALUES (6,"This is a test post","Is trigger working ?","19-04-09",1, "euturpis");
SELECT * FROM BackupPost;