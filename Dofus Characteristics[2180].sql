DROP TABLE IF EXISTS resistances;
DROP TABLE IF EXISTS damages;
DROP TABLE IF EXISTS secondary_characteristics;
DROP TABLE IF EXISTS primary_characteristics;
DROP TABLE IF EXISTS classes;
DROP TABLE IF EXISTS servers;
DROP TABLE IF EXISTS characters;


CREATE TABLE classes (class_id INT NOT NULL,
                  name VARCHAR(20) NOT NULL,
                  PRIMARY KEY (class_id)) ENGINE = INNODB;

CREATE TABLE servers (server_id INT NOT NULL,
                  name VARCHAR(20) NOT NULL,
                  PRIMARY KEY (server_id)) ENGINE = INNODB;

CREATE TABLE characters (char_id INT NOT NULL,
                    name VARCHAR(20) NOT NULL,
                    server INT NOT NULL,
                    class INT NOT NULL,
                    level INT NOT NULL,
                    PRIMARY KEY (char_id),
                    FOREIGN KEY(class) REFERENCES classes(class_id),
                    FOREIGN KEY(server) REFERENCES servers(server_id)) ENGINE = INNODB;

CREATE TABLE primary_characteristics (primary_id INT NOT NULL,
                    char_id INT NOT NULL,
                    vitality INT NOT NULL,
                    wisdom INT NOT NULL,
                    strength INT NOT NULL,
                    intelligence INT NOT NULL,
                    chance INT NOT NULL,
                    agility INT NOT NULL,
                    ap INT NOT NULL,
                    mp INT NOT NULL,
                    critical_hits INT NOT NULL,
                    PRIMARY KEY (primary_id),
                    FOREIGN KEY (char_id) REFERENCES characters(char_id)) ENGINE = INNODB;

CREATE TABLE secondary_characteristics (secondary_id INT NOT NULL,
                    char_id INT NOT NULL,
                    ap_reduction INT NOT NULL,
                    ap_loss_res INT NOT NULL,
                    mp_reduction INT NOT NULL,
                    mp_loss_res INT NOT NULL,
                    initiative INT NOT NULL,
                    prospecting INT NOT NULL,
                    summons INT NOT NULL,
                    heals INT NOT NULL,
                    catch INT NOT NULL,
                    dodge INT NOT NULL,
                    PRIMARY KEY (secondary_id),
                    FOREIGN KEY (char_id) REFERENCES characters(char_id)) ENGINE = INNODB;

CREATE TABLE damages (damages_id INT NOT NULL,
                    char_id INT NOT NULL,
                    damage INT NOT NULL,
                    power INT NOT NULL,
                    critical_damage INT NOT NULL,
                    neutral_damage INT NOT NULL,
                    earth_damage INT NOT NULL,
                    fire_damage INT NOT NULL,
                    water_damage INT NOT NULL,
                    air_damage INT NOT NULL,
                    reflect INT NOT NULL,
                    trap_damage INT NOT NULL,
                    trap_power INT NOT NULL,
                    pushback_damage INT NOT NULL,
                    PRIMARY KEY (damages_id),
                    FOREIGN KEY (char_id) REFERENCES characters(char_id)) ENGINE = INNODB;

CREATE TABLE resistances (resist_id INT NOT NULL,
                    char_id INT NOT NULL,
                    neutral_res_fixed INT NOT NULL,
                    neutral_res_perc INT NOT NULL,
                    earth_res_fixed INT NOT NULL,
                    earth_res_perc INT NOT NULL,
                    fire_res_fixed INT NOT NULL,
                    fire_res_perc INT NOT NULL,
                    water_res_fixed INT NOT NULL,
                    water_res_perc INT NOT NULL,
                    air_res_fixed INT NOT NULL,
                    air_res_perc INT NOT NULL,
                    critical_res_fixed INT NOT NULL,
                    pushback_res_fixed INT NOT NULL,
                    PRIMARY KEY (resist_id),
                    FOREIGN KEY (char_id) REFERENCES characters(char_id)) ENGINE = INNODB;
