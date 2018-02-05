
create table libro(
  book_id serial PRIMARY KEY,
  book_name varchar(30) not null,
  book_editorial varchar(30) not null
);

create table usuario(
  user_id serial PRIMARY KEY,
  user_name varchar(30) not null
);

create table prestamo(
  lend_id serial,
  book int not null,
  usuar int not null,
  FOREIGN KEY (book) REFERENCES libro(book_id),
  FOREIGN KEY (usuar) REFERENCES usuario(user_id),
  PRIMARY KEY (book)
);

insert into libro (book_name, book_editorial) values ('Orden y Caos', 'Norma');
insert into libro (book_name, book_editorial) values ('Utopia', 'Panamericana');
insert into usuario (user_name) values ('Julian');
insert into usuario (user_name) values ('Maria');

insert into prestamo (book, usuar) values (1,1);
