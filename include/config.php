<?php// SITE_ROOT contains the full path to our website//define('SITE_ROOT', dirname(dirname(__FILE__)));define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);// Application directoriesdefine('PRESENTATION_DIR', SITE_ROOT . '/presentation/');define('BUSINESS_DIR_USER', SITE_ROOT . '/classes/BusinessLogicTier/User/');define('DATA_ACCESSOR_DIR_USER', SITE_ROOT . '/classes/DataAccessorsTier/User/');define('DATA_ACCESSOR_DIR_COMMENT', SITE_ROOT . '/classes/DataAccessorsTier/Comment/');define('DATA_ACCESSOR_DIR_RATING', SITE_ROOT . '/classes/DataAccessorsTier/Rating/');define('DATA_ACCESSOR_DIR_REPORT', SITE_ROOT . '/classes/DataAccessorsTier/Report/');define('DATA_ACCESSOR_DIR_SUBSCRIPTION', SITE_ROOT . '/classes/DataAccessorsTier/Subscription/');define('DB_CONNECTION', SITE_ROOT . '/classes/DataAccessorsTier/');define('UTILITY_DIR', SITE_ROOT . '/utilities/');define('JAVASCRIPT_DIR', SITE_ROOT . '/js/');define('DIR_VIEWS',       SITE_ROOT . '/Views/');define('DIR_CTLS',        SITE_ROOT . '/Controllers/');define('DIR_MDLS',        SITE_ROOT . '/Models/');define('VIEW_HEADER',     SITE_ROOT . '/header.php');define('VIEW_NAVIGATION', SITE_ROOT . '/navigation.php');define('VIEW_FOOTER',     SITE_ROOT . '/footer.php');define('IMAGES',          SITE_ROOT . '/Images/');define('CONTENT',         SITE_ROOT . '/Content/');define('LOGIN',           SITE_ROOT . '/Views/Login/');?>