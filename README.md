# library-boilerplate

This is a boilerplate for libraries that have to be written in PHP, it contains a setup for:
- PHPunit tests
- Code sniffer integration

## Usage
This boilerplate should be installed by composer, with the following command you use the template

```
composer create-project jorisros/library-boilerplate <name directory>
```
This create a new directory with all the needed files directly there. There is no git involved any more, you have to setup git for your project seperatly.

## Run commands
There are commands specified with composer to make it more user friendly (my bad memory)

### Run the tests
You can run the tests with ease by following command:
``composer test``

### Run PHP codesniffer command
You can call the code sniffer command with ease by following command:
``composer cs``

## Run phan
You can run phan by the following command:
``composer phan``

## TODO
- [x] Add project to packagist
- [ ] Integrate setup for running tests on travis
- [ ] Integrate setup for running tests on bitbucket pipeline
- [ ] Integrate setup for running tests on Github actions
- [x] Add phan to the project
