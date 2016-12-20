# Starter kit for Drupal behat testing using Probo.Ci

This is a starting point for setting up behat testing for a Drupal
project and then automatically running those tests using Probo.Ci.

## Setting up behat testing
1. Copy the [tests](tests) directory to your project root.
1. If your project is using Drupal 8, add the following line to the
[require section of the composer.json](tests/composer.json#L2-L4) file:
`"guzzlehttp/guzzle" : "^6.0@dev"`
1. Follow the instructions in [tests/README.md](tests/README.md).  For 
customizing or troubleshooting, refer to the [Behat Drupal Extension
docs](https://behat-drupal-extension.readthedocs.io).

## Automating your tests with probo.ci
1. Refer to the [probo.ci docs](https://docs.probo.ci/tutorials/drupal-github-quickstart/)
for setting up your Drupal site on probo.
1. Copy the `Run behat tests` step in the [.probo.yaml](.probo.yaml#L21-L27)
file of this project into the `.probo.yaml` file in the root of your
project.  For an even quicker start, you could copy the whole
`.probo.yaml` to your project and then modify it as necessary.
