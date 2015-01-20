# projetozend
Projeto com Zend Framework 1

Comandos mandar pro github
git remote add origin https://github.com/leoszcarvalho/gitteste.git
git push -u origin master



<VirtualHost *:80>

   ServerName projetozend.com
   DocumentRoot /var/www/html/projeto-zend/public
   SetEnv APPLICATION_ENV "development"
 <Directory /var/www/html/projeto-zend/public>
    DirectoryIndex index.php
   AllowOverride All
  Order allow,deny
 Allow from all
 </Directory>
</VirtualHost>
