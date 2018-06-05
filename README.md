# DomainChallenge - Initial Commit (nothing fancy yet)
Create an application in the language of your choice and MySQL that hundreds of thousands of
Internet users will use to track Web site domain names and accompanying descriptions.
Your application should provide two Web pages:
1. One that allows users to submit one domain and description at a time.
2. One that displays all valid domains along with their descriptions and the submission
date, ordered from newest to oldest.
For our purposes, a valid domain is one that has one or more IP addresses in the DNS.
Your applications should include a table called "domain" that stores:
1. the domain name, whether or not it is valid
2. the description
3. the date and time of submission.
Keep in mind that users might attempt to submit any sort of text­like data as a domain, e.g.,
"https://www.opendns.com/about", "notareal.comdomain", or pretty much anything else. Also,
domains should be stored in the database without any "www" prefix and without any other URL
components. For example, "https://www.opendns.com/about" should be stored as
"opendns.com". Submit your implementation as one or more text files.


##Application developed contains two webpages as requested:
-> adddomain.php 
-> display.php

adddomain.php contains all the filters & validations that are to be considered .


##SQL commands used for temporary additions:

1.create database DNSDB;
2.use DNSDB;
3.CREATE TABLE IF NOT EXISTS domain ( id int(11) NOT NULL AUTO_INCREMENT, domain_name varchar(45), description varchar(45), `CreationDate`  datetime NULL , PRIMARY KEY (id) );

4.mysql> insert into domain(id,domain_name,description,CreationDate) values (1133,'www.opendns.com','Helps the world connect with confidence on any device, anywhere, anytime.','2018-02-10 04:45:00');

5.mysql> insert into domain(domain_name,description,CreationDate) values ('www.youtube.com','YouTube allows users to upload, view, rate, share, add to favorites, report, comment on videos, and subscribe to other users.','2017-02-10 04:45:00');


6.mysql> insert into domain(domain_name,description,CreationDate) values ('github.com/','Discover interesting projects and people to populate your personal news feed.','2017-07-10 05:55:00');





