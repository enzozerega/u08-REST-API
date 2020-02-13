DROP DATABASE IF EXISTS laravel_store;
CREATE DATABASE laravel_store;
USE laravel_store;

CREATE TABLE products (productId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
                       productTitle VARCHAR(256),
                       productType VARCHAR(256),
                       productProducer VARCHAR(256),
                       productPrice DECIMAL(10),
                       productAmount INT(10));

CREATE TABLE cart (
                        orderId INTEGER not null primary key AUTO_INCREMENT,
                        productId INTEGER,
                        orderAmount INT(10),
                        FOREIGN KEY (productId) REFERENCES products (productId) ON UPDATE CASCADE ON DELETE CASCADE);

INSERT INTO products (productTitle,
                      productType,
                      productProducer,
                      productPrice,
                      productAmount)
VALUES ('Mellanmjölk', 'Mejeri & Ägg', 'Coop', 12.75, 10),
       ('Mellanmjölk', 'Mejeri & Ägg', 'Arla', 10.95, 20),
       ('Mellanmjölk', 'Mejeri & Ägg','Anglamark', 11.95, 30),
       ('Bananer', 'Frukt & Grönsaker', 'Ecuador', 28.05, 55),
       ('Bananer', 'Frukt & Grönsaker', 'Änglamark', 29.95, 45),
       ('Potatis', 'Frukt & Grönsaker', 'Storbritanien', 8.95, 121),
       ('Potatis', 'Frukt & Grönsaker', 'Storbritanien', 21.95, 78),
       ('Potatis', 'Frukt & Grönsaker', 'USA', 95.9, 52),
       ('Äpple', 'Frukt & Grönsaker', 'Holland', 29.95, 130),
       ('Äpple', 'Frukt & Grönsaker', 'Italien', 29.95, 89),
       ('Tomater', 'Frukt & Grönsaker', 'Marocko', 34.95, 76),
       ('Tomater', 'Frukt & Grönsaker', 'Holland', 44.95, 59),
       ('Coctailomater', 'Frukt & Grönsaker', 'Marocko', 69, 41),
       ('Smör', 'Mejeri & Ägg', 'Valio', 29.9, 280),
       ('Smör', 'Mejeri & Ägg', 'Coop', 38.5, 321),
       ('Smör', 'Mejeri & Ägg', 'Arla', 46.95, 92),
       ('Juice', 'Mejeri & Ägg', 'Innocent', 29.95, 18),
       ('Juice', 'Mejeri & Ägg', 'God Morgon', 17.95, 2),
       ('Juice', 'Mejeri & Ägg', 'Bravo', 24.95, 90),
       ('Ägg', 'Mejeri & Ägg', 'Änglamark', 39.95, 111),
       ('Ägg', 'Mejeri & Ägg', 'Coop', 39.95, 111),
       ('Kycklingfile', 'Kött & Fågel', 'Coop', 110.08, 43),
       ('Kycklingfile', 'Kött & Fågel', 'Guldfågel', 80.1, 73),
       ('Kyckling Hel', 'Kött & Fågel', 'Reko Kyckling', 248, 17),
       ('Kyckling Hel', 'Kött & Fågel', 'Kronofågel Bpsarp', 230, 2),
       ('Lövbiff', 'Kött & Fågel', 'Gräsbeteskött', 38.24, 16),
       ('Lax Kallrökt', 'Fisk & Skaldjur', 'Änglamark', 47.95, 52),
       ('Lax Kallrökt', 'Fisk & Skaldjur', 'Coop', 52.95, 53),
       ('Frukost', 'Bröd & Bageri', 'Wasa', 20.95, 20),
       ('Råg', 'Bröd & Bageri', 'Fazer', 24.50, 12),
       ('Knäckebröd', 'Bröd & Bageri', 'Coop', 10.95, 42),
       ('Semla', 'Bröd & Bageri', 'Easybake', 29.95, 8),
       ('Kanelsnäcka', 'Bröd & Bageri', 'Alimenta', 9.95, 14),
       ('Präst', 'Ost', 'Arla', 64.73, 13),
       ('Präst', 'Ost',  'Skånemejerier', 87.5, 13);

SELECT * FROM products;