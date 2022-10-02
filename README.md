#Configuration
* Setup service provider in saml20-sp-remote.php
* Setup identity provider in saml20-idp-remote.php
* To add users, go to authsources.php and add row in example-userpass
* Set APACHE_SSL_PORT in simplesamlphp_docker/.env, uses port 4431 by default
* Set SAML_IDP_ACS in ROOT DIRECTORY .env as the login callback link of the connecting client that will use the SAML default IDP
* Set SAML_IDP_SLS in ROOT DIRECTORY .env .env as the logout callback link of the connecting client that will use the SAML default IDP
#Installation and Running
* Add 127.0.0.1 saml-sp-idp in your host file or whatever you set in APP_DNS in simplesamlphp_docker/.env 
* Open terminal or cmd
* Execute cd simplesamlphp_docker
* Execute docker-compose build
* Execute docker-compose up
* Browse https://saml-sp-idp:4431/simplesaml