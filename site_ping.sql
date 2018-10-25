DROP DATABASE IF EXISTS site_ping;

CREATE DATABASE IF NOT EXISTS site_ping;
USE site_ping;
# -----------------------------------------------------------------------------
#       TABLE : USER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USER
 (
   ID INTEGER(11) NOT NULL AUTO_INCREMENT ,
   LOGIN CHAR(32) NOT NULL  ,
   PASSWORD CHAR(32) NOT NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FILES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FILES
 (
   ID INTEGER(11) NOT NULL AUTO_INCREMENT ,
   NOM CHAR(64) NOT NULL  ,
   URL CHAR(255) NOT NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ARTICLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ARTICLE
 (
   ID INTEGER(11) NOT NULL AUTO_INCREMENT ,
   ID_AUTEUR INTEGER(11) NOT NULL  ,
   TITLE CHAR(64) NOT NULL  ,
   TEXTE CHAR(255) NOT NULL  ,
   TYPE CHAR(32) NOT NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ARTICLE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ARTICLE_USER
     ON ARTICLE (ID_AUTEUR ASC);

# -----------------------------------------------------------------------------
#       TABLE : ARTICLE_IMAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ARTICLE_IMAGE
 (
   ID INTEGER(11) NOT NULL  ,
   ID_1 INTEGER(11) NOT NULL  
   , PRIMARY KEY (ID,ID_1) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ARTICLE_IMAGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ARTICLE_IMAGE_FILES
     ON ARTICLE_IMAGE (ID ASC);

CREATE  INDEX I_FK_ARTICLE_IMAGE_ARTICLE
     ON ARTICLE_IMAGE (ID_1 ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE ARTICLE 
  ADD FOREIGN KEY FK_ARTICLE_USER (ID_AUTEUR)
      REFERENCES USER (ID) ;


ALTER TABLE ARTICLE_IMAGE 
  ADD FOREIGN KEY FK_ARTICLE_IMAGE_FILES (ID)
      REFERENCES FILES (ID) ;


ALTER TABLE ARTICLE_IMAGE 
  ADD FOREIGN KEY FK_ARTICLE_IMAGE_ARTICLE (ID_1)
      REFERENCES ARTICLE (ID) ;

