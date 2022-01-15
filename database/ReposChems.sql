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
        foreign_perm foreign key (permission_id) references permissions (id);

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


alter table permissions
    add column route  varchar(50)                        not null,
    add column method enum ('POST','GET','PUT','DELETE') not null;

insert into roles_permissions(role_id, permission_id)
values (1, 1);

select *
from roles;



insert into roles(role_name)
values ('admin');

insert into roles(role_name)
values ('User');

insert into roles(role_name)
values ('MegaFan');



insert into permissions(permission_name, route, method)
values ('access_admin', 'admin', 'GET');

insert into permissions(permission_name, route, method)
values ('access_users', 'admin.users', 'GET');

insert into permissions(permission_name, route, method)
values ('access_index', 'index', 'GET');

insert into permissions(permission_name, route, method)
values ('access_projects', 'projects', 'GET');


insert into roles_permissions(role_id, permission_id)
values (1, 1);
insert into roles_permissions(role_id, permission_id)
values (1, 2);
insert into roles_permissions(role_id, permission_id)
values (1, 3);
insert into roles_permissions(role_id, permission_id)
values (1, 4);



create view view_roles_permissions as
select r.role_name, p.permission_name, p.route, p.method
from roles as r
         inner join roles_permissions as rp on rp.role_id = r.id
         inner join permissions as p on rp.permission_id = p.id;


select *
from view_roles_permissions;

insert into auths_roles
values (1, 1);


select *
from auths_roles;

alter table roles_permissions
    change column permission_id permission_id int not null;
