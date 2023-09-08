CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    era VARCHAR(2) NOT NULL
);

INSERT INTO events (name, date, era)
VALUES
    ('Römisches Reich gegründet', '753-04-21', 'BC'),
    ('Magna Carta unterzeichnet', '1215-06-15', 'AD'),
    ('Entdeckung Amerikas durch Kolumbus', '1492-10-12', 'AD'),
    ('Französische Revolution beginnt', '1789-07-14', 'AD'),
    ('Erster Weltkrieg beginnt', '1914-07-28', 'AD'),
    ('Die Berliner Mauer fällt', '1989-11-09', 'AD'),
    ('Menschen landen auf dem Mond', '1969-07-20', 'AD'),
    ('Fall der Berliner Mauer', '1989-11-09', 'AD'),
    ('Erste Atombombenabwürfe auf Hiroshima und Nagasaki', '1945-08-06', 'AD'),
    ('Unabhängigkeitserklärung der USA', '1776-07-04', 'AD');

INSERT INTO events (name, date, era)
VALUES
    ('Erster Flug der Gebrüder Wright', '1903-12-17', 'AD'),
    ('Gründung der Vereinten Nationen', '1945-10-24', 'AD'),
    ('Unterzeichnung des Vertrags von Versailles', '1919-06-28', 'AD'),
    ('Erfindung des Telefons durch Alexander Graham Bell', '1876-03-10', 'AD'),
    ('Kubanische Revolution beginnt', '1953-07-26', 'AD'),
    ('Beginn des Koreakriegs', '1950-06-25', 'AD'),
    ('Unterzeichnung des Elysee-Vertrags (Deutsch-Französischer Freundschaftsvertrag)', '1963-01-22', 'AD'),
    ('Verabschiedung der US-Verfassung', '1787-09-17', 'AD'),
    ('Einführung des Euro als Bargeld', '2002-01-01', 'AD'),
    ('Fall der Sowjetunion', '1991-12-26', 'AD'),
    ('Eröffnung des Suezkanals', '1869-11-17', 'AD'),
    ('Ende des Vietnamkriegs', '1975-04-30', 'AD'),
    ('Erstmalige Menschenrechte (Code of Hammurabi)', '1754-01-01', 'BC'),
    ('Die Deklaration der Menschen- und Bürgerrechte (Frankreich)', '1789-08-26', 'AD'),
    ('Erstmalige Olympische Spiele (antikes Griechenland)', '776.01-01', 'BC'),
    ('Verabschiedung des Marshallplans', '1948-04-03', 'AD'),
    ('Beginn des Amerikanischen Bürgerkriegs', '1861-04-12', 'AD'),
    ('Unterzeichnung des Vertrags von Tordesillas', '1494-06-07', 'AD'),
    ('Verabschiedung der Allgemeinen Erklärung der Menschenrechte', '1948-12-10', 'AD'),
    ('Beginn des Russischen Bürgerkriegs', '1917-10-25', 'AD'),
    ('Erstmaliger Transatlantikflug von Charles Lindbergh', '1927-05-20', 'AD'),
    ('Erfindung des World Wide Web durch Tim Berners-Lee', '1990-08-06', 'AD'),
    ('Gründung der Europäischen Union', '1957-03-25', 'AD'),
    ('Beginn des Spanischen Bürgerkriegs', '1936-07-17', 'AD'),
    ('Verabschiedung der Unabhängigkeitserklärung von Israel', '1948-05-14', 'AD'),
    ('Unterzeichnung des Vertrags von Rom (Gründung der Europäischen Wirtschaftsgemeinschaft)', '1957-03-25', 'AD'),
    ('Unterzeichnung des Vertrags von Kyoto (Klimaschutzabkommen)', '1997-12-11', 'AD'),
    ('Verabschiedung der Frauenwahlrechtsreform in den USA', '1920-08-18', 'AD'),
    ('Beginn der Kubakrise', '1962-10-16', 'AD'),
    ('Gründung der Vereinigten Staaten von Amerika', '1776-07-04', 'AD'),
    ('Ende der Apartheid in Südafrika', '1994-04-27', 'AD'),
    ('Fall des Heiligen Römischen Reiches', '1806-08-06', 'AD');

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player VARCHAR(255) NOT NULL,
    score INT NOT NULL DEFAULT 0
);

INSERT INTO players (player, score) VALUES ('Spieler 1', 0), ('Spieler 2', 0);


