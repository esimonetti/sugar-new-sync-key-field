# Upsert additional sync_key fields
This Sugar module loadable package is a template to help add new sync_key type fields for the upsert api. It is useful to create multiple integrations external reference fields for the same record, when a single sync_key field is not enough.
It is always advisable to not leverage the default sync_key field, and instead create new ones for each integration, to control the rules around duplicate merging, with the provided after_delete logic hook.

This template creates an installable package containing a new field (`integration1_id`) for `Contacts` and `Accounts` modules and can be easily adapted.

## Requirements
* Linux or OSX
* Git
* either composer and PHP
* or docker

## Build and Installation Instructions
* Clone the repository and enter the cloned directory
* Edit the following files, to suit the specific needs
  * `./configuration/manifest.php`
  * `./configuration/templates.php`
* Edit and rename the following files, to suit the specific needs
  * `./custom_extension_modules/Vardefs/integration.sync_key.php`
  * `./custom_extension_modules/Language/en_us.integration.sync_key.lang.php`
  * `./custom_extension_modules/LogicHooks/afterDelete.integration.sync_key.php`
  * `./src/custom/logichooks/application/afterDeleteRemoveAdditionalFields.php`
* If composer and PHP are installed locally, execute `./build.sh` to generate the installable .zip Sugar module within the `./releases` directory
* Otherwise if using docker
    * Retrieve the Sugar Module Packager dependency by executing `docker run --rm --interactive --tty --volume $PWD:/app composer install`
    * Generate the installable .zip Sugar module within the `./releases` directory by executing ``./vendor/bin/package-docker `cat version` ``
* Install the generated module into the Sugar instance
* Execute a Repair and Rebuild if needed
