//Load Gulp
const { src, dest, watch, series, parallel } = require('gulp');

// CSS Related Plugins
const sass              = require('gulp-sass');
const autoprefixer      = require('gulp-autoprefixer');

//JS Related Plugins
const babel             = require('gulp-babel');
const concat            = require('gulp-concat');
const uglify            = require('gulp-uglify');

//Utility Plugins
const rename            = require('gulp-rename');
const sourcemaps        = require('gulp-sourcemaps');
const clean             = require('gulp-clean');

//Browser Related Plugins
const browserSync       = require('browser-sync').create();

//Project Related Variables
const stylesSrc         = './src/scss/styles.scss';
const stylesBuild       = './build/css/';

const jsSrc             = './src/js/mainJS/*.js';
const jsBuild           = './build/js/';

//Files to watch
const stylesWatch       = './src/scss/**/*.scss';
const jsWatch           = './src/js/**/*.js';
const phpWatch          = './**/*.php';

function styles(){
    return src(stylesSrc)
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.identityMap())
        .pipe(sass( {outputStyle: 'compressed'} ).on('error', sass.logError))
        // .pipe(autoprefixer({cascade: false}))
        .pipe(rename( {suffix: '.min'} ))
        .pipe(sourcemaps.write(('.') ))
        .pipe(dest(stylesBuild))
}

function jsBabel(){
    return src(jsSrc)
        .pipe(sourcemaps.init())
        .pipe(babel())
        .pipe(concat('main.js'))
        .pipe(uglify())        
        .pipe(rename( {suffix: '.min'} ))
        .pipe(sourcemaps.write('.'))
        .pipe( dest(jsBuild) )
}

function jsNoBabel(){
    return src(['./src/js/otherJS/modified-dragjs.js', './src/js/otherJS/jquery-ui-child.js'])
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(rename( {suffix: '.min'} ))
        .pipe(sourcemaps.write('.'))
        .pipe( dest(jsBuild) )
}

function cleaner () {
    return src(['./build/js/**/', './build/css/**/'], {read:false})
        .pipe(clean());
}

function watcher() {
    browserSync.init({
        proxy: "http://127.0.0.1:8080/test-site/",
        notify: true
    });
    watch(stylesWatch, styles).on('change', browserSync.reload);
    watch(jsWatch, jsBabel, jsNoBabel).on('change', browserSync.reload);
    watch(phpWatch).on('change', browserSync.reload);
}

exports.cleaner = cleaner;
exports.styles = styles;
exports.jsBabel = jsBabel;
exports.jsNoBabel = jsNoBabel;
exports.watcher = watcher;
exports.all = series (cleaner, (parallel(styles, jsBabel, jsNoBabel)));
exports.default = series (cleaner, (parallel(styles, jsBabel, jsNoBabel, watcher)));