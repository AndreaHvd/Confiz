ALTER TABLE utilisateurs MODIFY email VARCHAR(100);
ALTER TABLE confiseries MODIFY nom VARCHAR(50);


INSERT INTO utilisateurs(username, password, type, prenom, nom, ddn)
VALUES ('alice82', md5('1234'), 'gerant', 'Alice', 'Dumoulin', '1982-11-26');
INSERT INTO utilisateurs(username, password, type, prenom, nom, ddn)
VALUES ('bobdu27', md5('1234'), 'client', 'Robert', 'Kinsey', '1982-10-12');
INSERT INTO utilisateurs(username, password, type, prenom, nom, ddn)
VALUES ('tywin', md5('1234'), 'client', 'Charles', 'Dance', '1946-10-10');

INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (1, 343, 'rue guilty spark', '16807', 'Anneaux-les-bains', 'France');
INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (2, 2401, 'avenue du pénitent', '54000', 'Nancy', 'France');
INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (3, 314, 'route du rayon', '22300', 'Lannion', 'France');

INSERT INTO boutiques(boutique_id, nom, adresse_id)
VALUES (1, 'La mika-line', 1);
INSERT INTO boutiques(boutique_id, nom, adresse_id)
VALUES (2, 'OK Bonbons', 2);
INSERT INTO boutiques(boutique_id, nom, adresse_id)
VALUES (3, 'Confiserinator', 3);

INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (1, 'Bergamote (de Nancy) 250g', 'Bergamote', 3.7);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (2, 'Nougatine casse 220g', 'Nougat', 3.9);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (3, 'Papillote nougat vanille 250g', 'Nougat', 4.5);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (4, 'Ceinture citrique framboise (boite de 200)', 'Acidule', 15.90);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (5, 'Bouteille cola cerise citrique 100g', 'Acidule', 1.8);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (6, 'Dragibus 100g', 'Haribo', 1.8);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (7, 'Fraises Tagada 100g', 'Haribo', 1.5);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (8, 'Crocodiles 100g', 'Haribo', 1.55);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (9, 'Ourson guimauve chocolat lait 100g', 'Chocolat', 1.9);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (10, 'Filet de pièces chocolat 100g', 'Chocolat', 1.95);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (11, 'Toblerone 35g', 'Chocolat', 1.20);

INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 1);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 1, 4);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 6);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 7);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 7);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 7);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 7);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 2, 7);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);
INSERT INTO stocks(date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id)
VALUES (NOW() + INTERVAL 14 DAY, NOW(), 3, 10);