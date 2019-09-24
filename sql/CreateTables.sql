DROP TABLE IF EXISTS Images;
DROP TABLE IF EXISTS Services;
DROP TABLE IF EXISTS Admins;



CREATE TABLE Services (
  serviceName varchar(255) PRIMARY KEY,
  servicePrice int(11) NOT NULL,
  photosNumber int(11) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Admins (
  email varchar(30) PRIMARY KEY,
  password varchar(30) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Images (
  name varchar(255) NOT NULL,PRIMARY KEY,
  imgPath varchar(255) NOT NULL,
  serviceName varchar(255) NOT NULL,
  uploadDate datetime NOT NULL,
  FOREIGN KEY (serviceName) REFERENCES Services(serviceName)
                ON DELETE NO ACTION ON UPDATE CASCADE,
  UNIQUE (name, img_path, upload_date)
) ENGINE=InnoDB;