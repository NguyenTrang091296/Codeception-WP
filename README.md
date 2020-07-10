# Codeception-WP
##INSTALL
Install latest stable WPBrowser package via Composer (WPBrowser will install Codeception for you):

    `composer require lucatume/wp-browser --dev`

If a dependency resolution issue arises and you have previously installed codeception/codeception try removing it and requiring just lucatume/wp-browser:

    `composer remove codeception/codeception --dev`
    `composer require lucatume/wp-browser --dev`

##SETUP

    `./vendor/bin/codecept init wpbrowser`

##ACCEPTANCE TESTS
#####config file acceptance.suite.yml

    modules:
       enabled:
     
            - WebDriver
            - \Helper\Acceptance
        config:
            WPDb:
                dsn: '%TEST_SITE_DB_DSN%'
                user: '%TEST_SITE_DB_USER%'
                password: '%TEST_SITE_DB_PASSWORD%'
                dump: 'tests/_data/dump.sql'
                #import the dump before the tests; this means the test site database will be repopulated before the tests.
                populate: true
                # re-import the dump between tests; this means the test site database will be repopulated between the tests.
                cleanup: true
                waitlock: 10
                url: '%TEST_SITE_WP_URL%'
                urlReplacement: true #replace the hardcoded dump URL with the one above
                tablePrefix: '%TEST_SITE_TABLE_PREFIX%'
            WebDriver:
                url: 'http://localhost/wordpress/'
                browser: chrome
                window_size: 1920x1080
                port: 4444
                restart: true
                adminUsername: 'admin'
                adminPassword: 'admin'
                adminPath: '/wp-admin'`
    
                headers:
                    X_TEST_REQUEST: 1
                    X_WPBROWSER_REQUEST: 1


##WORDPRESS FUNCTIONAL TESTS

    modules:
        enabled:
    
            - WPDb
            - WPBrowser
            - Asserts
            - \Helper\Functional
        config:
            WPDb:
                dsn: 'mysql:host=localhost;dbname=db_wordpress'
                user: 'root'
                password: ''
                dump: 'tests/_data/dump.sql'
                populate: true
                cleanup: true
                waitlock: 10
                url: 'http://localhost/wordpress'
                urlReplacement: true
                tablePrefix: 'wp_'
           WPBrowser:
                url: 'http://localhost/wordpress'
                adminUsername: 'admin'
                adminPassword: 'admin'
                adminPath: '/wp-admin'
                headers:
                    X_TEST_REQUEST: 1
                    X_WPBROWSER_REQUEST: 1`
    
            WPFilesystem:
                wpRootFolder: '%WP_ROOT_FOLDER%'
                plugins: '/wp-content/plugins'
                mu-plugins: '/wp-content/mu-plugins'
                themes: '/wp-content/themes'
                uploads: '/wp-content/uploads'

##Initialize your testing environment with
    `vendor/bin/codecept bootstrap`
    `vendor/bin/codecept build`

##Run

    `vendor/bin/codecept run --steps`
