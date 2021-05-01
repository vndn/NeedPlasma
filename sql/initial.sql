use NEEDPLASMA;

CREATE TABLE request_log (
    id INT auto_increment primary key,
    uri varchar(100),
    parameters varchar(100),
    request_date datetime,
    request_body varchar(5000)
);

alter table request_log add refer varchar(100);

/*INSERT INTO request_log (uri, request_date) VALUES ( '/','2021-04-27 20:00:13');
*/

select count(*) from request_log where 1=1;
