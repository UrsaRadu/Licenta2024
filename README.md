
Cum se executa proiectul de Magazin Online - Produse Autentice Locale

Se va folosi programul XAMPP, ce poate fi instalat dupa descarcarea acestuia de pe pagina https://www.apachefriends.org/download.html.

Dupa instalarea si configurarea programului XAMPP, se va folosi PHP si MySQL.

1. Descarcati fisierul zip
2. Extrageti fisierul si copiati dosarul Licenta2024
3. Lipiti in directorul radacina (pentru xampp xampp/htdocs, pentru wamp wamp/www, pentru lampa var/www /html)
4. Deschideti PHPMyAdmin (http://localhost/phpmyadmin)
5. Creati o baza de date cu numele mystore
6. Importati mystore.sql fisier (dat in interiorul pachetului zip in folderul de fisiere SQL)
7. Rulati scriptul http://localhost/Licenta2024/Licenta2024/magazin_online/index.php

Partea de frontend a aplicatiei poate fi vizualizata fara a ne autentifica, deoarece este interfata pentru toti utilizatorii 
   
Detalii de conectare pentru autentificare:

***Cont Admin : http://localhost/Licenta2024/Licenta2024/magazin_online/admin_area/index.php

username    radudan
parola 	    123

***Cont User: din aplicatia web de la sectiunea Autentificare doar pentru plata comenzii

 username    radu
 parola      123
 
