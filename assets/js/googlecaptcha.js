var googleCaptcha = function(){
         $('.g-recaptcha').each(function(index, element) {
           grecaptcha.render(element, {
           	'sitekey' : '6Lfr7A4UAAAAAMnOG-yvjYO7LWt1C4N9DLO6wj7-',
           	'expired-callback' : whenExpired});
           });
         };
var whenExpired = function(){
      grecaptcha.reset();
};

RewriteEngine On
        RewriteCond %{HTTP_HOST} !^rocojohnmark.tk$1 [NC]
        RewriteRule ^(.*)$ http://www.rocojohnmark.tk/info/$1 [L,R=301]

RewriteEngine On
RewriteCond %{HTTP_HOST} !^(www\.)?rocojohnmark.tk$ [NC]
RewriteRule ^(.*)$ http://www.rocojohnmark.tk/info$1 [L,R]

RewriteEngine On
RewriteCond %{REQUEST_URI} info 
RewriteRule ^(.*)$ http://www.rocojohnmark.tk/info/$1 [R,L]

RewriteCond %{REQUEST_URI} !^/info
RewriteRule ^(.*)$ /info/$1 [NC,L]

# BlueHost.com 
# .htaccess main domain to subdirectory redirect 
# Do not change this line. 
RewriteEngine on 
# Change example.com to be your main domain. 
RewriteCond %{HTTP_HOST} ^(www.)?rocojohnmark.tk$ 
# Change 'subdirectory' to be the directory you will use for your main domain. 
RewriteCond %{REQUEST_URI} !^/info/ 
# Don't change the following two lines. 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteCond %{REQUEST_FILENAME} !-d 
# Change 'subdirectory' to be the directory you will use for your main domain. 
RewriteRule ^(.*)$ /info/$1 
# Change example.com to be your main domain again. 
# Change 'subdirectory' to be the directory you will use for your main domain 
# followed by / then the main file for your site, index.php, index.html, etc. 
RewriteCond %{HTTP_HOST} ^(www.)?rocojohnmark.tk$ 
RewriteRule ^(/)?$ info/index.php [L]