# datProg
Kristian Lind Kristensen

Projekt Beskrivelse.

http://mars.merhot.dk/w/index.php/Database_Programmering

Mit projekts website. (Ubuntu 17.10 - NGINX w/ php7.1)

http://projects.qbowle.dk/Login

Flyt indholdet af Webserver Root ind i htdocs, naviger til http://localhost/public hvilket vil svare til webserver root af mit projekt som set på http://projects.qbowle.dk/ - Husk at importere databasen og oprette bruger (eller ændre sql-cfg.php som ligger i Webserver Root til at matche dine DB credentials.).


For at forberede din database til projektet skal du køre disse to filer op imod din database.
PrepareUser.sql //Laver bruger kristian-login på databasen som har alle permissions, kun tilgåelig via localhost.
CreateDatabase.sql //Laver database og tables. Inspicer efter behov ;)