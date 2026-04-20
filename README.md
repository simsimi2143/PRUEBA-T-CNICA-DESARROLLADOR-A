# PRUEBA-T-CNICA-DESARROLLADOR-A
La presente prueba tiene como objetivo evaluar la capacidad del postulante para analizar, diseñar e implementar una solución de software en un contexto similar al de los sistemas institucionales de la Universidad.

# Proceso de creacion de una app laravel
```
laravel new my-app

 ██╗       █████╗  ██████╗   █████╗  ██╗   ██╗ ███████╗ ██╗
 ██║      ██╔══██╗ ██╔══██╗ ██╔══██╗ ██║   ██║ ██╔════╝ ██║
 ██║      ███████║ ██████╔╝ ███████║ ██║   ██║ █████╗   ██║
 ██║      ██╔══██║ ██╔══██╗ ██╔══██║ ╚██╗ ██╔╝ ██╔══╝   ██║
 ███████╗ ██║  ██║ ██║  ██║ ██║  ██║  ╚████╔╝  ███████╗ ███████╗
 ╚══════╝ ╚═╝  ╚═╝ ╚═╝  ╚═╝ ╚═╝  ╚═╝   ╚═══╝   ╚══════╝ ╚══════╝

 Which starter kit would you like to install? [None]:
  [none    ] None
  [react   ] React
  [svelte  ] Svelte
  [vue     ] Vue
  [livewire] Livewire
 > 


 Which testing framework do you prefer? [Pest]:
  [0] Pest
  [1] PHPUnit
 > 1


 Do you want to install Laravel Boost to improve AI assisted coding? (yes/no) [yes]:
 > no

Creating a "laravel/laravel" project at "./my-app"
Cannot use laravel/laravel's latest version v13.2.0 as it requires php ^8.3 which is not satisfied by your platform.
Installing laravel/laravel (v12.12.2)
  - Installing laravel/laravel (v12.12.2): Extracting archive
Created project in C:\Users\josue\OneDrive\Documentos\2026\PRUEBA-T-CNICA-DESARROLLADOR-A/my-app
Loading composer repositories with package information
Updating dependencies
Lock file operations: 111 installs, 0 updates, 0 removals
  - Locking brick/math (0.14.8)
  - Locking carbonphp/carbon-doctrine-types (3.2.0)
  - Locking dflydev/dot-access-data (v3.0.3)
  - Locking doctrine/inflector (2.1.0)
  - Locking doctrine/lexer (3.0.1)
  - Locking dragonmantank/cron-expression (v3.6.0)
  - Locking egulias/email-validator (4.0.4)
  - Locking fakerphp/faker (v1.24.1)
  - Locking filp/whoops (2.18.4)
  - Locking fruitcake/php-cors (v1.4.0)
  - Locking graham-campbell/result-type (v1.1.4)
  - Locking guzzlehttp/guzzle (7.10.0)
  - Locking guzzlehttp/promises (2.3.0)
  - Locking guzzlehttp/psr7 (2.9.0)
  - Locking guzzlehttp/uri-template (v1.0.5)
  - Locking hamcrest/hamcrest-php (v2.1.1)
  - Locking laravel/framework (v12.56.0)
  - Locking laravel/pail (v1.2.6)
  - Locking laravel/pint (v1.29.0)
  - Locking laravel/prompts (v0.3.16)
  - Locking laravel/sail (v1.57.0)
  - Locking laravel/serializable-closure (v2.0.12)
  - Locking laravel/tinker (v2.11.1)
  - Locking league/commonmark (2.8.2)
  - Locking league/config (v1.2.0)
  - Locking league/flysystem (3.33.0)
  - Locking league/flysystem-local (3.31.0)
  - Locking league/mime-type-detection (1.16.0)
  - Locking league/uri (7.8.1)
  - Locking league/uri-interfaces (7.8.1)
  - Locking mockery/mockery (1.6.12)
  - Locking monolog/monolog (3.10.0)
  - Locking myclabs/deep-copy (1.13.4)
  - Locking nesbot/carbon (3.11.4)
  - Locking nette/schema (v1.3.5)
  - Locking nette/utils (v4.1.3)
  - Locking nikic/php-parser (v5.7.0)
  - Locking nunomaduro/collision (v8.9.3)
  - Locking nunomaduro/termwind (v2.4.0)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking phpoption/phpoption (1.9.5)
  - Locking phpunit/php-code-coverage (11.0.12)
  - Locking phpunit/php-file-iterator (5.1.1)
  - Locking phpunit/php-invoker (5.0.1)
  - Locking phpunit/php-text-template (4.0.1)
  - Locking phpunit/php-timer (7.0.1)
  - Locking phpunit/phpunit (11.5.55)
  - Locking psr/clock (1.0.0)
  - Locking psr/container (2.0.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.1.0)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.2)
  - Locking psr/simple-cache (3.0.0)
  - Locking psy/psysh (v0.12.22)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (2.1.1)
  - Locking ramsey/uuid (4.9.2)
  - Locking sebastian/cli-parser (3.0.2)
  - Locking sebastian/code-unit (3.0.3)
  - Locking sebastian/code-unit-reverse-lookup (4.0.1)
  - Locking sebastian/comparator (6.3.3)
  - Locking sebastian/complexity (4.0.1)
  - Locking sebastian/diff (6.0.2)
  - Locking sebastian/environment (7.2.1)
  - Locking sebastian/exporter (6.3.2)
  - Locking sebastian/global-state (7.0.2)
  - Locking sebastian/lines-of-code (3.0.1)
  - Locking sebastian/object-enumerator (6.0.1)
  - Locking sebastian/object-reflector (4.0.1)
  - Locking sebastian/recursion-context (6.0.3)
  - Locking sebastian/type (5.1.3)
  - Locking sebastian/version (5.0.2)
  - Locking staabm/side-effects-detector (1.0.5)
  - Locking symfony/clock (v7.4.8)
  - Locking symfony/console (v7.4.8)
  - Locking symfony/css-selector (v7.4.8)
  - Locking symfony/deprecation-contracts (v3.6.0)
  - Locking symfony/error-handler (v7.4.8)
  - Locking symfony/event-dispatcher (v7.4.8)
  - Locking symfony/event-dispatcher-contracts (v3.6.0)
  - Locking symfony/finder (v7.4.8)
  - Locking symfony/http-foundation (v7.4.8)
  - Locking symfony/http-kernel (v7.4.8)
  - Locking symfony/mailer (v7.4.8)
  - Locking symfony/mime (v7.4.8)
  - Locking symfony/polyfill-ctype (v1.36.0)
  - Locking symfony/polyfill-intl-grapheme (v1.36.0)
  - Locking symfony/polyfill-intl-idn (v1.36.0)
  - Locking symfony/polyfill-intl-normalizer (v1.36.0)
  - Locking symfony/polyfill-mbstring (v1.36.0)
  - Locking symfony/polyfill-php80 (v1.36.0)
  - Locking symfony/polyfill-php83 (v1.36.0)
  - Locking symfony/polyfill-php84 (v1.36.0)
  - Locking symfony/polyfill-php85 (v1.36.0)
  - Locking symfony/polyfill-uuid (v1.36.0)
  - Locking symfony/process (v7.4.8)
  - Locking symfony/routing (v7.4.8)
  - Locking symfony/service-contracts (v3.6.1)
  - Locking symfony/string (v7.4.8)
  - Locking symfony/translation (v7.4.8)
  - Locking symfony/translation-contracts (v3.6.1)
  - Locking symfony/uid (v7.4.8)
  - Locking symfony/var-dumper (v7.4.8)
  - Locking symfony/yaml (v7.4.8)
  - Locking theseer/tokenizer (1.3.1)
  - Locking tijsverkoyen/css-to-inline-styles (v2.4.0)
  - Locking vlucas/phpdotenv (v5.6.3)
  - Locking voku/portable-ascii (2.1.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 111 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (2.1.0): Extracting archive
  - Installing doctrine/lexer (3.0.1): Extracting archive
  - Installing dragonmantank/cron-expression (v3.6.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.6.0): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing fakerphp/faker (v1.24.1): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.36.0): Extracting archive
  - Installing symfony/http-foundation (v7.4.8): Extracting archive
  - Installing fruitcake/php-cors (v1.4.0): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing guzzlehttp/psr7 (2.9.0): Extracting archive
  - Installing guzzlehttp/promises (2.3.0): Extracting archive
  - Installing guzzlehttp/guzzle (7.10.0): Extracting archive
  - Installing symfony/polyfill-php80 (v1.36.0): Extracting archive
  - Installing guzzlehttp/uri-template (v1.0.5): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.36.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.36.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.36.0): Extracting archive
  - Installing symfony/string (v7.4.8): Extracting archive
  - Installing symfony/service-contracts (v3.6.1): Extracting archive
  - Installing symfony/console (v7.4.8): Extracting archive
  - Installing nunomaduro/termwind (v2.4.0): Extracting archive
  - Installing voku/portable-ascii (2.1.0): Extracting archive
  - Installing phpoption/phpoption (1.9.5): Extracting archive
  - Installing graham-campbell/result-type (v1.1.4): Extracting archive
  - Installing vlucas/phpdotenv (v5.6.3): Extracting archive
  - Installing symfony/css-selector (v7.4.8): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (v2.4.0): Extracting archive
  - Installing symfony/var-dumper (v7.4.8): Extracting archive
  - Installing symfony/polyfill-uuid (v1.36.0): Extracting archive
  - Installing symfony/uid (v7.4.8): Extracting archive
  - Installing symfony/routing (v7.4.8): Extracting archive
  - Installing symfony/process (v7.4.8): Extracting archive
  - Installing symfony/polyfill-php85 (v1.36.0): Extracting archive
  - Installing symfony/polyfill-php84 (v1.36.0): Extracting archive
  - Installing symfony/polyfill-php83 (v1.36.0): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.36.0): Extracting archive
  - Installing symfony/mime (v7.4.8): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.6.0): Extracting archive
  - Installing symfony/event-dispatcher (v7.4.8): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing egulias/email-validator (4.0.4): Extracting archive
  - Installing symfony/mailer (v7.4.8): Extracting archive
  - Installing symfony/error-handler (v7.4.8): Extracting archive
  - Installing symfony/http-kernel (v7.4.8): Extracting archive
  - Installing symfony/finder (v7.4.8): Extracting archive
  - Installing ramsey/collection (2.1.1): Extracting archive
  - Installing brick/math (0.14.8): Extracting archive
  - Installing ramsey/uuid (4.9.2): Extracting archive
  - Installing psr/simple-cache (3.0.0): Extracting archive
  - Installing symfony/translation-contracts (v3.6.1): Extracting archive
  - Installing symfony/translation (v7.4.8): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing symfony/clock (v7.4.8): Extracting archive
  - Installing carbonphp/carbon-doctrine-types (3.2.0): Extracting archive
  - Installing nesbot/carbon (3.11.4): Extracting archive
  - Installing monolog/monolog (3.10.0): Extracting archive
  - Installing league/uri-interfaces (7.8.1): Extracting archive
  - Installing league/uri (7.8.1): Extracting archive
  - Installing league/mime-type-detection (1.16.0): Extracting archive
  - Installing league/flysystem-local (3.31.0): Extracting archive
  - Installing league/flysystem (3.33.0): Extracting archive
  - Installing nette/utils (v4.1.3): Extracting archive
  - Installing nette/schema (v1.3.5): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
  - Installing league/config (v1.2.0): Extracting archive
  - Installing league/commonmark (2.8.2): Extracting archive
  - Installing laravel/serializable-closure (v2.0.12): Extracting archive
  - Installing laravel/prompts (v0.3.16): Extracting archive
  - Installing laravel/framework (v12.56.0): Extracting archive
  - Installing laravel/pail (v1.2.6): Extracting archive
  - Installing laravel/pint (v1.29.0): Extracting archive
  - Installing symfony/yaml (v7.4.8): Extracting archive
  - Installing laravel/sail (v1.57.0): Extracting archive
  - Installing nikic/php-parser (v5.7.0): Extracting archive
  - Installing psy/psysh (v0.12.22): Extracting archive
  - Installing laravel/tinker (v2.11.1): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.1.1): Extracting archive
  - Installing mockery/mockery (1.6.12): Extracting archive
  - Installing filp/whoops (2.18.4): Extracting archive
  - Installing nunomaduro/collision (v8.9.3): Extracting archive
  - Installing staabm/side-effects-detector (1.0.5): Extracting archive
  - Installing sebastian/version (5.0.2): Extracting archive
  - Installing sebastian/type (5.1.3): Extracting archive
  - Installing sebastian/recursion-context (6.0.3): Extracting archive
  - Installing sebastian/object-reflector (4.0.1): Extracting archive
  - Installing sebastian/object-enumerator (6.0.1): Extracting archive
  - Installing sebastian/global-state (7.0.2): Extracting archive
  - Installing sebastian/exporter (6.3.2): Extracting archive
  - Installing sebastian/environment (7.2.1): Extracting archive
  - Installing sebastian/diff (6.0.2): Extracting archive
  - Installing sebastian/comparator (6.3.3): Extracting archive
  - Installing sebastian/code-unit (3.0.3): Extracting archive
  - Installing sebastian/cli-parser (3.0.2): Extracting archive
  - Installing phpunit/php-timer (7.0.1): Extracting archive
  - Installing phpunit/php-text-template (4.0.1): Extracting archive
  - Installing phpunit/php-invoker (5.0.1): Extracting archive
  - Installing phpunit/php-file-iterator (5.1.1): Extracting archive
  - Installing theseer/tokenizer (1.3.1): Extracting archive
  - Installing sebastian/lines-of-code (3.0.1): Extracting archive
  - Installing sebastian/complexity (4.0.1): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (4.0.1): Extracting archive
  - Installing phpunit/php-code-coverage (11.0.12): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.13.4): Extracting archive
  - Installing phpunit/phpunit (11.5.55): Extracting archive
69 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
81 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
> @php -r "file_exists('.env') || copy('.env.example', '.env');"

   INFO  Application key set successfully.  


 Which database will your application use? [SQLite]:
  [sqlite ] SQLite
  [mysql  ] MySQL
  [mariadb] MariaDB
  [pgsql  ] PostgreSQL (Missing PDO extension)
  [sqlsrv ] SQL Server (Missing PDO extension)
 > 


   INFO  Preparing database.  

  Creating migration table ............................................................................................................ 10.28ms DONE

   INFO  Running migrations.  

  0001_01_01_000000_create_users_table ................................................................................................ 25.47ms DONE
  0001_01_01_000001_create_cache_table ................................................................................................ 16.78ms DONE
  0001_01_01_000002_create_jobs_table ................................................................................................. 24.06ms DONE


 Would you like to run npm install --ignore-scripts and npm run build? (yes/no) [yes]:
 > 

"npm" no se reconoce como un comando interno o externo,
programa o archivo por lotes ejecutable.
   INFO  Application ready in [my-app]. You can start your local development using:

➜ cd my-app
➜ composer run dev
```
