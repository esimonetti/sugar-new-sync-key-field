# Upsert additional sync_key fields
This Sugar module loadable package is a template to help add new sync_key type fields for the upsert api. It is useful to create multiple integrations external reference fields to the same record, when a single sync_key field is not enough.

This template creates an installable package containing a new field (`integration1_id`) for `Contacts` and `Accounts` modules.

## Build and Installation Instructions
* Clone the repository and enter the cloned directory
* Edit `configuration/manifest.php`, `configuration/templates.php`, `custom_extension_modules/Vardefs/additional_fields.php` and `custom_extension_modules/Language/en_us.additional_fields.lang.php` to suit the specific needs
* Retrieve the Sugar Module Packager dependency by running either `composer install` or `docker run --rm --interactive --tty --volume $PWD:/app composer install`
* Generate the installable .zip Sugar module within the `releases` directory with either ``./vendor/bin/package `cat version` `` or ``./vendor/bin/package-docker `cat version` ``
* Install the generated module into the instance
* Execute a Repair and Rebuild
