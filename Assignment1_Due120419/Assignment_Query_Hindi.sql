-- using database called BCPR294_Hindi for future reference
use BCPR294_Hindi;
-- Testing Hindi communitys tables
SELECT * FROM Users;
SELECT * FROM Post;
SELECT * FROM BackupPost;

-- Change Query & Test
UPDATE Users SET userEmail = 'OMGOMG12345@gmail.com' WHERE userName = 'arcuMorbi';
SELECT * FROM Users;

-- Simple Query 
SELECT *
FROM Post 
WHERE postDate > '2019-05-22';

-- Complex Query
SELECT Users.userName, CONCAT(firstName, ' ', lastName) AS 'Full Name', userCountry, userEmail, postTitle, postDate
FROM Users 
JOIN Post on Users.userName = Post.userName
WHERE (userCountry = 'Japan' OR userCountry = 'South Korea')
OR (firstName LIKE 'D%');

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
INSERT INTO `Post` (`postNum`,`postTitle`,`postContent`,`postDate`,`noOfLikes`, `userName`) VALUES (6,"This is a test thing","Is trigger working ???","19-04-10",1, "arcuMorbi");
SELECT * FROM BackupPost;