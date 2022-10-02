<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.saml2-acs.php
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$appDNS = getenv('APP_DNS') . ':' . getenv('APACHE_SSL_PORT');
$metadata['http://localhost:8080/simplesaml/saml2/idp/metadata.php'] = array(
    'name' => array(
        'en' => 'Test IdP',
    ),
    'description' => 'Test IdP',
    'SingleSignOnService' => 'http://localhost:8080/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService' => 'http://localhost:8080/simplesaml/saml2/idp/SingleLogoutService.php',
    'certFingerprint' => '119b9e027959cdb7c662cfd075d9e2ef384e445f',
);

$metadata["https://{$appDNS}/simplesaml/saml2/idp/metadata.php"] = array(
    'name' => array(
        'en' => 'Test default IdP',
    ),
    'description' => 'Test Default IdP',
    'SingleSignOnService' => "https://{$appDNS}/simplesaml/saml2/idp/SSOService.php",
    'SingleLogoutService' => "https://{$appDNS}/simplesaml/saml2/idp/SingleLogoutService.php",
    'certFingerprint' => '069eb8be98ce28b5eb4a83eebe2737b61db246f6',
);