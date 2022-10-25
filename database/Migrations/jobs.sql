use git_hub_jobs;

create table
    images (
        identity varchar(255) not null primary key,
        path varchar(255) not null,
        name varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp
    );

create table
    authors (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp
    );

create table
    continents (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp
    );

create table
    countries (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        continent varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp,
        foreign key (continent) references continents (identity)
    );

create table
    states (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        country varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp,
        foreign key (country) references countries (identity)
    );

create table
    cities (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        state varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp,
        foreign key (state) references states (identity)
    );

create table
    articles (
        identity varchar(255) not null primary key,
        content text not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp
    );

create table
    jobs (
        identity varchar(255) not null primary key,
        image varchar(255) null,
        author varchar(255) not null,
        title varchar(255) not null,
        city varchar(255) not null,
        article varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp,
        foreign key (image) references images (identity),
        foreign key (author) references authors (identity),
        foreign key (city) references cities (identity),
        foreign key (article) references articles (identity)
    );

create table
    tags (
        identity varchar(255) not null primary key,
        name varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp
    );

create table
    tags_jobs (
        tag varchar(255) not null,
        job varchar(255) not null,
        createdAt timestamp default current_timestamp not null,
        updatedAt timestamp,
        foreign key (tag) references tags (identity),
        foreign key (job) references jobs (identity)
    );