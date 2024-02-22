
CREATE TABLE commandes(
    commande_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR (255),
    last_name VARCHAR (255),
    produits VARCHAR (255),
    quantité INT ,
    PRIMARY KEY (commande_id)
    );



CREATE TABLE clients (

    client_id INT NOT NULL AUTO_INCREMENT,
    LastName varchar(255),
    FirstName varchar(255),
    email varchar(255),
    PRIMARY KEY (client_id)
    );
