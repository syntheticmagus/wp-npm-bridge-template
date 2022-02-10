# WordPress NPM Bridge Template

This template is intended to exemplify a minimal way to expose JS functionality 
developed in an NPM-style workflow as a WordPress plugin.

Put your JavaScript logic, including usage of your NPM dependencies and the
functions you want to expose to your WordPress pages, in 
[index.js](./src/index.js).

Consume your JavaScript functions through the WordPress integration in 
[wp-npm-bridge-template.php](wp/wp-npm-bridge-template/wp-npm-bridge-template.php),
either by simply allowing automatically-executing functionality to run when your
JS is loaded or by exposing manually-invokable functionality through custom
shortcodes.

`npm run build` will output a .zip file containing your plugin in the 
[build](./build) folder. Note that, as part of building, build artifacts are
deposited in the 
[./wp/wp-npm-bridge-template/assets/js/](./wp/wp-npm-bridge-template/assets/js/)
directory. This is part of the build process as 
[./wp/wp-npm-bridge-template](./wp/wp-npm-bridge-template/) itself is the folder which
is zipped to create the WordPress plugin. These artifacts are generated files and
should be neither committed nor manually modified. .gitignore should ignore these
by default, and `git clean -dfx` will clean them up if you want them removed.

For additional information, read the comments in [index.js](./src/index.js) and
[wp-npm-bridge-template.php](wp/wp-npm-bridge-template/wp-npm-bridge-template.php).
This template is intended to be basic, not comprehensive; use it as a foundation
on which to build more sophisticated capabilities. Hope this helps, and best of luck!

-syntheticmagus
