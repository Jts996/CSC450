

INSERT INTO `classes` (`class_id`, `name`) VALUES
  (1, `Ecaflip`);
(2, `Eniripsa`);
(3, `Lop`);
(4, `Cra`);
(5, `Feca`);
(6, `Sacrier`);
(7, `Sadida`);
(8, `Osamodas`);
(9, `Enutrof`);
(10, `Sram`);
(11, `Xelor`);
(12, `Pandawa`);
(13, `Rogue`);
(14, `Masqueraider`);
(15, `Foggernaut`);
(16, `Eliotrope`);
(17, `Huppermage`);
(18, `Ourginak`);

INSERT INTO `servers` (`server_id`, `name`) VALUES
  (1, `Agride`);
(2, `Atcham`);
(3, `Brumen`);
(4, `Crocabulia`);
(5, `Echo`);
(6, `Furge`);
(7, `Ilyzaelle`);
(8, `Julith`);
(9, `Meriana`);
(10, `Merkatar`);
(11, `Nidas`);
(12, `Ombre`);
(13, `Oto-Mustam`);
(14, `Pandore`);
(15, `Rubilax`);
(16, `Temporis i`);
(17, `Temporis ii`);
(18, `Temporis iii`);
(19, `Temporis iv`);
(20, `Ush`);

INSERT INTO `Characters` (`char_id`, `name`, `server`, `class`, `level`) VALUES
  (1, `Vodka-Shaker`, 9, 12, 200);
(2, `Kaos-Nick`, 15, 1, 200);
(3, `Gennajo`, 9, 8, 200);
(4, `Abeliax`, 2, 7, 200);
(5, `Deaths-arrow`, 6, 4, 200);
(6, `Mr-Bouclierblanc`, 9, 5, 200);
(7, `Healyx`, 20, 2, 200);
(8, `Kokoumbaral`, 20, 9, 200);
(9, `War-vuitton`, 6, 4, 200);
(10, `Phomi`, 2, 4, 200);
(11, `Kasu-Bomb`, 3, 13, 200);
(12, `Hades-ze`, 3, 1, 200);
(13, `Colm-Kaizukak`, 20, 3, 200);
(14, `There-Za`, 9, 2, 200);
(15, `Abrarolineuse`, 3, 3, 55);
(16, `Absent-minded`, 5, 14, 43);
(17, `Acheron`, 6, 18, 122);
(18, `Achteer-je`, 20, 5, 147);
(19, `Aedine`, 5, 15, 171);
(20, `Aenso`, 7, 12, 63);

INSERT INTO `primary_characteristics` (`primary_id`, `char_id`, `vitality`, `wisdom`, `strength`, `intelligence`, `chance`, `agility`, `ap`, `mp`, `critical_hits`) VALUES
  (1, 1, 0, 0, 0, 0, 398, 0, 7, 3, 0);
(2, 2, 116, 45, 100, 100, 0, 100, 7, 3, 3);
(3, 3, 4133, 428, 156, 930, 100, 174, 11, 5, 23);
(4, 4, 102, 99, 400, 331, 100, 100, 7, 3, 0);
(5, 5, 2, 100, 100, 0, 0, 76, 7, 3, 0);
(6, 6, 2740, 340, 517, 618, 247, 272, 10, 4, 27);
(7, 7, 100, 0, 100, 100, 100, 0, 7, 3, 0);
(8, 8 176, 107, 0, 0, 266, 0, 7, 3, 0);
(9, 9, 3067, 338, 39, 739, 11, 5, 40);
(10, 10, 60, 100, 20, 100, 25, 398, 7, 3, 0);
(11, 11, 46, 0, 8, 100, 0, 0, 7, 3, 0);
(12, 12, 1095, 100, 183, 149, 100, 100, 7, 3, 0);
(13, 13, 395, 0, 260, 57, 0, 250, 7, 3, 0);
(14, 14, 2469, 352, 150, 430, 328, 704, 12, 5, 42);
(15, 15, 0, 0, 0, 0, 0, 182, 6, 3, 0);
(16, 16, 0, 0, 0, 0, 0, 0, 6, 3, 0);
(17, 17, 220, 20, 316, 85, 81, 75, 7, 3, 0);
(18, 18, 976, 585, -11, 300, 229, 0, 11, 5, 8);
(19, 19, 348, 137, 100, 333, 100, 233, 7, 3, 3);
(20, 20, 0, 85, 0, 0, 0, 0, 6, 3, 0);

INSERT INTO `secondary_characteristics` (`secondary_id`, `char_id`, `ap_reduction`, `ap_loss_res`, `mp_reduction`, `mp_loss_res`, `iniitiative`, `summons`, `heals`, `catch`, `dodge`) VALUES
  (1, 1, 0, 0, 0, 0, 398, 139, 1, 0, 0, 0);
(2, 2, 4, 4, 4, 4, 300, 100, 1, 0, 10, 10);
(3, 3, 42, 48, 46, 43, 1640, 148, 4, 124, 40, 58);
(4, 4, 9, 9, 9, 9, 931, 110, 1, 0, 10, 10);
(5, 5, 10, 10, 10, 10, 176, 100, 1, 0, 7, 7);
(6, 6, 34, 58, 39, 39, 2904, 158, 3, 22, 27, 32);
(7, 7, 0, 0, 0, 0, 300, 110, 1, 0, 0, 0);
(8, 8, 10, 10, 10, 10, 266, 146, 1, 0, 0, 0);
(9, 9, 33, 38, 40, 30, 2329, 117, 2, 7, 88, 68);
(10, 10, 10, 10, 10, 10, 543, 102, 1, 0, 39, 39);
(11, 11, 0, 0, 0, 0, 0, 100, 1, 0, 0, 0);
(12, 12, 10, 10, 10, 10, 532, 110, 1, 0, 10, 10);
(13, 13, 0, 0, 0, 0, 567, 100, 1, 0, 25, 25);
(14, 14, 35, 43, 35, 29, 2060, 139, 2, 18, 89, 57);
(15, 15, 0, 0, 0, 0, 182, 100, 1, 0, 18, 18);
(16, 16, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0);
(17, 17, 2, 2, 2, 2, 557, 108, 1, 0, 7, 7);
(18, 18, 58, 58, 58, 58, 518, 172, 4, 13, -28, -10);
(19, 19, 13, 13, 13, 13, 766, 132, 1, 0, 23, 23);
(20, 20, 8, 8, 8, 8, 0, 100, 1, 0, 0, 0);



INSERT INTO `damages` (`damages_id`, `char_id`, `damage`, `power`, `critical_damage`, `neutral_damage`, `earth_damage`, `fire_damage`, `water_damage`, `air_damage`, `reflect`, `trap_damage`, `trap_power`, `pushback_power`) VALUES
  (1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(3, 3, 0, 50, 25, 11, 11, 98, 10, 20, 0, 0, 0, -16);
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(6, 6, 0, 38, 10, 28, 49, 68, 55, 49, 0, 0, 0, 0);
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(9, 9, 269, 74, 9, 10, 58, 12, 58, 0, 0, 0, 23);
(10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(13, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(14, 14, 0, 323, 90, 49, 46, 72, 57, 82, 0, 0, 0, 7);
(15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(16, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(17, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(18, 18, 0, 0, 0, 0, 0, 37, 33, 0, 0, 0, 0, 49);
(19, 19, 0, 50, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);


INSERT INTO `resistances` (`resist_id`, `char_id`, `neutral_res_fixed`, `neutral_res_perc`, `earth_res_fixed`, `earth_res_perc`, `fire_res_fixed`, `fire_res_perc`, `water_res_fixed`, `water_res_perc`, `air_res_fixed`, `air_res_perc`, `critical_res_fixed`, `pushback_res_fixed`) VALUES
  (1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(3, 3, 0, 0, 0, 44, 0, 1, 0, 14, 41, 26, 0, 0);
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(6, 6, 15, 0, 14, 0, 10, 0, 29, 10, 0, 0, 33, 0);
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(9, 9, 0, 10, 10, 23, 0, 0, 8, 36, 10, 36, 4, 18);
(10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(13, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(14, 14, 0, 13, 18, 14, 0, 8, 20, 14, 10, 20, -35, 0);
(15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(16, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(17, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
(18, 18, 6, 0, 5, 10, 9, 0, 10, 4, 20, 0, 1, 0);
(19, 19, 0, 0, 9, 0, 0, 10, 0, 0, 9, 0, 0, 0);
(20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);