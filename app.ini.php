;<?php die(); ?>

[database]
;   DEV SETTINGS
; remove semicolon to uncomment
db_host = "localhost"
db_name     = "psac"
db_user     = "root"
db_password = ""

[libs]
;DEV
autoload_url = "vendor/autoload.php"
;PROD
;autoload_url = "../../vendor/autoload.php"

[mail]
mail_smtp_host = "mail.compilertest.online"
mail_smtp_port = 587
mail_smtp_debug = 2
mail_from = "admin@compilertest.online"
mail_reply = "admin@compilertest.online"
mail_password = "pass1234pass1234"
SMTPAuth = true


;   PROD SETTINGS
; remove semicolon to uncomment
;db_host = "localhost:3306"
;db_name     = "compile2_psac"
;db_user     = "compile2_root"
;db_password = "root1234root1234"


;[libs]
;autoload_url = ../../vendor/autoload.php

