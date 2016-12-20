## Setting up behat testing locally:

1. Make a copy of `behat.example.yml` named `behat.yml` and update it as
appropriate.
2. Run `composer install` in this directory to install dependencies.
3. Run `./bin/behat` in this directory to run all behat tests.

### Tips for running your tests
- To run only the tests in one feature: 
     `./bin/behat features/example.feature`
- To run only the tests with a certain tag:
     `./bin/behat --tags="mytag"`
    
### Writing tests
1. Create new `.feature` files in `/tests/features`, or just add steps
to an existing `.feature` file. 
2. Use the format of existing tests as an example.  Run `./bin/behat -dl`
in this directory to see a list of all available steps.
