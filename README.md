## Laravel  sendgrid  mail

>How to use above repo

* First clone the repo from

    `git clone https://github.com/YasinPatel/send-email-in-laravel-using-sendgrid.git`

* then use composer to install Laravel dependencies   
    <pre>composer install</pre>

* Now time to make changes in .env file of Laravel Project Root Directory

 > In  .env file

  ```php
  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.sendgrid.net
  MAIL_PORT=587
  MAIL_USERNAME=sendgrid_username
  MAIL_PASSWORD=sendgrid_password
  MAIL_ENCRYPTION=tls
  ```
<hr/>  
>  No Need to change in The config/mail.php file
