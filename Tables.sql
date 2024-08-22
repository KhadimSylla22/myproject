CREATE TABLE produits(
    idproduits INT PRIMARY KEY,
    nom VARCHAR(100),
    marque VARCHAR(100),
    categorie VARCHAR(30),
    descriptif VARCHAR(300),
    photo VARCHAR(100),
    prix INT,
    Quantite INT


);

CREATE TABLE Commandes(
    idCommande INT PRIMARY KEY,
    date INT,
    email VARCHAR(100) REFERENCES email(clients),
    etat VARCHAR(100)
);

CREATE TABLE lignescommandes(
    dLigneCommande VARCHAR(100),
    idCommande INT REFERENCES idCommande(Commandes),
     idProduits INT REFERENCES idproduits(produits),
     quantite INT,
     montant INT

);
