<?php
const LANGUAGE = "en"; # see translations folder for supported languages
const SITE = "domain.com"; # key for this site to identity comment of this site
const E_MAIL_FOR_NOTIFICATIONS = "your.email@domain.com";
const BASE_URL = "http://domainC.com/"; # base url of the comment-sidecar backend. can differ from the embedding site.
const ALLOWED_ACCESSING_SITES = [ "http://domainA.com", "http://domainB.com" ]; # sites that are allowed to access the backend (required for multisite setups, where the backend is deployed on a different domain than the embedding site.)
const DB_HOST = 'localhost'; # to access from host system, use 127.0.0.1
const DB_NAME = 'maildb';
const DB_USER = 'wb3d23s';
const DB_PW = '1234';
const DB_PORT = 3306;
