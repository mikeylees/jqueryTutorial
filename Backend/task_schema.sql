DROP DATABASE IF EXISTS tasksApp;
CREATE DATABASE IF NOT EXISTS tasksApp;
USE tasksApp;
CREATE TABLE tasks 
(
	taskid	INT(11)	PRIMARY KEY	AUTO_INCREMENT,
    task	VARCHAR(255),
    createdOn	DATE,
    createdBy	INT(11)
    /*
    FOREIGN KEY(createdBy)
    references (users.user.UserID)
    */
);
INSERT INTO tasks(task,createdOn,createdBy) VALUES('Test app on alpha servers ',NOW(),00000000001);
INSERT INTO tasks(task,createdOn,createdBy) VALUES('Test app on beta servers ',NOW(),00000000001);
INSERT INTO tasks(task,createdOn,createdBy) VALUES('Test app on feature servers ',NOW(),00000000001);
