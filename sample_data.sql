start transaction;

insert into user (id, email, password, first_name, last_name, created)
  values (1, 'mikhilm@gmail.com', 'test', 'Mikhil', 'Masli', now());

insert into survey (id, url_part, title, description, created, user_id)
  values (1, 'test', 'Test Survey', 'This is the test survey', now(), 1);

insert into question_type (id, description)
  values (1, 'Video with audio'), (2, 'Video without audio'), (3, 'Audio only');

insert into question (id, survey_id, seq, text, type_id)
  values (1, 1, 1, 'What is your response to question 1?', 1),
         (2, 1, 2, 'What is your response to question 2?', 1),
         (3, 1, 3, 'What is your response to question 3?', 1),
         (4, 1, 4, 'What is your response to question 4?', 1),
         (5, 1, 5, 'What is your response to question 5?', 1);

commit;

