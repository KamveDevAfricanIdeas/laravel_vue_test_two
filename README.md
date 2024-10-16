
# BOILER PLATE PROJECT 💻
## Setup Laravel + Vue JS + Tailwind CSS with Vite
> Begin by creating a new project
```
composer create-project --prefer-dist laravel/laravel project_name
```
> Setup a database (MYSQL, etc) and in the `.env` file change the `DB_*` files accordingly
> Now migrate laravel session db if needed
```
php artisan migrate
php artisan session:table
```
> We can now setup Vue js with additional ui configs
```
composer require laravel/ui
php artisan ui vue --auth
npm install vue-router@4 @vitejs/plugin-vue
npm install
```
- [x] This sets up vue js for us
> Now once we've installed all dependencies, we can configure our project for Tailwind
> Install dependencies
```
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```
> In the `tailwind.config.js` file
```
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
],
```
> In the `app.css` file
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```
> In the `app.js` file
```
import '../css/app.css';
```
> In the `vite.config.js` file make sure we reference our css, js, sass, etc files
```
plugins: [
  laravel({
    input: [
      'resources/css/app.css',
      'resources/sass/app.scss',
      'resources/js/app.js',
],
```
> Create a `postcss.config.cjs` file and add the following content
```
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};
```
- [x] If using VSCode, install the PostCSS Language Extension
> In our blade scripts, we have to reference the scripts using @vite
```
<head>
    @vite('resources/css/app.css')
</head>
<body>
  <div>
  </div>
  @vite('resources/js/app.js')
</body>
```
> Now we can compile our assets and serve the laravel project
```
npm run watch
php artisan serve
```
> Note to use `npm run watch` we have to modify the package.json file
```
"scripts": {
    "dev": "vite",
    "build": "vite build",
    "watch": "vite build --watch" /*<----add this line*/
},
```
