start transaction;

create table user (
  id          serial,
  email       varchar(256),
  password    text,
  first_name  text,
  last_name   text,
  created     datetime,
  primary key (id),
  unique (email)
);

create table survey (
  id          serial,
  url_part    varchar(256),
  title       text,  
  description text,
  created     datetime,
  user_id     bigint references user(id),
  primary key(id),
  unique(url_part)
);

create table question_type (
  id          serial,
  description text,
  primary key(id)
);

create table question (
  id          serial,
  survey_id   bigint references survey(id),
  seq         bigint,
  text        text,
  type_id     bigint references question_type(id),
  primary key(id),
  unique(survey_id, seq)
);

commit;

