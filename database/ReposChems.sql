use chems_repo;

create table auths
(
    id       int          not null auto_increment primary key,
    username varchar(20)  null,
    email    varchar(120) not null,
    password varchar(20)  not null
);


alter table auths
    add constraint unique_email unique (email),
    add constraint unique_username unique (username);

alter table auths
    modify column password varchar(200) not null;



create table roles
(
    id        int primary key not null auto_increment,
    role_name varchar(50)     not null
);

create table auths_roles
(
    auth_id int not null,
    role_id int not null
);

alter table auths_roles
    add constraint auths_roles_auth_id_fk foreign key (auth_id) references auths (id),
    add constraint auths_roles_role_id_fk foreign key (role_id) references roles (id);


create table permissions
(
    id              int primary key not null auto_increment,
    permission_name varchar(50)     not null

);

alter table permissions
    add constraint unique_permission_name unique (permission_name);

create table roles_permissions
(
    role_id int not null,
    perm_id int not null
);
alter table roles_permissions
    add constraint
        foreign_role foreign key (role_id) references roles (id);

alter table roles_permissions
    add constraint
        foreign_perm foreign key (perm_id) references permissions (id);

create table extra_permissions
(
    perm_id int     not null,
    user_id int     not null,
    allowed tinyint not null
);

alter table extra_permissions
    add constraint
        foreign_perm foreign key (perm_id) references permissions (id),
    add constraint
        foreign_user foreign key (user_id) references auths (id);


