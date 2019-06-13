;<?php die(); ?>

[database]
;   DEV SETTINGS
; remove semicolon to uncomment
db_host = "localhost"
db_name     = "psac"
db_user     = "root"
db_password = ""

[libs]
autoload_url = "vendor/autoload.php"

[mail]
; for local dev use thunderbird and mercury
mail_smtp_host = "mail.compilertest.online"
mail_smtp_port = 587
mail_smtp_debug = 2
mail_from = "admin@compilertest.online"
mail_reply = "admin@compilertest.online"
mail_password = "pass1234pass1234"
SMTPAuth = true
