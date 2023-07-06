<?php
use Gri\B2B\griB2B;
include dirname(__FILE__ ) . '/Gri_B2B.php';

const API_USERNAME = '';
const API_PASSWORD = '';
const API_CLIENT = '';
const API_CLIENT_SECRET = '';
const API_ENVIRONMENT = 'prod';

$gri = new griB2B(
    API_USERNAME,
    API_PASSWORD,
    API_CLIENT,
    API_CLIENT_SECRET,
    API_ENVIRONMENT === 'test'
);
$gri->enableDebug();

// get domains
$domains = $gri->request('/api/v2/domains', '','GET');