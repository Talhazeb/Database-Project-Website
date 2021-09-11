DROP TABLE fit_login CASCADE CONSTRAINT;
DROP TABLE fit_member CASCADE CONSTRAINT;
DROP TABLE fit_membership CASCADE CONSTRAINT;
DROP TABLE maintainWeight CASCADE CONSTRAINT;
DROP TABLE maintainWeightData CASCADE CONSTRAINT;
DROP TABLE loseWeight CASCADE CONSTRAINT;
DROP TABLE loseWeightData CASCADE CONSTRAINT;
DROP TABLE buildMuscle CASCADE CONSTRAINT;
DROP TABLE buildMuscleData CASCADE CONSTRAINT;
DROP TABLE exerciseName CASCADE CONSTRAINT;
DROP TABLE MealNamesMBD CASCADE CONSTRAINT;
DROP TABLE MuscleBuildDiet CASCADE CONSTRAINT;
DROP TABLE WeightGainDiet CASCADE CONSTRAINT;
DROP TABLE WeightLossDiet CASCADE CONSTRAINT;
DROP TABLE WeightMaintainDiet CASCADE CONSTRAINT;


DROP SEQUENCE fit_login_seq;
DROP SEQUENCE fit_member_seq;
DROP SEQUENCE fit_membership_seq;
DROP SEQUENCE maintainWeightData_seq;
DROP SEQUENCE loseWeightData_seq;
DROP SEQUENCE buildMuscleData_seq;
DROP SEQUENCE exerciseName_seq;

CREATE TABLE fit_login 
(
  id number(10) NOT NULL,
  name varchar2(50) NOT NULL,
  username varchar2(25) NOT NULL,
  password varchar2(25) NOT NULL,
  membership_plan int NOT NULL
);

create SEQUENCE fit_login_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO fit_login VALUES(fit_login_seq.NEXTVAL, 'Talha Zeb', 'talha', '1234', 0);
INSERT INTO fit_login VALUES(fit_login_seq.NEXTVAL, 'Ali', 'ali', '1234', 0); 
INSERT INTO fit_login VALUES(fit_login_seq.NEXTVAL, 'Saroosh', 'saroosh', '1234', 0);


CREATE TABLE fit_member (
  id_member number(10) NOT NULL,
  name varchar2(50) NOT NULL,
  username varchar2(25) NOT NULL,
  password varchar2(25) NOT NULL, 
  gender varchar2(10) NOT NULL,
  address varchar2(100) NOT NULL,
  contact_no varchar2(25) NOT NULL,
  email varchar2(50) NOT NULL
) ;

create SEQUENCE fit_member_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO fit_member  VALUES(fit_member_seq.NEXTVAL, 'Talha Zeb', 'talha', '1234', 'M', 'Rawalpindi', '123456789', 'talha@gmail.com');
INSERT INTO fit_member  VALUES(fit_member_seq.NEXTVAL, 'Ali', 'ali', '1234', 'M', 'Rawalpindi', '123456789', 'talha@gmail.com');
INSERT INTO fit_member  VALUES(fit_member_seq.NEXTVAL, 'Saroosh', 'saroosh', '1234', 'M', 'Rawalpindi', '123456789', 'talha@gmail.com');


CREATE TABLE fit_membership(
  id_membership number(10) NOT NULL,
  id_member number(10) NOT NULL,
  username varchar2(25) NOT NULL,
  age int NOT NULL,
  height decimal(5,2) NOT NULL,
  weight decimal(5,2) NOT NULL,
  plan varchar2(50) NOT NULL
) ;

create SEQUENCE fit_membership_seq
minvalue 0
start with 0
INCREMENT BY 1;


-- EXERCISE NAME
CREATE TABLE exerciseName
(
  exerciseId int,
  exerciseName varchar2(50),
  constraint exerciseId_pk primary key (exerciseId)
);

create SEQUENCE exerciseName_seq
minvalue 0
start with 0
INCREMENT BY 1;

-- ******************************* Exercise Tables *************************
-- ******************************* maintainWeight **************************

CREATE TABLE maintainWeight
(
  maintain_Id int,
  day int,
  time varchar2(10),
  exerciseId int,
  constraint exerciseId_mpk foreign key (exerciseId) references exerciseName(exerciseId),
  constraint maintainId_pk primary key (maintain_Id)
);


CREATE TABLE maintainWeightData
(
  maintainData_Id int,
  maintain_Id int,
  username varchar2(50),
  constraint maintain_Id_mpk foreign key (maintain_Id) references maintainWeight(maintain_Id),
  constraint maintainData_Id_pk primary key (maintainData_Id)
);

create SEQUENCE maintainWeightData_seq
minvalue 0
start with 0
INCREMENT BY 1;


-- ******************************* buildMuscle **************************

CREATE TABLE buildMuscle
(
  build_Id int,
  day int,
  time varchar2(30),
  exerciseId int,
  constraint exerciseId_bpk foreign key (exerciseId) references exerciseName(exerciseId),
  constraint buildId_pk primary key (build_Id)
);


CREATE TABLE buildMuscleData
(
  buildData_Id int,
  build_Id int,
  username varchar2(50),
  constraint build_Id_bpk foreign key (build_Id) references buildMuscle(build_Id),
  constraint buildData_Id_pk primary key (buildData_Id)
);

create SEQUENCE buildMuscleData_seq
minvalue 0
start with 0
INCREMENT BY 1;


-- ******************************* loseWeight **************************

CREATE TABLE loseWeight
(
  lose_Id int,
  day int,
  time varchar2(10),
  exerciseId int,
  constraint exerciseId_lpk foreign key (exerciseId) references exerciseName(exerciseId),
  constraint loseId_pk primary key (lose_Id)
);


CREATE TABLE loseWeightData
(
  loseData_Id int,
  lose_Id int,
  username varchar2(50),
  constraint lose_Id_lpk foreign key (lose_Id) references loseWeight(lose_Id),
  constraint loseData_Id_pk primary key (loseData_Id)
);

create SEQUENCE loseWeightData_seq
minvalue 0
start with 0
INCREMENT BY 1;


-- ******************************* INSERTING DATA *************************
-- ******************************* EXERCISE NAMES DATA **************************
INSERT INTO exerciseName VALUES(1,'march steps');
INSERT INTO exerciseName VALUES(2,'high knees');
INSERT INTO exerciseName VALUES(3,'push ups');
INSERT INTO exerciseName VALUES(4,'bicep extensions');
INSERT INTO exerciseName VALUES(5,'lunges');
INSERT INTO exerciseName VALUES(6,'side leg raises');
INSERT INTO exerciseName VALUES(7,'reverse lunges');
INSERT INTO exerciseName VALUES(8,'calf raises');
INSERT INTO exerciseName VALUES(9,'deep side lunges');
INSERT INTO exerciseName VALUES(10,'crunches');
INSERT INTO exerciseName VALUES(11,'flutter kicks');
INSERT INTO exerciseName VALUES(12,'sitting twists');
INSERT INTO exerciseName VALUES(13,'raised leg circles');
INSERT INTO exerciseName VALUES(14,'raised arms hold');
INSERT INTO exerciseName VALUES(15,'plank hold');
INSERT INTO exerciseName VALUES(16,'shoulder taps');
INSERT INTO exerciseName VALUES(17,'reverse angels');
INSERT INTO exerciseName VALUES(18,'w-extensions');
INSERT INTO exerciseName VALUES(19,'prone reverse fly');
INSERT INTO exerciseName VALUES(20,'bridges');
INSERT INTO exerciseName VALUES(21,'reverse plank leg raise');
INSERT INTO exerciseName VALUES(22,'knee hug hold');
INSERT INTO exerciseName VALUES(23,'quad stretch hold');
INSERT INTO exerciseName VALUES(24,'calf raise hold');
INSERT INTO exerciseName VALUES(25,'elbow plank hold');
INSERT INTO exerciseName VALUES(26,'uneven plank hold');
INSERT INTO exerciseName VALUES(27,'side plank hold');
INSERT INTO exerciseName VALUES(28,'raise plank rotations');
INSERT INTO exerciseName VALUES(29,'side bridges');
INSERT INTO exerciseName VALUES(30,'squats');
INSERT INTO exerciseName VALUES(31,'hollow hold');
INSERT INTO exerciseName VALUES(32,'jumping jacks');
INSERT INTO exerciseName VALUES(33,'basic burpees');
INSERT INTO exerciseName VALUES(34,'climbers');
INSERT INTO exerciseName VALUES(35,'climber taps');
INSERT INTO exerciseName VALUES(36,'standing shoulder taps');
INSERT INTO exerciseName VALUES(37,'knee-ins');
INSERT INTO exerciseName VALUES(38,'raised leg swings');
INSERT INTO exerciseName VALUES(39,'leg extensions');
INSERT INTO exerciseName VALUES(40,'side leg extensions');
INSERT INTO exerciseName VALUES(41,'leg raise');
INSERT INTO exerciseName VALUES(42,'raised legs hold');
INSERT INTO exerciseName VALUES(43,'scissors');
INSERT INTO exerciseName VALUES(44,'windshield wipers');
INSERT INTO exerciseName VALUES(45,'high crunches');
INSERT INTO exerciseName VALUES(46,'push ups shoulder taps');
INSERT INTO exerciseName VALUES(47,'chest extensions');
INSERT INTO exerciseName VALUES(48,'scissor chops');
INSERT INTO exerciseName VALUES(49,'arm scissiors');
INSERT INTO exerciseName VALUES(50,'squat hold');
INSERT INTO exerciseName VALUES(51,'side-to-side lunges');
INSERT INTO exerciseName VALUES(52,'sit-ups');
INSERT INTO exerciseName VALUES(53,'wall-sit hold');
INSERT INTO exerciseName VALUES(54,'punches');
INSERT INTO exerciseName VALUES(55,'heel taps');
INSERT INTO exerciseName VALUES(56,'leg raises');
INSERT INTO exerciseName VALUES(57,'half wipers');
INSERT INTO exerciseName VALUES(58,'raised arm circles');
INSERT INTO exerciseName VALUES(59,'squat');
INSERT INTO exerciseName VALUES(60,'side elbow plank left');
INSERT INTO exerciseName VALUES(61,'side elbow plank right');
INSERT INTO exerciseName VALUES(62,'raised leg elbow plank hold left');
INSERT INTO exerciseName VALUES(63,'raised leg elbow plank hold right');
INSERT INTO exerciseName VALUES(64,'fast kicks');
INSERT INTO exerciseName VALUES(65,'slow kicks');
INSERT INTO exerciseName VALUES(66,'high leg raises');
INSERT INTO exerciseName VALUES(67,'move side-to-side');
INSERT INTO exerciseName VALUES(68,'circles');
INSERT INTO exerciseName VALUES(69,'sitting punches');
INSERT INTO exerciseName VALUES(70,'sit-up punches');
INSERT INTO exerciseName VALUES(71,'one-arm plank hold');
INSERT INTO exerciseName VALUES(72,'elbow plank crunches');
INSERT INTO exerciseName VALUES(73,'upward leg extensions');
INSERT INTO exerciseName VALUES(74,'jumping lunges');
INSERT INTO exerciseName VALUES(75,'knee-in and twist');
INSERT INTO exerciseName VALUES(76,'raise leg hold');
INSERT INTO exerciseName VALUES(77,'knee-in extensions');
INSERT INTO exerciseName VALUES(78,'shoulder press');
INSERT INTO exerciseName VALUES(79,'chest press');
INSERT INTO exerciseName VALUES(80,'lateral raises');
INSERT INTO exerciseName VALUES(81,'tricep extensions');
INSERT INTO exerciseName VALUES(82,'alt bicep curls');
INSERT INTO exerciseName VALUES(83,'upright rows');
INSERT INTO exerciseName VALUES(84,'deadlifts');
INSERT INTO exerciseName VALUES(85,'shrugs');
INSERT INTO exerciseName VALUES(86,'bent over rows');
INSERT INTO exerciseName VALUES(87,'bent over flys');
INSERT INTO exerciseName VALUES(88,'goblet squats');
INSERT INTO exerciseName VALUES(89,'forward lunges');
INSERT INTO exerciseName VALUES(90,'side lunges');
INSERT INTO exerciseName VALUES(91,'calf raise');
INSERT INTO exerciseName VALUES(92,'sit ups');
INSERT INTO exerciseName VALUES(93,'arnold press');
INSERT INTO exerciseName VALUES(94,'bicep curls');
INSERT INTO exerciseName VALUES(95,'farmers walk');
INSERT INTO exerciseName VALUES(96,'reverse lunge step-ups');
INSERT INTO exerciseName VALUES(97,'elbow plank leg raises');
INSERT INTO exerciseName VALUES(98,'up and down planks');
INSERT INTO exerciseName VALUES(99,'elbow plank');
INSERT INTO exerciseName VALUES(100,'side elbow plank');
INSERT INTO exerciseName VALUES(101,'forward raises');
INSERT INTO exerciseName VALUES(102,'renegade rows');
INSERT INTO exerciseName VALUES(103,'single leg deadlifts');
INSERT INTO exerciseName VALUES(104,'side jackknives');
INSERT INTO exerciseName VALUES(105,'elbow plank side raises');
INSERT INTO exerciseName VALUES(106,'V-ups');
INSERT INTO exerciseName VALUES(107,'knee-ins and twist');



-- ******************************* BUILD MUSCLE DATA **************************


INSERT INTO buildMuscle VALUES(1,1,'reps: 12,10,10,8',78);
INSERT INTO buildMuscle VALUES(2,1,'reps: 12,10,10,8',79);
INSERT INTO buildMuscle VALUES(3,1,'reps: 6,6,4,3',80);
INSERT INTO buildMuscle VALUES(4,1,'reps: 5,4,4,3',81);
INSERT INTO buildMuscle VALUES(5,2,'reps: 6,5,5,4',82);
INSERT INTO buildMuscle VALUES(6,2,'reps: 8,8,6,5',83);
INSERT INTO buildMuscle VALUES(7,2,'reps: 8,8,6,5',84);
INSERT INTO buildMuscle VALUES(8,2,'reps: 10,10,8,6',85);
INSERT INTO buildMuscle VALUES(9,2,'reps: 8,8,6,5',86);
INSERT INTO buildMuscle VALUES(10,2,'reps: 6,5,5,4',87);
INSERT INTO buildMuscle VALUES(11,3,'reps: 12,10,10,8',88);
INSERT INTO buildMuscle VALUES(12,3,'reps: 5,4,4,3',89);
INSERT INTO buildMuscle VALUES(13,3,'reps: 5,4,4,3',90);
INSERT INTO buildMuscle VALUES(14,3,'reps: 14,12,12,10',91);
INSERT INTO buildMuscle VALUES(15,4,'reps: 16,14,14,10',92);
INSERT INTO buildMuscle VALUES(16,4,'reps: 8,7,7,5',12);
INSERT INTO buildMuscle VALUES(17,4,'reps: 16,14,14,12',56);
INSERT INTO buildMuscle VALUES(18,4,'reps: 10,8,8,6',11);
INSERT INTO buildMuscle VALUES(19,5,'reps: 10,10,8,6',93);
INSERT INTO buildMuscle VALUES(20,5,'reps: 12,10,10,8',3);
INSERT INTO buildMuscle VALUES(21,5,'reps: 6,6,5,4',80);
INSERT INTO buildMuscle VALUES(22,5,'reps: 10,8,8,6',81);
INSERT INTO buildMuscle VALUES(23,6,'reps: 10,8,8,6',94);
INSERT INTO buildMuscle VALUES(24,6,'reps: 8,8,6,6',86);
INSERT INTO buildMuscle VALUES(25,6,'reps: 14,12,10,10',95);
INSERT INTO buildMuscle VALUES(26,7,'reps: 8,8,6,4',30);
INSERT INTO buildMuscle VALUES(27,7,'reps: 6,4,4,3',89);
INSERT INTO buildMuscle VALUES(28,7,'reps: 5,4,4,3',96);
INSERT INTO buildMuscle VALUES(29,7,'reps: 14,14,12,10',8);
INSERT INTO buildMuscle VALUES(30,8,'reps: 10,8,8,6',97);
INSERT INTO buildMuscle VALUES(31,8,'reps: 10,8,8,6',98);
INSERT INTO buildMuscle VALUES(32,8,'reps: 12,10,10,8',99);
INSERT INTO buildMuscle VALUES(33,8,'reps: 12,10,10,8',100);
INSERT INTO buildMuscle VALUES(34,9,'reps: 12,12,10,8',78);
INSERT INTO buildMuscle VALUES(35,9,'reps: 12,12,10,8',79);
INSERT INTO buildMuscle VALUES(36,9,'reps: 7,6,5,4',80);
INSERT INTO buildMuscle VALUES(37,9,'reps: 5,4,4,3',101);
INSERT INTO buildMuscle VALUES(38,10,'reps: 6,6,5,4',82);
INSERT INTO buildMuscle VALUES(39,10,'reps: 10,8,6,5',83);
INSERT INTO buildMuscle VALUES(40,10,'reps: 10,8,6,5',84);
INSERT INTO buildMuscle VALUES(41,10,'reps: 12,10,8,6',85);
INSERT INTO buildMuscle VALUES(42,10,'reps: 7,6,6,5',102);
INSERT INTO buildMuscle VALUES(43,11,'reps: 12,12,10,8',88);
INSERT INTO buildMuscle VALUES(44,11,'reps: 6,5,4,3',89);
INSERT INTO buildMuscle VALUES(45,11,'reps: 5,5,4,3',103);
INSERT INTO buildMuscle VALUES(46,11,'reps: 14,14,12,12',8);
INSERT INTO buildMuscle VALUES(47,12,'reps: 16,16,14,10',92);
INSERT INTO buildMuscle VALUES(48,12,'reps: 8,7,7,6',12);
INSERT INTO buildMuscle VALUES(49,12,'reps: 16,16,14,12',56);
INSERT INTO buildMuscle VALUES(50,12,'reps: 10,8,8,6',104);
INSERT INTO buildMuscle VALUES(51,13,'reps: 10,8,8,6',93);
INSERT INTO buildMuscle VALUES(52,13,'reps: 12,12,10,8',3);
INSERT INTO buildMuscle VALUES(53,13,'reps: 7,6,6,4',80);
INSERT INTO buildMuscle VALUES(54,13,'reps: 6,5,5,4',81);
INSERT INTO buildMuscle VALUES(55,14,'reps: 7,6,5,4',82);
INSERT INTO buildMuscle VALUES(56,14,'reps: 10,8,6,6',83);
INSERT INTO buildMuscle VALUES(57,14,'reps: 10,8,8,5',84);
INSERT INTO buildMuscle VALUES(58,14,'reps: 12,10,10,6',85);
INSERT INTO buildMuscle VALUES(59,14,'reps: 10,8,6,6',86);
INSERT INTO buildMuscle VALUES(60,14,'reps: 6,6,5,4',87);
INSERT INTO buildMuscle VALUES(61,15,'reps: 10,8,6,4',30);
INSERT INTO buildMuscle VALUES(62,15,'reps: 6,5,4,4',89);
INSERT INTO buildMuscle VALUES(63,15,'reps: 5,5,4,3',90);
INSERT INTO buildMuscle VALUES(64,15,'reps: 16,14,12,12',8);
INSERT INTO buildMuscle VALUES(65,16,'reps: 10,10,8,6',97);
INSERT INTO buildMuscle VALUES(66,16,'reps: 10,10,8,6',105);
INSERT INTO buildMuscle VALUES(67,16,'reps: 12,10,10,8',99);
INSERT INTO buildMuscle VALUES(68,16,'reps: 12,10,10,8',100);
INSERT INTO buildMuscle VALUES(69,17,'reps: 12,12,10,10',78);
INSERT INTO buildMuscle VALUES(70,17,'reps: 12,12,10,10',79);
INSERT INTO buildMuscle VALUES(71,17,'reps: 7,7,6,4',80);
INSERT INTO buildMuscle VALUES(72,17,'reps: 6,5,4,3',81);
INSERT INTO buildMuscle VALUES(73,18,'reps: 12,10,8,6',94);
INSERT INTO buildMuscle VALUES(74,18,'reps: 10,8,8,6',86);
INSERT INTO buildMuscle VALUES(75,18,'reps: 14,14,12,10',95);
INSERT INTO buildMuscle VALUES(76,19,'reps: 12,12,10,10',88);
INSERT INTO buildMuscle VALUES(77,19,'reps: 6,5,5,4',89);
INSERT INTO buildMuscle VALUES(78,19,'reps: 6,5,4,3',103);
INSERT INTO buildMuscle VALUES(79,19,'reps: 16,14,14,12',107);
INSERT INTO buildMuscle VALUES(80,20,'reps: 10,10,8,6',106);
INSERT INTO buildMuscle VALUES(81,20,'reps: 10,7,7,6',12);
INSERT INTO buildMuscle VALUES(82,20,'reps: 18,16,14,12',56);
INSERT INTO buildMuscle VALUES(83,20,'reps: 10,8,8,6',107);
INSERT INTO buildMuscle VALUES(84,21,'reps: 12,10,8,8',93);
INSERT INTO buildMuscle VALUES(85,21,'reps: 12,12,10,10',3);
INSERT INTO buildMuscle VALUES(86,21,'reps: 7,7,6,5',80);
INSERT INTO buildMuscle VALUES(87,21,'reps: 6,5,5,4',81);
INSERT INTO buildMuscle VALUES(88,22,'reps: 7,6,5,5',82);
INSERT INTO buildMuscle VALUES(89,22,'reps: 12,8,6,6',83);
INSERT INTO buildMuscle VALUES(90,22,'reps: 10,8,8,6',84);
INSERT INTO buildMuscle VALUES(91,22,'reps: 12,10,10,8',85);
INSERT INTO buildMuscle VALUES(92,22,'reps: 8,6,6,5',102);
INSERT INTO buildMuscle VALUES(93,23,'reps: 10,8,6,6',30);
INSERT INTO buildMuscle VALUES(94,23,'reps: 6,6,5,4',89);
INSERT INTO buildMuscle VALUES(95,23,'reps: 5,5,4,3',90);
INSERT INTO buildMuscle VALUES(96,23,'reps: 16,16,14,12',8);
INSERT INTO buildMuscle VALUES(97,24,'reps: 10,10,8,8',97);
INSERT INTO buildMuscle VALUES(98,24,'reps: 12,10,8,6',105);
INSERT INTO buildMuscle VALUES(99,24,'reps: 12,10,10,8',99);
INSERT INTO buildMuscle VALUES(100,24,'reps: 12,10,10,8',100);
INSERT INTO buildMuscle VALUES(101,25,'reps: 14,12,10,10',78);
INSERT INTO buildMuscle VALUES(102,25,'reps: 14,12,10,10',79);
INSERT INTO buildMuscle VALUES(103,25,'reps: 8,7,6,5',80);
INSERT INTO buildMuscle VALUES(104,25,'reps: 5,4,4,3',81);
INSERT INTO buildMuscle VALUES(105,26,'reps: 8,6,6,5',82);
INSERT INTO buildMuscle VALUES(106,26,'reps: 12,8,8,6',83);
INSERT INTO buildMuscle VALUES(107,26,'reps: 12,8,8,6',84);
INSERT INTO buildMuscle VALUES(108,26,'reps: 12,12,10,8',85);
INSERT INTO buildMuscle VALUES(109,26,'reps: 12,8,8,6',86);
INSERT INTO buildMuscle VALUES(110,26,'reps: 8,6,5,4',87);
INSERT INTO buildMuscle VALUES(111,27,'reps: 14,12,10,10',30);
INSERT INTO buildMuscle VALUES(112,27,'reps: 6,6,5,5',89);
INSERT INTO buildMuscle VALUES(113,27,'reps: 6,5,4,4',90);
INSERT INTO buildMuscle VALUES(114,27,'reps: 16,16,14,14',8);
INSERT INTO buildMuscle VALUES(115,28,'reps: 16,16,14,14',92);
INSERT INTO buildMuscle VALUES(116,28,'reps: 10,8,7,7',12);
INSERT INTO buildMuscle VALUES(117,28,'reps: 18,18,14,12',56);
INSERT INTO buildMuscle VALUES(118,28,'reps: 12,10,8,6',104);
INSERT INTO buildMuscle VALUES(119,29,'reps: 12,12,10,8',93);
INSERT INTO buildMuscle VALUES(120,29,'reps: 14,12,10,10',3);
INSERT INTO buildMuscle VALUES(121,29,'reps: 8,8,7,5',80);
INSERT INTO buildMuscle VALUES(122,29,'reps: 6,6,4,4',81);
INSERT INTO buildMuscle VALUES(123,30,'reps: 12,10,10,8',94);
INSERT INTO buildMuscle VALUES(124,30,'reps: 12,10,8,6',86);
INSERT INTO buildMuscle VALUES(125,30,'reps: 14,14,12,12',95);




-- ******************************* MAINTAIN WEIGHT DATA **************************


INSERT INTO maintainWeight VALUES(1,1,'3 min',1);
INSERT INTO maintainWeight VALUES(2,1,'3 min',2);
INSERT INTO maintainWeight VALUES(3,2,'3 min',3);
INSERT INTO maintainWeight VALUES(4,2,'3 min',4);
INSERT INTO maintainWeight VALUES(5,3,'1 min',5);
INSERT INTO maintainWeight VALUES(6,3,'1 min',6);
INSERT INTO maintainWeight VALUES(7,3,'1 min',7);
INSERT INTO maintainWeight VALUES(8,3,'1 min',8);
INSERT INTO maintainWeight VALUES(9,3,'1 min',9);
INSERT INTO maintainWeight VALUES(10,4,'1 min',10);
INSERT INTO maintainWeight VALUES(11,4,'1 min',11);
INSERT INTO maintainWeight VALUES(12,4,'1 min',12);
INSERT INTO maintainWeight VALUES(13,4,'1 min',13);
INSERT INTO maintainWeight VALUES(14,4,'1 min',6);
INSERT INTO maintainWeight VALUES(15,5,'5 min',14);
INSERT INTO maintainWeight VALUES(16,6,'3 min',2);
INSERT INTO maintainWeight VALUES(17,6,'3 min',15);
INSERT INTO maintainWeight VALUES(18,7,'1 min',3);
INSERT INTO maintainWeight VALUES(19,7,'1 min',16);
INSERT INTO maintainWeight VALUES(20,7,'1 min',17);
INSERT INTO maintainWeight VALUES(21,7,'1 min',18);
INSERT INTO maintainWeight VALUES(22,7,'1 min',19);
INSERT INTO maintainWeight VALUES(23,8,'1 min',20);
INSERT INTO maintainWeight VALUES(24,8,'1 min',21);
INSERT INTO maintainWeight VALUES(25,8,'1 min',22);
INSERT INTO maintainWeight VALUES(26,8,'1 min',23);
INSERT INTO maintainWeight VALUES(27,8,'1 min',24);
INSERT INTO maintainWeight VALUES(28,9,'1 min',25);
INSERT INTO maintainWeight VALUES(29,9,'1 min',26);
INSERT INTO maintainWeight VALUES(30,9,'1 min',27);
INSERT INTO maintainWeight VALUES(31,9,'1 min',28);
INSERT INTO maintainWeight VALUES(32,9,'1 min',29);
INSERT INTO maintainWeight VALUES(33,10,'5 min',6);
INSERT INTO maintainWeight VALUES(34,11,'5 min',2);
INSERT INTO maintainWeight VALUES(35,12,'3 min',3);
INSERT INTO maintainWeight VALUES(36,12,'3 min',16);
INSERT INTO maintainWeight VALUES(37,13,'3 min',30);
INSERT INTO maintainWeight VALUES(38,13,'3 min',8);
INSERT INTO maintainWeight VALUES(39,14,'3 min',10);
INSERT INTO maintainWeight VALUES(40,14,'3 min',31);
INSERT INTO maintainWeight VALUES(41,15,'5 min',32);
INSERT INTO maintainWeight VALUES(42,16,'1 min',2);
INSERT INTO maintainWeight VALUES(43,16,'1 min',33);
INSERT INTO maintainWeight VALUES(44,16,'1 min',34);
INSERT INTO maintainWeight VALUES(45,16,'1 min',15);
INSERT INTO maintainWeight VALUES(46,16,'1 min',35);
INSERT INTO maintainWeight VALUES(47,17,'3 min',3);
INSERT INTO maintainWeight VALUES(48,17,'3 min',36);
INSERT INTO maintainWeight VALUES(49,18,'5 min',7);
INSERT INTO maintainWeight VALUES(50,19,'3 min',10);
INSERT INTO maintainWeight VALUES(51,19,'3 min',11);
INSERT INTO maintainWeight VALUES(52,20,'5 min',4);
INSERT INTO maintainWeight VALUES(53,21,'3 min',33);
INSERT INTO maintainWeight VALUES(54,21,'3 min',15);
INSERT INTO maintainWeight VALUES(55,22,'1 min',3);
INSERT INTO maintainWeight VALUES(56,22,'1 min',4);
INSERT INTO maintainWeight VALUES(57,22,'3 min',17);
INSERT INTO maintainWeight VALUES(58,23,'1 min',37);
INSERT INTO maintainWeight VALUES(59,23,'1 min',38);
INSERT INTO maintainWeight VALUES(60,23,'1 min',39);
INSERT INTO maintainWeight VALUES(61,23,'1 min',40);
INSERT INTO maintainWeight VALUES(62,23,'1 min',6);
INSERT INTO maintainWeight VALUES(63,24,'1 min',41);
INSERT INTO maintainWeight VALUES(64,24,'1 min',42);
INSERT INTO maintainWeight VALUES(65,24,'1 min',43);
INSERT INTO maintainWeight VALUES(66,24,'1 min',44);
INSERT INTO maintainWeight VALUES(67,24,'1 min',45);
INSERT INTO maintainWeight VALUES(68,25,'5 min',24);
INSERT INTO maintainWeight VALUES(69,26,'5 min',2);
INSERT INTO maintainWeight VALUES(70,27,'1 min',46);
INSERT INTO maintainWeight VALUES(71,27,'1 min',47);
INSERT INTO maintainWeight VALUES(72,27,'1 min',48);
INSERT INTO maintainWeight VALUES(73,27,'1 min',49);
INSERT INTO maintainWeight VALUES(74,27,'1 min',14);
INSERT INTO maintainWeight VALUES(75,28,'1 min',30);
INSERT INTO maintainWeight VALUES(76,28,'1 min',50);
INSERT INTO maintainWeight VALUES(77,28,'1 min',8);
INSERT INTO maintainWeight VALUES(78,28,'1 min',51);
INSERT INTO maintainWeight VALUES(79,28,'1 min',5);
INSERT INTO maintainWeight VALUES(80,29,'3 min',52);
INSERT INTO maintainWeight VALUES(81,29,'3 min',12);
INSERT INTO maintainWeight VALUES(82,30,'5 min',53);


-- ******************************* LOSE WEIGHT DATA **************************
INSERT INTO loseWeight VALUES(1,1,'2 min',2);
INSERT INTO loseWeight VALUES(2,1,'1 min',34);
INSERT INTO loseWeight VALUES(3,1,'2 min',15);
INSERT INTO loseWeight VALUES(4,1,'2 min',1);
INSERT INTO loseWeight VALUES(5,2,'3 min',7);
INSERT INTO loseWeight VALUES(6,2,'3 min',16);
INSERT INTO loseWeight VALUES(7,2,'1 min',54);
INSERT INTO loseWeight VALUES(8,3,'1 min' ,10);
INSERT INTO loseWeight VALUES(9,3,'1 min',55);
INSERT INTO loseWeight VALUES(10,3,'1 min',56);
INSERT INTO loseWeight VALUES(11,3,'1 min',11);
INSERT INTO loseWeight VALUES(12,3,'1 min',43);
INSERT INTO loseWeight VALUES(13,3,'1 min',57);
INSERT INTO loseWeight VALUES(14,3,'1 min',32);
INSERT INTO loseWeight VALUES(15,4,'2 min',107);
INSERT INTO loseWeight VALUES(16,4,'2 min',107);
INSERT INTO loseWeight VALUES(17,4,'3 min',6);
INSERT INTO loseWeight VALUES(18,5,'2 min',32);
INSERT INTO loseWeight VALUES(19,5,'2 min',33);
INSERT INTO loseWeight VALUES(20,5,'2 min',50);
INSERT INTO loseWeight VALUES(21,5,'2 min',58);
INSERT INTO loseWeight VALUES(22,6,'2 min',59);
INSERT INTO loseWeight VALUES(23,6,'2 min',8);
INSERT INTO loseWeight VALUES(24,6,'2 min',3);
INSERT INTO loseWeight VALUES(25,6,'1 min',54);
INSERT INTO loseWeight VALUES(26,7,'2 min',60);
INSERT INTO loseWeight VALUES(27,7,'2 min',25);
INSERT INTO loseWeight VALUES(28,7,'2 min',61);
INSERT INTO loseWeight VALUES(29,7,'2 min',62);
INSERT INTO loseWeight VALUES(30,7,'2 min',63);
INSERT INTO loseWeight VALUES(31,7,'1 min',32);
INSERT INTO loseWeight VALUES(32,8,'2 min',6);
INSERT INTO loseWeight VALUES(33,8,'2 min',38);
INSERT INTO loseWeight VALUES(34,8,'2 min',64);
INSERT INTO loseWeight VALUES(35,8,'2 min',65);
INSERT INTO loseWeight VALUES(36,9,'3 min',2);
INSERT INTO loseWeight VALUES(37,9,'3 min',1);
INSERT INTO loseWeight VALUES(38,9,'1 min',4);
INSERT INTO loseWeight VALUES(39,10,'2 min',5);
INSERT INTO loseWeight VALUES(40,10,'2 min',3);
INSERT INTO loseWeight VALUES(41,10,'2 min',16);
INSERT INTO loseWeight VALUES(42,10,'2 min',15);
INSERT INTO loseWeight VALUES(43,10,'1 min',54);
INSERT INTO loseWeight VALUES(44,11,'2 min',10);
INSERT INTO loseWeight VALUES(45,11,'2 min',20);
INSERT INTO loseWeight VALUES(46,11,'2 min',56);
INSERT INTO loseWeight VALUES(47,11,'1 min',11);
INSERT INTO loseWeight VALUES(48,11,'3 min',32);
INSERT INTO loseWeight VALUES(49,12,'3 min',56);
INSERT INTO loseWeight VALUES(50,12,'3 min',66);
INSERT INTO loseWeight VALUES(51,12,'3 min',67);
INSERT INTO loseWeight VALUES(52,12,'3 min',68);
INSERT INTO loseWeight VALUES(53,12,'3 min',6);
INSERT INTO loseWeight VALUES(54,13,'3 min',32);
INSERT INTO loseWeight VALUES(55,13,'3 min',58);
INSERT INTO loseWeight VALUES(56,13,'3 min',33);
INSERT INTO loseWeight VALUES(57,13,'2 min',4);
INSERT INTO loseWeight VALUES(58,14,'3 min',5);
INSERT INTO loseWeight VALUES(59,14,'1 min',51);
INSERT INTO loseWeight VALUES(60,14,'1 min',54);
INSERT INTO loseWeight VALUES(61,15,'2 min',69);
INSERT INTO loseWeight VALUES(62,15,'2 min',70);
INSERT INTO loseWeight VALUES(63,15,'2 min',11);
INSERT INTO loseWeight VALUES(64,15,'2 min',43);
INSERT INTO loseWeight VALUES(65,15,'1 min',2);
INSERT INTO loseWeight VALUES(66,16,'3 min',38);
INSERT INTO loseWeight VALUES(67,16,'3 min',40);
INSERT INTO loseWeight VALUES(68,16,'3 min',6);
INSERT INTO loseWeight VALUES(69,17,'3 min',2);
INSERT INTO loseWeight VALUES(70,17,'1 min',15);
INSERT INTO loseWeight VALUES(71,17,'1 min',71);
INSERT INTO loseWeight VALUES(72,17,'1 min',1);
INSERT INTO loseWeight VALUES(73,18,'3 min',30);
INSERT INTO loseWeight VALUES(74,18,'1 min',8);
INSERT INTO loseWeight VALUES(75,18,'1 min',3);
INSERT INTO loseWeight VALUES(76,18,'3 min',16);
INSERT INTO loseWeight VALUES(77,18,'1 min',54);
INSERT INTO loseWeight VALUES(78,19,'3 min',25);
INSERT INTO loseWeight VALUES(79,19,'1 min',72);
INSERT INTO loseWeight VALUES(80,19,'1 min',32);
INSERT INTO loseWeight VALUES(81,20,'3 min',56);
INSERT INTO loseWeight VALUES(82,20,'3 min',6);
INSERT INTO loseWeight VALUES(83,21,'3 min',32);
INSERT INTO loseWeight VALUES(84,21,'1 min',33);
INSERT INTO loseWeight VALUES(85,21,'1 min',58);
INSERT INTO loseWeight VALUES(86,22,'3 min',7);
INSERT INTO loseWeight VALUES(87,22,'1 min',3);
INSERT INTO loseWeight VALUES(88,22,'1 min',16);
INSERT INTO loseWeight VALUES(89,22,'3 min',30);
INSERT INTO loseWeight VALUES(90,22,'1 min',54);
INSERT INTO loseWeight VALUES(91,23,'3 min',15);
INSERT INTO loseWeight VALUES(92,23,'3 min',25);
INSERT INTO loseWeight VALUES(93,23,'3 min',32);
INSERT INTO loseWeight VALUES(94,24,'3 min',73);
INSERT INTO loseWeight VALUES(95,24,'3 min',6);
INSERT INTO loseWeight VALUES(96,25,'2 min',2);
INSERT INTO loseWeight VALUES(97,25,'2 min',74);
INSERT INTO loseWeight VALUES(98,25,'2 min',1);
INSERT INTO loseWeight VALUES(99,25,'1 min',4);
INSERT INTO loseWeight VALUES(100,26,'3 min',5);
INSERT INTO loseWeight VALUES(101,26,'3 min',51);
INSERT INTO loseWeight VALUES(102,26,'3 min',16);
INSERT INTO loseWeight VALUES(103,26,'3 min',30);
INSERT INTO loseWeight VALUES(104,26,'1 min',54);
INSERT INTO loseWeight VALUES(105,27,'2 min',10);
INSERT INTO loseWeight VALUES(106,27,'2 min',55);
INSERT INTO loseWeight VALUES(107,27,'2 min',11);
INSERT INTO loseWeight VALUES(108,27,'2 min',75);
INSERT INTO loseWeight VALUES(109,27,'2 min',56);
INSERT INTO loseWeight VALUES(110,27,'2 min',76);
INSERT INTO loseWeight VALUES(111,27,'1 min',32);
INSERT INTO loseWeight VALUES(112,28,'3 min',77);
INSERT INTO loseWeight VALUES(113,28,'3 min',56);
INSERT INTO loseWeight VALUES(114,28,'3 min',6);
INSERT INTO loseWeight VALUES(115,29,'3 min',32);
INSERT INTO loseWeight VALUES(116,29,'3 min',33);
INSERT INTO loseWeight VALUES(117,29,'3 min',74);
INSERT INTO loseWeight VALUES(118,29,'3 min',1);
INSERT INTO loseWeight VALUES(119,29,'1 min',58);
INSERT INTO loseWeight VALUES(120,30,'3 min',30);
INSERT INTO loseWeight VALUES(121,30,'1 min',8);
INSERT INTO loseWeight VALUES(122,30,'1 min',54);


create table MealNamesMBD(
	meal_id int,
	meal_name varchar2(150),
	constraint meal_id_fir1 primary key(meal_id)
);

INSERT INTO MealNamesMBD VALUES(1,'1/2 cup oatmeal (dry amount) made with water');
INSERT INTO MealNamesMBD VALUES(2,'1 cup green vegetables');
INSERT INTO MealNamesMBD VALUES(3,'Tuna sandwich made with 6-oz. can tuna (in spring water)');
INSERT INTO MealNamesMBD VALUES(4,'Protein shake made w/ 40 g whey protein');
INSERT INTO MealNamesMBD VALUES(5,'2 slices whole-wheat bread');
INSERT INTO MealNamesMBD VALUES(6,'Chicken salad made with 8 oz. chicken breast');
INSERT INTO MealNamesMBD VALUES(7,'1 medium bagel with 2 tbsp. reduced-fat peanut butter');
INSERT INTO MealNamesMBD VALUES(8,'1 cup brown long-grain rice (cooked amount)');
INSERT INTO MealNamesMBD VALUES(9,'1 cup green veggies');
INSERT INTO MealNamesMBD VALUES(10,'1/2 medium tomato');
INSERT INTO MealNamesMBD VALUES(11,'Protein shake made w/ 30-40 g whey protein');
INSERT INTO MealNamesMBD VALUES(12,'8 oz. red snapper or halibut');
INSERT INTO MealNamesMBD VALUES(13,'1 piece fruit');
INSERT INTO MealNamesMBD VALUES(14,'8 oz. chicken breast');
INSERT INTO MealNamesMBD VALUES(15,'Large baked potato with skin (3-4″ in diameter)');
INSERT INTO MealNamesMBD VALUES(16,'Low-carb, low-sugar protein bar');
INSERT INTO MealNamesMBD VALUES(17,'Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa');
INSERT INTO MealNamesMBD VALUES(18,'16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo');
INSERT INTO MealNamesMBD VALUES(19,'1/2 cup strawberries');
INSERT INTO MealNamesMBD VALUES(20,'1 cup whole-grain cereal');
INSERT INTO MealNamesMBD VALUES(21,'8 oz. sliced turkey');
INSERT INTO MealNamesMBD VALUES(22,'2 Tbsp. Italian dressing');
INSERT INTO MealNamesMBD VALUES(23,'6 oz. chicken breast');
INSERT INTO MealNamesMBD VALUES(24,'6-8 stalks asparagus');
INSERT INTO MealNamesMBD VALUES(25,'1/2 cup oatmeal made with water');
INSERT INTO MealNamesMBD VALUES(26,'6 egg whites cooked with 1 yolk');
INSERT INTO MealNamesMBD VALUES(27,'2 leaves romaine lettuce');
INSERT INTO MealNamesMBD VALUES(28,'1 Tbsp. peanut butter');
INSERT INTO MealNamesMBD VALUES(29,'7 oz. lean steak');
INSERT INTO MealNamesMBD VALUES(30,'1/2 cup broccoli');
INSERT INTO MealNamesMBD VALUES(31,'6 oz. lean steak');
INSERT INTO MealNamesMBD VALUES(32,'1 Tbsp. fat-free mayo');
INSERT INTO MealNamesMBD VALUES(33,'1 cup berries');
INSERT INTO MealNamesMBD VALUES(34,'1 serving Raspberry Peach Mango Smoothie Bowl');
INSERT INTO MealNamesMBD VALUES(35,'2 servings Vegan Freezer Meal 1 Burritos');
INSERT INTO MealNamesMBD VALUES(36,'1 serving Almond-Honey Power Bar');
INSERT INTO MealNamesMBD VALUES(37,'2 servings Vegetable and Pasta Salad');
INSERT INTO MealNamesMBD VALUES(38,'1 large apple');
INSERT INTO MealNamesMBD VALUES(39,'1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots');
INSERT INTO MealNamesMBD VALUES(40,'15 baby carrots');
INSERT INTO MealNamesMBD VALUES(41,'1 serving Roasted Butternut Squash and Root Vegetables with Cauliflower Gnocchi');
INSERT INTO MealNamesMBD VALUES(42,'2 servings Philly Cheese Steak Sloppy Joes');
INSERT INTO MealNamesMBD VALUES(43,'2 servings Maple-Nut Granola');
INSERT INTO MealNamesMBD VALUES(44,'1 slice Swiss cheese');
INSERT INTO MealNamesMBD VALUES(45,'6 oz. 2% plain Greek yogurt');
INSERT INTO MealNamesMBD VALUES(46,'2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta');
INSERT INTO MealNamesMBD VALUES(47,'1/4 cup hummus');
INSERT INTO MealNamesMBD VALUES(48,'1 slice whole-wheat toast with 1 tsp. unsalted butter');
INSERT INTO MealNamesMBD VALUES(49,'2 cups fresh spinach and 1 cup shredded carrots topped with ½ Tbsp. olive oil and ½ Tbsp. balsamic vinegar');
INSERT INTO MealNamesMBD VALUES(50,'1 medium apple');
INSERT INTO MealNamesMBD VALUES(51,'1 serving Southern Style Oven-Fried Chicken');
INSERT INTO MealNamesMBD VALUES(52,'2 hard-boiled eggs');
INSERT INTO MealNamesMBD VALUES(53,'2 servings Almond-Honey Power Bars');
INSERT INTO MealNamesMBD VALUES(54,'2 servings Homemade Microwave Popcorn');
INSERT INTO MealNamesMBD VALUES(55,'1 hard-boiled egg');
INSERT INTO MealNamesMBD VALUES(56,'1 cup strawberries');
INSERT INTO MealNamesMBD VALUES(57,'1 cup mango chunks');
INSERT INTO MealNamesMBD VALUES(58,'1 Tbsp. natural peanut butter');
INSERT INTO MealNamesMBD VALUES(59,'1 cup 2% milk');
INSERT INTO MealNamesMBD VALUES(60,'1/2 cups Easy Brown Rice');
INSERT INTO MealNamesMBD VALUES(61,'1 medium orange');
INSERT INTO MealNamesMBD VALUES(62,'4 graham crackers');
INSERT INTO MealNamesMBD VALUES(63,'2 servings Green Goddess Salad with Chicken');
INSERT INTO MealNamesMBD VALUES(64,'8 whole-wheat crackers');
INSERT INTO MealNamesMBD VALUES(65,'1 serving Greek Potato Salad');
INSERT INTO MealNamesMBD VALUES(66,'1 serving Blueberry-Banana Overnight Oats');
INSERT INTO MealNamesMBD VALUES(67,'1 serving Avocado-Egg Toas');
INSERT INTO MealNamesMBD VALUES(68,'1 serving Butternut Squash Soup with Avocado & Chickpeas');
INSERT INTO MealNamesMBD VALUES(69,'1 medium kiwi');
INSERT INTO MealNamesMBD VALUES(70,'1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice');
INSERT INTO MealNamesMBD VALUES(71,'1 serving Apple Cider Vinegar Tonic');
INSERT INTO MealNamesMBD VALUES(72,'1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast');
INSERT INTO MealNamesMBD VALUES(73,'1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt');
INSERT INTO MealNamesMBD VALUES(74,'1 serving Vegan Coconut Chickpea Curry');
INSERT INTO MealNamesMBD VALUES(75,'1/2 cups Blueberry-Banana Overnight Oats');
INSERT INTO MealNamesMBD VALUES(76,'1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast');
INSERT INTO MealNamesMBD VALUES(77,'2 medium kiwis');
INSERT INTO MealNamesMBD VALUES(78,'1 serving Zucchini Noodles with Pesto and Chicken');
INSERT INTO MealNamesMBD VALUES(79,'1 slice Peanut Butter-Banana Cinnamon Toast');
INSERT INTO MealNamesMBD VALUES(80,'1 cup Apple Cider Vinegar Tonic with 1 cup blueberries');
INSERT INTO MealNamesMBD VALUES(81,'1 serving Green Salad with Edamame and Beets');
INSERT INTO MealNamesMBD VALUES(82,'1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice');
INSERT INTO MealNamesMBD VALUES(83,'1 kiwi');
INSERT INTO MealNamesMBD VALUES(84,'1/2 cups Slow-Cooker Vegetable Soup with 3 Tbsp. hummus and 6 seeded crackers');
INSERT INTO MealNamesMBD VALUES(85,'1 serving Taco Spaghetti Squash Boats');


create table MuscleBuildDiet(
	m_id int,
	meal_id int,
	day int,
	constraint m_id_fir primary key(m_id),
	constraint meal_id_fir2 foreign key (meal_id) references MealNamesMBD(meal_id)
);


INSERT INTO MuscleBuildDiet VALUES(1,1,1);
INSERT INTO MuscleBuildDiet VALUES(2,2,1);
INSERT INTO MuscleBuildDiet VALUES(3,3,1);
INSERT INTO MuscleBuildDiet VALUES(4,4,1);
INSERT INTO MuscleBuildDiet VALUES(5,5,1);
INSERT INTO MuscleBuildDiet VALUES(6,6,2);
INSERT INTO MuscleBuildDiet VALUES(7,7,2);
INSERT INTO MuscleBuildDiet VALUES(8,8,2);
INSERT INTO MuscleBuildDiet VALUES(9,9,2);
INSERT INTO MuscleBuildDiet VALUES(10,10,2);
INSERT INTO MuscleBuildDiet VALUES(11,11,3);
INSERT INTO MuscleBuildDiet VALUES(12,12,3);
INSERT INTO MuscleBuildDiet VALUES(13,13,3);
INSERT INTO MuscleBuildDiet VALUES(14,14,3);
INSERT INTO MuscleBuildDiet VALUES(15,15,3);
INSERT INTO MuscleBuildDiet VALUES(16,16,4);
INSERT INTO MuscleBuildDiet VALUES(17,17,4);
INSERT INTO MuscleBuildDiet VALUES(18,18,4);
INSERT INTO MuscleBuildDiet VALUES(19,19,4);
INSERT INTO MuscleBuildDiet VALUES(20,20,4);
INSERT INTO MuscleBuildDiet VALUES(21,21,5);
INSERT INTO MuscleBuildDiet VALUES(22,22,5);
INSERT INTO MuscleBuildDiet VALUES(23,23,5);
INSERT INTO MuscleBuildDiet VALUES(24,24,5);
INSERT INTO MuscleBuildDiet VALUES(25,25,5);
INSERT INTO MuscleBuildDiet VALUES(26,26,6);
INSERT INTO MuscleBuildDiet VALUES(27,27,6);
INSERT INTO MuscleBuildDiet VALUES(28,28,6);
INSERT INTO MuscleBuildDiet VALUES(29,29,6);
INSERT INTO MuscleBuildDiet VALUES(30,30,6);
INSERT INTO MuscleBuildDiet VALUES(31,1,7);
INSERT INTO MuscleBuildDiet VALUES(32,2,7);
INSERT INTO MuscleBuildDiet VALUES(33,3,7);
INSERT INTO MuscleBuildDiet VALUES(34,4,7);
INSERT INTO MuscleBuildDiet VALUES(35,5,7);
INSERT INTO MuscleBuildDiet VALUES(36,6,8);
INSERT INTO MuscleBuildDiet VALUES(37,7,8);
INSERT INTO MuscleBuildDiet VALUES(38,8,8);
INSERT INTO MuscleBuildDiet VALUES(39,9,8);
INSERT INTO MuscleBuildDiet VALUES(40,10,8);
INSERT INTO MuscleBuildDiet VALUES(41,11,9);
INSERT INTO MuscleBuildDiet VALUES(42,12,9);
INSERT INTO MuscleBuildDiet VALUES(43,13,9);
INSERT INTO MuscleBuildDiet VALUES(44,14,9);
INSERT INTO MuscleBuildDiet VALUES(45,15,9);
INSERT INTO MuscleBuildDiet VALUES(46,16,10);
INSERT INTO MuscleBuildDiet VALUES(47,17,10);
INSERT INTO MuscleBuildDiet VALUES(48,18,10);
INSERT INTO MuscleBuildDiet VALUES(49,19,10);
INSERT INTO MuscleBuildDiet VALUES(50,20,10);
INSERT INTO MuscleBuildDiet VALUES(51,21,11);
INSERT INTO MuscleBuildDiet VALUES(52,22,11);
INSERT INTO MuscleBuildDiet VALUES(53,23,11);
INSERT INTO MuscleBuildDiet VALUES(54,24,11);
INSERT INTO MuscleBuildDiet VALUES(55,25,11);
INSERT INTO MuscleBuildDiet VALUES(56,26,12);
INSERT INTO MuscleBuildDiet VALUES(57,27,12);
INSERT INTO MuscleBuildDiet VALUES(58,28,12);
INSERT INTO MuscleBuildDiet VALUES(59,29,12);
INSERT INTO MuscleBuildDiet VALUES(60,30,13);
INSERT INTO MuscleBuildDiet VALUES(61,31,13);
INSERT INTO MuscleBuildDiet VALUES(62,32,13);
INSERT INTO MuscleBuildDiet VALUES(63,1,13);
INSERT INTO MuscleBuildDiet VALUES(64,2,13);
INSERT INTO MuscleBuildDiet VALUES(65,3,13);
INSERT INTO MuscleBuildDiet VALUES(66,4,14);
INSERT INTO MuscleBuildDiet VALUES(67,5,14);
INSERT INTO MuscleBuildDiet VALUES(68,6,14);
INSERT INTO MuscleBuildDiet VALUES(69,7,14);
INSERT INTO MuscleBuildDiet VALUES(70,8,14);
INSERT INTO MuscleBuildDiet VALUES(71,9,15);
INSERT INTO MuscleBuildDiet VALUES(72,10,15);
INSERT INTO MuscleBuildDiet VALUES(73,11,15);
INSERT INTO MuscleBuildDiet VALUES(74,12,15);
INSERT INTO MuscleBuildDiet VALUES(75,13,15);
INSERT INTO MuscleBuildDiet VALUES(76,14,16);
INSERT INTO MuscleBuildDiet VALUES(77,15,16);
INSERT INTO MuscleBuildDiet VALUES(78,16,16);
INSERT INTO MuscleBuildDiet VALUES(79,17,16);
INSERT INTO MuscleBuildDiet VALUES(80,18,16);
INSERT INTO MuscleBuildDiet VALUES(81,19,17);
INSERT INTO MuscleBuildDiet VALUES(82,20,17);
INSERT INTO MuscleBuildDiet VALUES(83,21,17);
INSERT INTO MuscleBuildDiet VALUES(84,22,17);
INSERT INTO MuscleBuildDiet VALUES(85,23,17);
INSERT INTO MuscleBuildDiet VALUES(86,24,18);
INSERT INTO MuscleBuildDiet VALUES(87,25,18);
INSERT INTO MuscleBuildDiet VALUES(88,26,18);
INSERT INTO MuscleBuildDiet VALUES(89,27,18);
INSERT INTO MuscleBuildDiet VALUES(90,28,18);
INSERT INTO MuscleBuildDiet VALUES(91,29,19);
INSERT INTO MuscleBuildDiet VALUES(92,30,19);
INSERT INTO MuscleBuildDiet VALUES(93,31,19);
INSERT INTO MuscleBuildDiet VALUES(94,32,19);
INSERT INTO MuscleBuildDiet VALUES(95,1,19);
INSERT INTO MuscleBuildDiet VALUES(96,2,20);
INSERT INTO MuscleBuildDiet VALUES(97,3,20);
INSERT INTO MuscleBuildDiet VALUES(98,4,20);
INSERT INTO MuscleBuildDiet VALUES(99,5,20);
INSERT INTO MuscleBuildDiet VALUES(100,6,20);
INSERT INTO MuscleBuildDiet VALUES(101,7,21);
INSERT INTO MuscleBuildDiet VALUES(102,8,21);
INSERT INTO MuscleBuildDiet VALUES(103,9,21);
INSERT INTO MuscleBuildDiet VALUES(104,10,21);
INSERT INTO MuscleBuildDiet VALUES(105,11,21);
INSERT INTO MuscleBuildDiet VALUES(106,12,22);
INSERT INTO MuscleBuildDiet VALUES(107,13,22);
INSERT INTO MuscleBuildDiet VALUES(108,14,22);
INSERT INTO MuscleBuildDiet VALUES(109,15,22);
INSERT INTO MuscleBuildDiet VALUES(110,16,22);
INSERT INTO MuscleBuildDiet VALUES(111,17,23);
INSERT INTO MuscleBuildDiet VALUES(112,18,23);
INSERT INTO MuscleBuildDiet VALUES(113,19,23);
INSERT INTO MuscleBuildDiet VALUES(114,20,23);
INSERT INTO MuscleBuildDiet VALUES(115,21,23);
INSERT INTO MuscleBuildDiet VALUES(116,22,24);
INSERT INTO MuscleBuildDiet VALUES(117,23,24);
INSERT INTO MuscleBuildDiet VALUES(118,24,24);
INSERT INTO MuscleBuildDiet VALUES(119,25,24);
INSERT INTO MuscleBuildDiet VALUES(120,26,24);
INSERT INTO MuscleBuildDiet VALUES(121,27,25);
INSERT INTO MuscleBuildDiet VALUES(122,28,25);
INSERT INTO MuscleBuildDiet VALUES(123,29,25);
INSERT INTO MuscleBuildDiet VALUES(124,30,25);
INSERT INTO MuscleBuildDiet VALUES(125,31,25);
INSERT INTO MuscleBuildDiet VALUES(126,32,26);
INSERT INTO MuscleBuildDiet VALUES(127,1,26);
INSERT INTO MuscleBuildDiet VALUES(128,2,26);
INSERT INTO MuscleBuildDiet VALUES(129,3,26);
INSERT INTO MuscleBuildDiet VALUES(130,4,26);
INSERT INTO MuscleBuildDiet VALUES(131,5,27);
INSERT INTO MuscleBuildDiet VALUES(132,6,27);
INSERT INTO MuscleBuildDiet VALUES(133,7,27);
INSERT INTO MuscleBuildDiet VALUES(134,8,27);
INSERT INTO MuscleBuildDiet VALUES(135,9,27);
INSERT INTO MuscleBuildDiet VALUES(136,10,28);
INSERT INTO MuscleBuildDiet VALUES(137,11,28);
INSERT INTO MuscleBuildDiet VALUES(138,12,28);
INSERT INTO MuscleBuildDiet VALUES(139,13,28);
INSERT INTO MuscleBuildDiet VALUES(140,14,28);
INSERT INTO MuscleBuildDiet VALUES(141,15,29);
INSERT INTO MuscleBuildDiet VALUES(142,16,29);
INSERT INTO MuscleBuildDiet VALUES(143,17,29);
INSERT INTO MuscleBuildDiet VALUES(144,18,29);
INSERT INTO MuscleBuildDiet VALUES(145,19,29);
INSERT INTO MuscleBuildDiet VALUES(146,20,30);
INSERT INTO MuscleBuildDiet VALUES(147,21,30);
INSERT INTO MuscleBuildDiet VALUES(148,22,30);
INSERT INTO MuscleBuildDiet VALUES(149,23,30);
INSERT INTO MuscleBuildDiet VALUES(150,24,30);



create table WeightGainDiet(
	m_id int,
	meal_id int,
	day int,
	constraint m_id_thir primary key(m_id),
	constraint meal_id_fir4 foreign key (meal_id) references MealNamesMBD(meal_id));

INSERT INTO WeightGainDiet VALUES(1,41,1);
INSERT INTO WeightGainDiet VALUES(2,42,1);
INSERT INTO WeightGainDiet VALUES(3,43,1);
INSERT INTO WeightGainDiet VALUES(4,44,1);
INSERT INTO WeightGainDiet VALUES(5,45,1);
INSERT INTO WeightGainDiet VALUES(6,46,2);
INSERT INTO WeightGainDiet VALUES(7,47,2);
INSERT INTO WeightGainDiet VALUES(8,48,2);
INSERT INTO WeightGainDiet VALUES(9,49,2);
INSERT INTO WeightGainDiet VALUES(10,50,2);
INSERT INTO WeightGainDiet VALUES(11,51,3);
INSERT INTO WeightGainDiet VALUES(12,52,3);
INSERT INTO WeightGainDiet VALUES(13,53,3);
INSERT INTO WeightGainDiet VALUES(14,54,3);
INSERT INTO WeightGainDiet VALUES(15,55,3);
INSERT INTO WeightGainDiet VALUES(16,56,4);
INSERT INTO WeightGainDiet VALUES(17,57,4);
INSERT INTO WeightGainDiet VALUES(18,58,4);
INSERT INTO WeightGainDiet VALUES(19,59,4);
INSERT INTO WeightGainDiet VALUES(20,60,4);
INSERT INTO WeightGainDiet VALUES(21,61,5);
INSERT INTO WeightGainDiet VALUES(22,62,5);
INSERT INTO WeightGainDiet VALUES(23,63,5);
INSERT INTO WeightGainDiet VALUES(24,64,5);
INSERT INTO WeightGainDiet VALUES(25,65,5);
INSERT INTO WeightGainDiet VALUES(26,66,6);
INSERT INTO WeightGainDiet VALUES(27,67,6);
INSERT INTO WeightGainDiet VALUES(28,68,6);
INSERT INTO WeightGainDiet VALUES(29,69,6);
INSERT INTO WeightGainDiet VALUES(30,70,6);
INSERT INTO WeightGainDiet VALUES(31,41,7);
INSERT INTO WeightGainDiet VALUES(32,42,7);
INSERT INTO WeightGainDiet VALUES(33,43,7);
INSERT INTO WeightGainDiet VALUES(34,44,7);
INSERT INTO WeightGainDiet VALUES(35,45,7);
INSERT INTO WeightGainDiet VALUES(36,46,8);
INSERT INTO WeightGainDiet VALUES(37,47,8);
INSERT INTO WeightGainDiet VALUES(38,48,8);
INSERT INTO WeightGainDiet VALUES(39,49,8);
INSERT INTO WeightGainDiet VALUES(40,50,8);
INSERT INTO WeightGainDiet VALUES(41,51,9);
INSERT INTO WeightGainDiet VALUES(42,52,9);
INSERT INTO WeightGainDiet VALUES(43,53,9);
INSERT INTO WeightGainDiet VALUES(44,54,9);
INSERT INTO WeightGainDiet VALUES(45,55,9);
INSERT INTO WeightGainDiet VALUES(46,56,10);
INSERT INTO WeightGainDiet VALUES(47,57,10);
INSERT INTO WeightGainDiet VALUES(48,58,10);
INSERT INTO WeightGainDiet VALUES(49,59,10);
INSERT INTO WeightGainDiet VALUES(50,60,10);
INSERT INTO WeightGainDiet VALUES(51,61,11);
INSERT INTO WeightGainDiet VALUES(52,62,11);
INSERT INTO WeightGainDiet VALUES(53,63,11);
INSERT INTO WeightGainDiet VALUES(54,64,11);
INSERT INTO WeightGainDiet VALUES(55,65,11);
INSERT INTO WeightGainDiet VALUES(56,66,12);
INSERT INTO WeightGainDiet VALUES(57,67,12);
INSERT INTO WeightGainDiet VALUES(58,68,12);
INSERT INTO WeightGainDiet VALUES(59,69,12);
INSERT INTO WeightGainDiet VALUES(60,70,13);
INSERT INTO WeightGainDiet VALUES(61,45,13);
INSERT INTO WeightGainDiet VALUES(62,48,13);
INSERT INTO WeightGainDiet VALUES(63,41,13);
INSERT INTO WeightGainDiet VALUES(64,42,13);
INSERT INTO WeightGainDiet VALUES(65,43,13);
INSERT INTO WeightGainDiet VALUES(66,44,14);
INSERT INTO WeightGainDiet VALUES(67,45,14);
INSERT INTO WeightGainDiet VALUES(68,46,14);
INSERT INTO WeightGainDiet VALUES(69,47,14);
INSERT INTO WeightGainDiet VALUES(70,48,14);
INSERT INTO WeightGainDiet VALUES(71,49,15);
INSERT INTO WeightGainDiet VALUES(72,50,15);
INSERT INTO WeightGainDiet VALUES(73,51,15);
INSERT INTO WeightGainDiet VALUES(74,52,15);
INSERT INTO WeightGainDiet VALUES(75,53,15);
INSERT INTO WeightGainDiet VALUES(76,54,16);
INSERT INTO WeightGainDiet VALUES(77,55,16);
INSERT INTO WeightGainDiet VALUES(78,56,16);
INSERT INTO WeightGainDiet VALUES(79,57,16);
INSERT INTO WeightGainDiet VALUES(80,58,16);
INSERT INTO WeightGainDiet VALUES(81,59,17);
INSERT INTO WeightGainDiet VALUES(82,60,17);
INSERT INTO WeightGainDiet VALUES(83,61,17);
INSERT INTO WeightGainDiet VALUES(84,62,17);
INSERT INTO WeightGainDiet VALUES(85,63,17);
INSERT INTO WeightGainDiet VALUES(86,64,18);
INSERT INTO WeightGainDiet VALUES(87,65,18);
INSERT INTO WeightGainDiet VALUES(88,66,18);
INSERT INTO WeightGainDiet VALUES(89,67,18);
INSERT INTO WeightGainDiet VALUES(90,68,18);
INSERT INTO WeightGainDiet VALUES(91,69,19);
INSERT INTO WeightGainDiet VALUES(92,70,19);
INSERT INTO WeightGainDiet VALUES(93,41,19);
INSERT INTO WeightGainDiet VALUES(94,42,19);
INSERT INTO WeightGainDiet VALUES(95,41,19);
INSERT INTO WeightGainDiet VALUES(96,42,20);
INSERT INTO WeightGainDiet VALUES(97,43,20);
INSERT INTO WeightGainDiet VALUES(98,44,20);
INSERT INTO WeightGainDiet VALUES(99,45,20);
INSERT INTO WeightGainDiet VALUES(100,46,20);
INSERT INTO WeightGainDiet VALUES(101,47,21);
INSERT INTO WeightGainDiet VALUES(102,48,21);
INSERT INTO WeightGainDiet VALUES(103,49,21);
INSERT INTO WeightGainDiet VALUES(104,50,21);
INSERT INTO WeightGainDiet VALUES(105,51,21);
INSERT INTO WeightGainDiet VALUES(106,52,22);
INSERT INTO WeightGainDiet VALUES(107,53,22);
INSERT INTO WeightGainDiet VALUES(108,54,22);
INSERT INTO WeightGainDiet VALUES(109,55,22);
INSERT INTO WeightGainDiet VALUES(110,56,22);
INSERT INTO WeightGainDiet VALUES(111,57,23);
INSERT INTO WeightGainDiet VALUES(112,58,23);
INSERT INTO WeightGainDiet VALUES(113,69,23);
INSERT INTO WeightGainDiet VALUES(114,60,23);
INSERT INTO WeightGainDiet VALUES(115,61,23);
INSERT INTO WeightGainDiet VALUES(116,62,24);
INSERT INTO WeightGainDiet VALUES(117,63,24);
INSERT INTO WeightGainDiet VALUES(118,64,24);
INSERT INTO WeightGainDiet VALUES(119,65,24);
INSERT INTO WeightGainDiet VALUES(120,66,24);
INSERT INTO WeightGainDiet VALUES(121,67,25);
INSERT INTO WeightGainDiet VALUES(122,68,25);
INSERT INTO WeightGainDiet VALUES(123,69,25);
INSERT INTO WeightGainDiet VALUES(124,70,25);
INSERT INTO WeightGainDiet VALUES(125,51,25);
INSERT INTO WeightGainDiet VALUES(126,52,26);
INSERT INTO WeightGainDiet VALUES(127,41,26);
INSERT INTO WeightGainDiet VALUES(128,42,26);
INSERT INTO WeightGainDiet VALUES(129,43,26);
INSERT INTO WeightGainDiet VALUES(130,44,26);
INSERT INTO WeightGainDiet VALUES(131,45,27);
INSERT INTO WeightGainDiet VALUES(132,46,27);
INSERT INTO WeightGainDiet VALUES(133,47,27);
INSERT INTO WeightGainDiet VALUES(134,48,27);
INSERT INTO WeightGainDiet VALUES(135,49,27);
INSERT INTO WeightGainDiet VALUES(136,50,28);
INSERT INTO WeightGainDiet VALUES(137,51,28);
INSERT INTO WeightGainDiet VALUES(138,52,28);
INSERT INTO WeightGainDiet VALUES(139,53,28);
INSERT INTO WeightGainDiet VALUES(140,54,28);
INSERT INTO WeightGainDiet VALUES(141,55,29);
INSERT INTO WeightGainDiet VALUES(142,56,29);
INSERT INTO WeightGainDiet VALUES(143,57,29);
INSERT INTO WeightGainDiet VALUES(144,58,29);
INSERT INTO WeightGainDiet VALUES(145,59,29);
INSERT INTO WeightGainDiet VALUES(146,60,30);
INSERT INTO WeightGainDiet VALUES(147,61,30);
INSERT INTO WeightGainDiet VALUES(148,62,30);
INSERT INTO WeightGainDiet VALUES(149,63,30);
INSERT INTO WeightGainDiet VALUES(150,64,30);




create table WeightLossDiet(
	m_id int,
	meal_id int,
	day int,
	constraint m_id_for primary key(m_id),
	constraint meal_id_fir5 foreign key (meal_id) references MealNamesMBD(meal_id));

INSERT INTO WeightLossDiet VALUES(1,71,1);
INSERT INTO WeightLossDiet VALUES(2,72,1);
INSERT INTO WeightLossDiet VALUES(3,73,1);
INSERT INTO WeightLossDiet VALUES(4,74,1);
INSERT INTO WeightLossDiet VALUES(5,75,1);
INSERT INTO WeightLossDiet VALUES(6,76,2);
INSERT INTO WeightLossDiet VALUES(7,77,2);
INSERT INTO WeightLossDiet VALUES(8,78,2);
INSERT INTO WeightLossDiet VALUES(9,79,2);
INSERT INTO WeightLossDiet VALUES(10,80,2);
INSERT INTO WeightLossDiet VALUES(11,81,3);
INSERT INTO WeightLossDiet VALUES(12,82,3);
INSERT INTO WeightLossDiet VALUES(13,83,3);
INSERT INTO WeightLossDiet VALUES(14,84,3);
INSERT INTO WeightLossDiet VALUES(15,85,3);
INSERT INTO WeightLossDiet VALUES(16,76,4);
INSERT INTO WeightLossDiet VALUES(17,77,4);
INSERT INTO WeightLossDiet VALUES(18,78,4);
INSERT INTO WeightLossDiet VALUES(19,79,4);
INSERT INTO WeightLossDiet VALUES(20,80,4);
INSERT INTO WeightLossDiet VALUES(21,81,5);
INSERT INTO WeightLossDiet VALUES(22,82,5);
INSERT INTO WeightLossDiet VALUES(23,83,5);
INSERT INTO WeightLossDiet VALUES(24,84,5);
INSERT INTO WeightLossDiet VALUES(25,85,5);
INSERT INTO WeightLossDiet VALUES(26,76,6);
INSERT INTO WeightLossDiet VALUES(27,77,6);
INSERT INTO WeightLossDiet VALUES(28,78,6);
INSERT INTO WeightLossDiet VALUES(29,79,6);
INSERT INTO WeightLossDiet VALUES(30,70,6);
INSERT INTO WeightLossDiet VALUES(31,71,7);
INSERT INTO WeightLossDiet VALUES(32,72,7);
INSERT INTO WeightLossDiet VALUES(33,73,7);
INSERT INTO WeightLossDiet VALUES(34,74,7);
INSERT INTO WeightLossDiet VALUES(35,75,7);
INSERT INTO WeightLossDiet VALUES(36,76,8);
INSERT INTO WeightLossDiet VALUES(37,77,8);
INSERT INTO WeightLossDiet VALUES(38,78,8);
INSERT INTO WeightLossDiet VALUES(39,79,8);
INSERT INTO WeightLossDiet VALUES(40,80,8);
INSERT INTO WeightLossDiet VALUES(41,81,9);
INSERT INTO WeightLossDiet VALUES(42,82,9);
INSERT INTO WeightLossDiet VALUES(43,83,9);
INSERT INTO WeightLossDiet VALUES(44,84,9);
INSERT INTO WeightLossDiet VALUES(45,85,9);
INSERT INTO WeightLossDiet VALUES(46,76,10);
INSERT INTO WeightLossDiet VALUES(47,77,10);
INSERT INTO WeightLossDiet VALUES(48,78,10);
INSERT INTO WeightLossDiet VALUES(49,79,10);
INSERT INTO WeightLossDiet VALUES(50,70,10);
INSERT INTO WeightLossDiet VALUES(51,71,11);
INSERT INTO WeightLossDiet VALUES(52,72,11);
INSERT INTO WeightLossDiet VALUES(53,73,11);
INSERT INTO WeightLossDiet VALUES(54,74,11);
INSERT INTO WeightLossDiet VALUES(55,75,11);
INSERT INTO WeightLossDiet VALUES(56,76,12);
INSERT INTO WeightLossDiet VALUES(57,77,12);
INSERT INTO WeightLossDiet VALUES(58,78,12);
INSERT INTO WeightLossDiet VALUES(59,79,12);
INSERT INTO WeightLossDiet VALUES(60,80,13);
INSERT INTO WeightLossDiet VALUES(61,85,13);
INSERT INTO WeightLossDiet VALUES(62,78,13);
INSERT INTO WeightLossDiet VALUES(63,71,13);
INSERT INTO WeightLossDiet VALUES(64,72,13);
INSERT INTO WeightLossDiet VALUES(65,73,13);
INSERT INTO WeightLossDiet VALUES(66,74,14);
INSERT INTO WeightLossDiet VALUES(67,75,14);
INSERT INTO WeightLossDiet VALUES(68,76,14);
INSERT INTO WeightLossDiet VALUES(69,77,14);
INSERT INTO WeightLossDiet VALUES(70,78,14);
INSERT INTO WeightLossDiet VALUES(71,79,15);
INSERT INTO WeightLossDiet VALUES(72,80,15);
INSERT INTO WeightLossDiet VALUES(73,81,15);
INSERT INTO WeightLossDiet VALUES(74,82,15);
INSERT INTO WeightLossDiet VALUES(75,83,15);
INSERT INTO WeightLossDiet VALUES(76,84,16);
INSERT INTO WeightLossDiet VALUES(77,85,16);
INSERT INTO WeightLossDiet VALUES(78,76,16);
INSERT INTO WeightLossDiet VALUES(79,77,16);
INSERT INTO WeightLossDiet VALUES(80,78,16);
INSERT INTO WeightLossDiet VALUES(81,79,17);
INSERT INTO WeightLossDiet VALUES(82,70,17);
INSERT INTO WeightLossDiet VALUES(83,71,17);
INSERT INTO WeightLossDiet VALUES(84,72,17);
INSERT INTO WeightLossDiet VALUES(85,73,17);
INSERT INTO WeightLossDiet VALUES(86,74,18);
INSERT INTO WeightLossDiet VALUES(87,75,18);
INSERT INTO WeightLossDiet VALUES(88,76,18);
INSERT INTO WeightLossDiet VALUES(89,77,18);
INSERT INTO WeightLossDiet VALUES(90,78,18);
INSERT INTO WeightLossDiet VALUES(91,79,19);
INSERT INTO WeightLossDiet VALUES(92,80,19);
INSERT INTO WeightLossDiet VALUES(93,81,19);
INSERT INTO WeightLossDiet VALUES(94,82,19);
INSERT INTO WeightLossDiet VALUES(95,81,19);
INSERT INTO WeightLossDiet VALUES(96,82,20);
INSERT INTO WeightLossDiet VALUES(97,83,20);
INSERT INTO WeightLossDiet VALUES(98,84,20);
INSERT INTO WeightLossDiet VALUES(99,85,20);
INSERT INTO WeightLossDiet VALUES(100,76,20);
INSERT INTO WeightLossDiet VALUES(101,77,21);
INSERT INTO WeightLossDiet VALUES(102,78,21);
INSERT INTO WeightLossDiet VALUES(103,79,21);
INSERT INTO WeightLossDiet VALUES(104,70,21);
INSERT INTO WeightLossDiet VALUES(105,71,21);
INSERT INTO WeightLossDiet VALUES(106,72,22);
INSERT INTO WeightLossDiet VALUES(107,73,22);
INSERT INTO WeightLossDiet VALUES(108,74,22);
INSERT INTO WeightLossDiet VALUES(109,75,22);
INSERT INTO WeightLossDiet VALUES(110,76,22);
INSERT INTO WeightLossDiet VALUES(111,77,23);
INSERT INTO WeightLossDiet VALUES(112,78,23);
INSERT INTO WeightLossDiet VALUES(113,79,23);
INSERT INTO WeightLossDiet VALUES(114,80,23);
INSERT INTO WeightLossDiet VALUES(115,81,23);
INSERT INTO WeightLossDiet VALUES(116,82,24);
INSERT INTO WeightLossDiet VALUES(117,83,24);
INSERT INTO WeightLossDiet VALUES(118,84,24);
INSERT INTO WeightLossDiet VALUES(119,85,24);
INSERT INTO WeightLossDiet VALUES(120,76,24);
INSERT INTO WeightLossDiet VALUES(121,77,25);
INSERT INTO WeightLossDiet VALUES(122,78,25);
INSERT INTO WeightLossDiet VALUES(123,79,25);
INSERT INTO WeightLossDiet VALUES(124,70,25);
INSERT INTO WeightLossDiet VALUES(125,71,25);
INSERT INTO WeightLossDiet VALUES(126,72,26);
INSERT INTO WeightLossDiet VALUES(127,71,26);
INSERT INTO WeightLossDiet VALUES(128,72,26);
INSERT INTO WeightLossDiet VALUES(129,73,26);
INSERT INTO WeightLossDiet VALUES(130,74,26);
INSERT INTO WeightLossDiet VALUES(131,75,27);
INSERT INTO WeightLossDiet VALUES(132,76,27);
INSERT INTO WeightLossDiet VALUES(133,77,27);
INSERT INTO WeightLossDiet VALUES(134,78,27);
INSERT INTO WeightLossDiet VALUES(135,79,27);
INSERT INTO WeightLossDiet VALUES(136,80,28);
INSERT INTO WeightLossDiet VALUES(137,81,28);
INSERT INTO WeightLossDiet VALUES(138,82,28);
INSERT INTO WeightLossDiet VALUES(139,83,28);
INSERT INTO WeightLossDiet VALUES(140,84,28);
INSERT INTO WeightLossDiet VALUES(141,85,29);
INSERT INTO WeightLossDiet VALUES(142,76,29);
INSERT INTO WeightLossDiet VALUES(143,77,29);
INSERT INTO WeightLossDiet VALUES(144,78,29);
INSERT INTO WeightLossDiet VALUES(145,79,29);
INSERT INTO WeightLossDiet VALUES(146,80,30);
INSERT INTO WeightLossDiet VALUES(147,81,30);
INSERT INTO WeightLossDiet VALUES(148,82,30);
INSERT INTO WeightLossDiet VALUES(149,83,30);
INSERT INTO WeightLossDiet VALUES(150,84,30);




create table WeightMaintainDiet(
	m_id int,
	meal_id int,
	day int,
	constraint m_id_sec primary key(m_id),
	constraint meal_id_fir3 foreign key (meal_id) references MealNamesMBD(meal_id)
);

INSERT INTO WeightMaintainDiet VALUES(1,15,1);
INSERT INTO WeightMaintainDiet VALUES(2,16,1);
INSERT INTO WeightMaintainDiet VALUES(3,17,1);
INSERT INTO WeightMaintainDiet VALUES(4,18,1);
INSERT INTO WeightMaintainDiet VALUES(5,19,1);
INSERT INTO WeightMaintainDiet VALUES(6,20,2);
INSERT INTO WeightMaintainDiet VALUES(7,21,2);
INSERT INTO WeightMaintainDiet VALUES(8,22,2);
INSERT INTO WeightMaintainDiet VALUES(9,21,2);
INSERT INTO WeightMaintainDiet VALUES(10,22,2);
INSERT INTO WeightMaintainDiet VALUES(11,23,3);
INSERT INTO WeightMaintainDiet VALUES(12,24,3);
INSERT INTO WeightMaintainDiet VALUES(13,25,3);
INSERT INTO WeightMaintainDiet VALUES(14,26,3);
INSERT INTO WeightMaintainDiet VALUES(15,27,3);
INSERT INTO WeightMaintainDiet VALUES(16,28,4);
INSERT INTO WeightMaintainDiet VALUES(17,29,4);
INSERT INTO WeightMaintainDiet VALUES(18,30,4);
INSERT INTO WeightMaintainDiet VALUES(19,31,4);
INSERT INTO WeightMaintainDiet VALUES(20,32,4);
INSERT INTO WeightMaintainDiet VALUES(21,33,5);
INSERT INTO WeightMaintainDiet VALUES(22,34,5);
INSERT INTO WeightMaintainDiet VALUES(23,35,5);
INSERT INTO WeightMaintainDiet VALUES(24,36,5);
INSERT INTO WeightMaintainDiet VALUES(25,37,5);
INSERT INTO WeightMaintainDiet VALUES(26,38,6);
INSERT INTO WeightMaintainDiet VALUES(27,39,6);
INSERT INTO WeightMaintainDiet VALUES(28,40,6);
INSERT INTO WeightMaintainDiet VALUES(29,41,6);
INSERT INTO WeightMaintainDiet VALUES(30,42,6);
INSERT INTO WeightMaintainDiet VALUES(31,43,7);
INSERT INTO WeightMaintainDiet VALUES(32,44,7);
INSERT INTO WeightMaintainDiet VALUES(33,45,7);
INSERT INTO WeightMaintainDiet VALUES(34,15,7);
INSERT INTO WeightMaintainDiet VALUES(35,16,7);
INSERT INTO WeightMaintainDiet VALUES(36,17,8);
INSERT INTO WeightMaintainDiet VALUES(37,18,8);
INSERT INTO WeightMaintainDiet VALUES(38,19,8);
INSERT INTO WeightMaintainDiet VALUES(39,20,8);
INSERT INTO WeightMaintainDiet VALUES(40,20,8);
INSERT INTO WeightMaintainDiet VALUES(41,21,9);
INSERT INTO WeightMaintainDiet VALUES(42,22,9);
INSERT INTO WeightMaintainDiet VALUES(43,23,9);
INSERT INTO WeightMaintainDiet VALUES(44,24,9);
INSERT INTO WeightMaintainDiet VALUES(45,25,9);
INSERT INTO WeightMaintainDiet VALUES(46,26,10);
INSERT INTO WeightMaintainDiet VALUES(47,27,10);
INSERT INTO WeightMaintainDiet VALUES(48,28,10);
INSERT INTO WeightMaintainDiet VALUES(49,29,10);
INSERT INTO WeightMaintainDiet VALUES(50,30,10);
INSERT INTO WeightMaintainDiet VALUES(51,31,11);
INSERT INTO WeightMaintainDiet VALUES(52,32,11);
INSERT INTO WeightMaintainDiet VALUES(53,33,11);
INSERT INTO WeightMaintainDiet VALUES(54,34,11);
INSERT INTO WeightMaintainDiet VALUES(55,35,11);
INSERT INTO WeightMaintainDiet VALUES(56,36,12);
INSERT INTO WeightMaintainDiet VALUES(57,37,12);
INSERT INTO WeightMaintainDiet VALUES(58,48,12);
INSERT INTO WeightMaintainDiet VALUES(59,49,12);
INSERT INTO WeightMaintainDiet VALUES(60,40,13);
INSERT INTO WeightMaintainDiet VALUES(61,41,13);
INSERT INTO WeightMaintainDiet VALUES(62,42,13);
INSERT INTO WeightMaintainDiet VALUES(63,43,13);
INSERT INTO WeightMaintainDiet VALUES(64,44,13);
INSERT INTO WeightMaintainDiet VALUES(65,45,13);
INSERT INTO WeightMaintainDiet VALUES(66,15,14);
INSERT INTO WeightMaintainDiet VALUES(67,16,14);
INSERT INTO WeightMaintainDiet VALUES(68,17,14);
INSERT INTO WeightMaintainDiet VALUES(69,18,14);
INSERT INTO WeightMaintainDiet VALUES(70,19,14);
INSERT INTO WeightMaintainDiet VALUES(71,20,15);
INSERT INTO WeightMaintainDiet VALUES(72,21,15);
INSERT INTO WeightMaintainDiet VALUES(73,22,15);
INSERT INTO WeightMaintainDiet VALUES(74,23,15);
INSERT INTO WeightMaintainDiet VALUES(75,24,15);
INSERT INTO WeightMaintainDiet VALUES(76,25,16);
INSERT INTO WeightMaintainDiet VALUES(77,27,16);
INSERT INTO WeightMaintainDiet VALUES(78,28,16);
INSERT INTO WeightMaintainDiet VALUES(79,29,16);
INSERT INTO WeightMaintainDiet VALUES(80,30,16);
INSERT INTO WeightMaintainDiet VALUES(81,31,17);
INSERT INTO WeightMaintainDiet VALUES(82,32,17);
INSERT INTO WeightMaintainDiet VALUES(83,33,17);
INSERT INTO WeightMaintainDiet VALUES(84,34,17);
INSERT INTO WeightMaintainDiet VALUES(85,35,17);
INSERT INTO WeightMaintainDiet VALUES(86,36,18);
INSERT INTO WeightMaintainDiet VALUES(87,37,18);
INSERT INTO WeightMaintainDiet VALUES(88,38,18);
INSERT INTO WeightMaintainDiet VALUES(89,39,18);
INSERT INTO WeightMaintainDiet VALUES(90,40,18);
INSERT INTO WeightMaintainDiet VALUES(91,41,19);
INSERT INTO WeightMaintainDiet VALUES(92,42,19);
INSERT INTO WeightMaintainDiet VALUES(93,43,19);
INSERT INTO WeightMaintainDiet VALUES(94,44,19);
INSERT INTO WeightMaintainDiet VALUES(95,4519);
INSERT INTO WeightMaintainDiet VALUES(96,12,20);
INSERT INTO WeightMaintainDiet VALUES(97,13,20);
INSERT INTO WeightMaintainDiet VALUES(98,14,20);
INSERT INTO WeightMaintainDiet VALUES(99,15,20);
INSERT INTO WeightMaintainDiet VALUES(100,16,20);
INSERT INTO WeightMaintainDiet VALUES(101,17,21);
INSERT INTO WeightMaintainDiet VALUES(102,18,21);
INSERT INTO WeightMaintainDiet VALUES(103,19,21);
INSERT INTO WeightMaintainDiet VALUES(104,20,21);
INSERT INTO WeightMaintainDiet VALUES(105,21,21);
INSERT INTO WeightMaintainDiet VALUES(106,22,22);
INSERT INTO WeightMaintainDiet VALUES(107,23,22);
INSERT INTO WeightMaintainDiet VALUES(108,24,22);
INSERT INTO WeightMaintainDiet VALUES(109,25,22);
INSERT INTO WeightMaintainDiet VALUES(110,26,22);
INSERT INTO WeightMaintainDiet VALUES(111,27,23);
INSERT INTO WeightMaintainDiet VALUES(112,28,23);
INSERT INTO WeightMaintainDiet VALUES(113,29,23);
INSERT INTO WeightMaintainDiet VALUES(114,30,23);
INSERT INTO WeightMaintainDiet VALUES(115,31,23);
INSERT INTO WeightMaintainDiet VALUES(116,32,24);
INSERT INTO WeightMaintainDiet VALUES(117,33,24);
INSERT INTO WeightMaintainDiet VALUES(118,34,24);
INSERT INTO WeightMaintainDiet VALUES(119,35,24);
INSERT INTO WeightMaintainDiet VALUES(120,36,24);
INSERT INTO WeightMaintainDiet VALUES(121,37,25);
INSERT INTO WeightMaintainDiet VALUES(122,38,25);
INSERT INTO WeightMaintainDiet VALUES(123,39,25);
INSERT INTO WeightMaintainDiet VALUES(124,40,25);
INSERT INTO WeightMaintainDiet VALUES(125,41,25);
INSERT INTO WeightMaintainDiet VALUES(126,42,26);
INSERT INTO WeightMaintainDiet VALUES(127,11,26);
INSERT INTO WeightMaintainDiet VALUES(128,12,26);
INSERT INTO WeightMaintainDiet VALUES(129,13,26);
INSERT INTO WeightMaintainDiet VALUES(130,14,26);
INSERT INTO WeightMaintainDiet VALUES(131,15,27);
INSERT INTO WeightMaintainDiet VALUES(132,16,27);
INSERT INTO WeightMaintainDiet VALUES(133,17,27);
INSERT INTO WeightMaintainDiet VALUES(134,18,27);
INSERT INTO WeightMaintainDiet VALUES(135,19,27);
INSERT INTO WeightMaintainDiet VALUES(136,20,28);
INSERT INTO WeightMaintainDiet VALUES(137,21,28);
INSERT INTO WeightMaintainDiet VALUES(138,22,28);
INSERT INTO WeightMaintainDiet VALUES(139,23,28);
INSERT INTO WeightMaintainDiet VALUES(140,24,28);
INSERT INTO WeightMaintainDiet VALUES(141,25,29);
INSERT INTO WeightMaintainDiet VALUES(142,26,29);
INSERT INTO WeightMaintainDiet VALUES(143,27,29);
INSERT INTO WeightMaintainDiet VALUES(144,28,29);
INSERT INTO WeightMaintainDiet VALUES(145,29,29);
INSERT INTO WeightMaintainDiet VALUES(146,30,30);
INSERT INTO WeightMaintainDiet VALUES(147,31,30);
INSERT INTO WeightMaintainDiet VALUES(148,32,30);
INSERT INTO WeightMaintainDiet VALUES(149,33,30);
INSERT INTO WeightMaintainDiet VALUES(150,34,30);