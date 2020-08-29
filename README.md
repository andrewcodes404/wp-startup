## startup for wp

### on setup

 `./gulpfile`
change this to your local url

``` js
function serve() {
    browserSync.init({
                proxy: "http://wp-startup.local/",
                notify: false,
                ...
```

Add some vscode settings
/.vscode/settings.json

``` json
{
  "workbench.colorCustomizations": {
    "titleBar.activeForeground": "#fff",
    "titleBar.inactiveForeground": "#fff",
    "titleBar.activeBackground": "#ff34ab",
    "titleBar.inactiveBackground": "#af0060"
  }
}
```

ACTIVATE THE PLUGINS - ACF and Smush

use this file  to import some ACF setup fields
wp-content/acf-export-2020-08-29.json
