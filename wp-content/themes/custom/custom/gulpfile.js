const gulp = require('gulp');
const useref = require('gulp-useref');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
//const cssnano = require("gulp-cssnano");

const cleanCSS = require('gulp-clean-css');

gulp.task("js", function() {
  return gulp.src("js/*.js") // директория откуда брать исходники
    .pipe(useref()) // объеденим все js-файлы в один
    .pipe(uglify()) // вызов плагина uglify - сжатие кода
    .pipe(gulp.dest("prod")); // директория продакшена, т.е. куда сложить готовый файл
});

gulp.task("css", function() {
  return gulp.src([
    'css/fonts.css',
    'css/menu.css',
    'css/header.css',
    'css/home_block_1.css',
    'css/home_block_2.css',
    'css/home_block_3.css',
    'css/home_block_4.css',
    'css/home_block_5.css',
    'css/home_block_6.css',
    'css/home_block_7.css',
    'css/about_block_1.css',
    'css/about_block_2.css',
    'css/about_block_3.css',
    'css/about_block_4.css',
    'css/CDPAP_block_2.css',
    'css/downloads_block3.css',
    'css/blog_block_2.css',
    'css/contact_us_2.css',
    'css/contact_us_3.css',
    'css/footer.css',
    'css/grid.css',
    'style.css'
  ])
    //.pipe(minifyCSS())
    //.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
    //.pipe(count('## css selected'))
    .pipe(cleanCSS())
    .pipe(concat('main.css'))
    .pipe(gulp.dest("prod"));
});