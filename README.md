# cul-login
CUWebAuth Drupal module

To get the CUWebAuth stuff working:

Your server has to be properly set up to support CUWebAuth (need keytabs, etc.)

You'll need 2 modules from the git repository:

Check the appropriate modules out from git and place them in
<your Drupal site>/sites/all/modules/custom/cul_login
<your Drupal site>/sites/all/modules/custom/cul_common

The paths should end up like this:
<your Drupal site>/sites/all/modules/custom/cul_login/cul_login.info
<your Drupal site>/sites/all/modules/custom/cul_login/cul_login.module

Enable the modules in Drupal.

The cul_login module produces a page and a block:

/cul_login
the page with a login button, and

'Cornell Library Login'
the block - also with a login button.

We usually put a 'Login' link at the bottom of the page that goes to /cul_login
and make the block show up on the normal Drupal login page /user .

When a new user logs in the module creates a generic account for them with no roles attached.

Configure the module's Required CUWebAuth permit setting in the configuration section of the 'Cornell Library Login' block.

