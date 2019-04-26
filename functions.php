<?php

    if (!defined('ABSPATH')) exit();

    define('THEME_NAME', get_template());
    define('BASE_URL', '/wp-content/themes/' . THEME_NAME);

    //date_default_timezone_set("Europe/Minsk");


    require_once __DIR__ . '/utils/Assets.php';
    require_once __DIR__ . '/utils/SingletonOptions.php';
    require_once __DIR__ . '/core/mastakFunctions.php';

    require_once __DIR__ . '/core/init_theme.php';
    //	require_once __DIR__ . '/core/custom-types/index.php';
    //	require_once __DIR__ . '/core/custom-types/partnerPostType.php';
    //	require_once __DIR__ . '/core/carbon/partnerMeta.php';
    //	require_once __DIR__ . '/core/carbon/shopOrderMeta.php';


    require_once __DIR__ . '/core/menu.php';
    require_once __DIR__ . '/core/styles.php';
    require_once __DIR__ . '/core/scripts.php';
    //	require_once __DIR__ . '/core/hooks.php';
    require_once __DIR__ . '/core/ajax/ajax.php';
	require_once __DIR__ . '/core/ajax/singlePortfolio.php';

    //	require_once __DIR__ . '/core/cmb2/index.php';
    //	require_once __DIR__ . '/core/cmb2/themeSettings.php';

    require_once __DIR__ . '/core/carbon/optionPage.php';
    require_once __DIR__ . '/core/carbon/contactPage.php';
	require_once  __DIR__ . '/core/carbon/teamPage.php';
	require_once  __DIR__ . '/core/carbon/teamAllPage.php';
    require_once  __DIR__ . '/core/carbon/homePage.php';
    require_once  __DIR__ . '/core/carbon/webPage.php';
//	require_once  __DIR__ . '/core/carbon/portfolioDesign.php';

    require_once __DIR__ . '/vendor/autoload.php';

	require_once __DIR__ . '/core/customTypes/portfolio.php';
	require_once __DIR__ . '/core/customTypes/portfolioTax.php';

	require_once __DIR__ . '/core/carbon/portfolioMeta.php';

