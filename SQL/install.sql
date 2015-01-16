--
-- Structure de la table `sa_users`
--

DROP TABLE IF EXISTS sa_users ;
CREATE TABLE sa_users (user_id BIGINT(20)  AUTO_INCREMENT NOT NULL,
user_firstname VARCHAR(60),
user_lastname VARCHAR(60),
user_registered DATETIME,
user_email VARCHAR(100),
user_status INT(11),
user_login VARCHAR(60),
PRIMARY KEY (user_id) ) ENGINE=InnoDB;

--
-- Structure de la table `sa_reports`
--

DROP TABLE IF EXISTS sa_reports ;
CREATE TABLE sa_reports (report_id BIGINT(20)  AUTO_INCREMENT NOT NULL,
report_begin DATETIME,
report_end DATETIME,
report_latitude FLOAT(25),
report_longitude FLOAT(25),
report_status INT(11),
report_IP VARCHAR(100),
user_id BIGINT(20) NOT NULL,
PRIMARY KEY (report_id) ) ENGINE=InnoDB;

ALTER TABLE sa_reports ADD CONSTRAINT FK_sa_reports_user_id FOREIGN KEY (user_id) REFERENCES sa_users (user_id);

