 @echo off

rem as duas linhas abaixo criam uma variável com data e hora para serem usadas no nome do arquivo. 

for /f "tokens=1-4 delims=/ " %%a IN ('DATE /T') do (set MYDATE=%%a-%%b-%%c%%d%)
for /f "tokens=1-2 delims=: " %%a in ('TIME /T') do (set MYTIME=%%ah%%bm)

COLOR 0a
@echo.
@echo   			 **********************************************************
@echo   			 ***                                                    ***
@echo   			 *** 	 	    BACKUP DO SERVIDOR	                ***
@echo   			 ***                                        	        ***
@echo   			 **********************************************************
@echo.



set date = Get-Date

rem a linha abaixo leva o CMD para a pasta onde está o mysqldump.exe 
rem como estou usando o xampp fica assim, caso esteja usando o MySQL deve estar dentro de C:\Arquivos e Programas\MySQL\bin mais ou menos assim nesse caso vc substituiria o caminho abaixo por o que vc usar.
cd C:/xampp/mysql/bin

rem a linha abaixo é o comando em si. se você assim como eu utilizar senha deixe ela colada no -p
rem se não basta deixar só o "-p " e seguir com o nome do banco. Não remova os espaços para não se atrapalhar. 
rem Logo após o nome do banco de dados está o ">C:\SeuCaminho\backup.sql" indicando o caminho e qual nome o arquivo terá.

COLOR 0a
@echo.
@echo   			 **********************************************************
@echo   			 ***                                                    ***
@echo   			 *** 	       BACKUP PRINCIPAL DO BANCO                ***
@echo   			 ***                                        	        ***
@echo   			 **********************************************************
@echo.
mysqldump -u root    -p      --all-databases> C:\backups\Backup" "%mydate%.sql
"C:\Program Files\7-Zip\7z.exe" a  "c:\backups\Backup %mydate%.zip" "C:\backups\*%mydate%.sql"
del "C:\backups\*%mydate%.sql" /s

cls

rem a linha abaixo é o comando em si. se você assim como eu utilizar senha deixe ela colada no -p
rem se não basta deixar só o "-p " e seguir com o nome do banco. Não remova os espaços para não se atrapalhar. 
rem Logo após o nome do banco de dados está o ">C:\SeuCaminho\backup.sql" indicando o caminho e qual nome o arquivo terá.

COLOR 0a
@echo.
@echo   			 **********************************************************
@echo   			 ***                                                    ***
@echo   			 *** 	       COPIANDO PARA SERVIFOR DE BACKUP         ***
@echo   			 ***                                        	        ***
@echo   			 **********************************************************
@echo.

dir C:\backups

pause
