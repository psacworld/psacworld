;<?php die(); ?>

[database]
;   PRODUCTION SETTINGS
; remove semicolon to uncomment
db_host = localhost
db_name     = psac
db_user     = root
db_password = 

;   DEV SETTINGS
; remove semicolon to uncomment
;db_host = localhost:3306
;db_name     = compile2_psac
;db_user     = compile2_root
;db_password = root1234root1234

[application]
app_email = postmaster@localhost
app_email_pass = pass
app_url   = localhost/psac/
app_secret_key = keysecret
app_smtp = smtp.gmail.com