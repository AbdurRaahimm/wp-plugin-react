# Wordpress React Plugin 

This is a simple plugin that uses React to render a component in the admin dashboard.

## Installation

1. Clone the repo into your plugins folder
```shell
git clone https://github.com/AbdurRaahimm/wp-plugin-react.git
```
2. Run `npm install` to install the dependencies
```shell
npm install
```
3. Start the Project
```shell
npm start
```
4. Run `npm run build ` to build the project
```shell
npm run build
```
4. Activate the plugin in the Wordpress admin dashboard

_________________________________________________________

# If you want to create by own , make sure in your pc installed nodeJs and check version 
```shell
node -v
```
## Let's build a simple wordpress plugin with React JS.

### Step 1: Create a  folder in your wordpress plugin directory
```shell
mkdir wp-plugin-react
```
### Step 2: Then Initialize 
```shell
npm init
```
### Step 3: Install `@wordpress/scripts` by running -
```shell
npm install @wordpress/scripts --save-dev
```
### Step 4: Add some command in `package.json` and final would be -
```shell
"scripts": {
    "start": "wp-scripts start",
    "build": "wp-scripts build",
  },
```
### Step 5: Create file `webpack.config.js` in plugin root folder -
```shell
const defaults = require('@wordpress/scripts/config/webpack.config');

module.exports = {
  ...defaults,
  externals: {
    react: 'React',
    'react-dom': 'ReactDOM',
  },
};
```

### Step 6: Create file `templates/app.php` in plugin root folder -
```html
<div id="root">
    <h2>Loading...</h2>
</div>
```

### Step 7: Create file `wp-plugin-react.php` in plugin root folder -
```php
<?php
/**
 * Plugin Name: WP Plugin React
 * Description: A simple plugin that uses React to render a component in the admin dashboard.
 * Version: 1.0.0 
 * Author:           Abdur Rahim
 * Author URI:       https://www.facebook.com/Rahim72446
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jobplace
 */

//  Dashboard widget

 function new_dashboard_setup(){
    wp_add_dashboard_widget('wp_dashboard_widget', 'WordPress React Plugin', 'wp_dashboard_widget_function');

 }
add_action('wp_dashboard_setup', 'new_dashboard_setup');

function wp_dashboard_widget_function(){
    require_once plugin_dir_path( __FILE__ ) . 'templates/app.php';
}


// add script 

function wp_react_enqueue_scripts() {
    wp_enqueue_style( 'wp-react-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'wp-react-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'wp_react_enqueue_scripts' );

```

### Step 8: Create file `src/index.js` in plugin root folder -
```js
import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

ReactDOM.render(
    <App />,
    document.getElementById('root')
);
```

### Step 9: Create file `src/App.js` in plugin root folder -
```js
import React from 'react';

const App = () => {
    return (
        <div>
            <h1>Hello World</h1>
        </div>
    );
};

export default App;
```

### Step 10:  Now run - 
```shell
npm start
```


## Connect on Social Media
- [Twitter](https://twitter.com/AbdurRahim4G)
- [Instagram](https://www.instagram.com/abdurrahim4g/)
- [Facebook](https://www.facebook.com/Rahim72446)
- [LinkedIn](https://www.linkedin.com/in/abdur-rahim4g/)
- [YouTube](https://youtube.com/@AbdurRahimm)
