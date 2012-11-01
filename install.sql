

drop table  if exists user;
create table user (
    id int auto_increment,
    name varchar(100) unique,
    password varchar(20),
    primary key(id),
	index i_user_name(name)
);

drop table  if exists topic;
create table topic(
    id int auto_increment,
    title varchar(200),
    owner int,
    content text,
    primary key(id)
);

drop table  if exists reply;
create table reply(
    id int auto_increment,
    topic_id int,
    content text,
    primary key(id)
);