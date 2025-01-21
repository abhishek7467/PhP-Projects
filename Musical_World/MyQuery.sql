-- Create the User Register Table
CREATE TABLE
    `Musical_World`.`user_register` (
        `s_no` INT NOT NULL AUTO_INCREMENT,
        `email` VARCHAR(200) NOT NULL,
        `name` VARCHAR(200) NOT NULL,
        `password` VARCHAR(50) NOT NULL,
        `DT` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`s_no`),
        UNIQUE (`email`)
    ) ENGINE = InnoDB;

-- Create table for storing information about the song 
CREATE TABLE
    `Musical_World`.`SongInfo` (
        `s_no` INT NOT NULL AUTO_INCREMENT,
        `Song_Title` VARCHAR(800) NOT NULL,
        `Writer` VARCHAR(800) NOT NULL,
        `Singer` VARCHAR(800) NOT NULL,
        `CoverImage` LONGBLOB NOT NULL,
        `Year` VARCHAR(4) NOT NULL,
        `AudioFile` LONGBLOB NOT NULL,
        `Movie_name` VARCHAR(200) NOT NULL,
        `Language` VARCHAR(800) NOT NULL,
        `ReviewsAndRatings` VARCHAR(800) NULL DEFAULT NULL,
        `Keywords_tags` TEXT NOT NULL,
        `GenreCategory` TEXT NOT NULL,
        `DT` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`s_no`)
    ) ENGINE = InnoDB;

ALTER TABLE `SongInfo` ADD `AuioNameGivenByServer` VARCHAR(200) NOT NULL AFTER `AudioFile`,
ADD `Temp_Name` VARCHAR(200) NOT NULL AFTER `AuioNameGivenByServer`,
ADD `AudioType` VARCHAR(50) NOT NULL AFTER `Temp_Name`;

ALTER TABLE `SongInfo` ADD `AudioFileSize` INT NOT NULL AFTER `AudioType`;

-- Create table Playlist  
CREATE TABLE
    `Musical_World`.`PlayList` (
        `s_no` INT NOT NULL AUTO_INCREMENT,
        `email` VARCHAR(800) NOT NULL,
        `song_id` INT NOT NULL,
        `DT` INT NOT NULL,
        PRIMARY KEY (`s_no`)
    ) ENGINE = InnoDB;

-- Create Artist Table 
CREATE TABLE
    `Musical_World`.`Artist` (
        `s_no` INT NOT NULL AUTO_INCREMENT,
        `ArtistName` VARCHAR(200) NOT NULL,
        `ArtistImage` LONGBLOB NOT NULL,
        `DT` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`s_no`)
    ) ENGINE = InnoDB;

-- Create Album TABLE 
CREATE TABLE
    `Musical_World`.`Album` (
        `s_no` INT NOT NULL AUTO_INCREMENT,
        `Album_name` VARCHAR(200) NOT NULL,
        `Album_Singer` VARCHAR(800) NOT NULL,
        `Movie` VARCHAR(200) NOT NULL,
        `AlbumPhoto` LONGBLOB NOT NULL,
        `DT` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`s_no`)
    ) ENGINE = InnoDB;