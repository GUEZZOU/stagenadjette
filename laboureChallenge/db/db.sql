drop database if exists challenge;
create database if not exists challenge;
use challenge;

CREATE Table ChargeClient(
    idChargeClient INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    montant  DECIMAL NOT NULL,
    date DATE
)ENGINE = INNODB;

create table utilisateurs(
    idUtilisateurs int(11) auto_increment primary key,
    login varchar(50),
    email varchar(255),
    role varchar(50),   -- admin ou visiteur
    etat int(1),        -- 1:activé 0:desactivé
    pwd varchar(255)
) ENGINE = INNODB;
-- CREATE TABLE honoraireAnnual(
--     idHonoraireAnnual int(11) auto_increment primary key,
--     montant  DECIMAL NOT NULL,
--     date DATE NOT NULL,
--     moisHonoraire VARCHAR (100) NOT NULL,
--     idChargeClient INT NOT NULL
-- )ENGINE = INNODB;

-- ALTER Table honoraireAnnual ADD constraint FOREIGN KEY  (idChargeClient ) REFERENCES ChargeClient (idChargeClient );

INSERT INTO  utilisateurs( login, role, email, pwd) VALUES
('admin','ADMIN','Nad@gmail.com',md5('123')),
('user1','USER','user1@gmail.com',md5('123')),
('user2','USER','user2@gmail.com',md5('123'));

INSERT INTO  ChargeClient( nom, prenom) VALUES
('nad','GUZ',2022-10-04,50),
('Alim','BEN',2022-10-04,100),
('nad','GUZ'),
('Alim','BEN'),
('nad','GUZ'),
('Alim','BEN'),
('nad','GUZ'),
('Alim','BEN'),
('nad','GUZ'),
('Alim','BEN');


