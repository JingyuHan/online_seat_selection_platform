create table msaled(
	id int auto_increment primary key,
	myid varchar(16) not null,
	aliid varchar(28),
	status varchar(1),
	buyerid varchar(20),
	name varchar(10),
	type varchar(1) not null,
	seat_id varchar(5) not null,
	seat_label varchar(3) not null,
	seat_real varchar(5) not null,
	tel varchar(11) not null,
	`time` timestamp,
	qq varchar(32),
	reward int(5)
);

create table mtemp(
	id	int auto_increment primary key,
	seat_lable varchar(5) not null,
	flag varchar(1) not null,
	`time` timestamp
);




+----+------------------+------------------------------+--------+-------------+------+------+---------+------------+-----------+-------------+---------------------+
| id | myid             | aliid                        | status | buyerid     |name | type | seat_id | seat_label | seat_real | tel         | time   |
+----+------------------+------------------------------+--------+-------------+------+------+---------+------------+-----------+-------------+---------------------+
|  1 | 2015112753525199 | 2015112700001000430066022826 | 2      | 18435165306 |NULL | 1    | 4_20    | 100        | 4_1       | 15735182127 | 0000-00-00 00:00:00 |
|  2 | 2015112754575257 | 2015112700001000430066025728 | 2      | 18435165306 |NULL | 1    | 4_21    | 101        | 4_2       | 15735182127 | 2015-11-27 21:01:36 |
|  3 | 2015112797555455 | 2015112700001000430066025511 | 2      | 18435165306 |NULL | 1    | 1_6     | 1          | 1_25      | 15735182127 | 2015-11-27 21:04:52 |
+----+------------------+------------------------------+--------+-------------+------+------+---------+------------+-----------+-------------+---------------------+
+----+------------+------+---------------------+
| id | seat_lable | flag | time                |
+----+------------+------+---------------------+
|  1 | 759        | 0    | 2015-12-03 23:40:45 |
|  2 | 691        | 0    | 2015-12-05 00:26:34 |
+----+------------+------+---------------------+



create table z0saled(
	id int auto_increment primary key,
	seat_id varchar(5) not null,
	seat_label varchar(3) not null,
	seat_real varchar(5) not null,
	tel varchar(11) not null,
	ip varchar(20) not null,
	`time` timestamp
	
);

create table z0temp(
	id	int auto_increment primary key,
	seat_lable varchar(5) not null,
	flag varchar(1) not null,
	`time` timestamp
);