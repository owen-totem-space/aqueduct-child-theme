//Load Gulp
const { src, dest, watch, series, parallel } = require('gulp');

// CSS Related Plugins
const sass              = require('gulp-sass');
const autoprefixer      = require('gulp-autoprefixer');

//JS Related Plugins
const babel             = require('gulp-babel');
const concat            = require('gulp-concat');

//Utility Plugins
const rename            = require('gulp-rename');
const sourcemaps        = require('gulp-sourcemaps');

//Browser Related Plugins
const browserSync       = require('browser-sync').create();

//Project Related Variables
const stylesSrc         = './src/scss/*.scss';
const stylesDist        = './dist/css/';

// const jsSrc             = './src/js/**/*.js';
const jsSrc             = ['./src/js/modified-dragjs.js', './src/js/main.js', './src/js/jquery-ui-child.js'];
const jsDist            = './dist/js/';

const stylesWatch       = './src/scss/**/*.scss';
const jsWatch           = './src/js/**/*.js';
const phpWatch          = './**/*.php';

function styles(){
    return src(stylesSrc)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'})
            .on('error', sass.logError))
        .pipe(autoprefixer({cascade: false}))
        .pipe(rename( {suffix: '.min'} ))
        .pipe(sourcemaps.write('./'))
        .pipe(dest(stylesDist))
}

function js(){
    return src(jsSrc)
        // .pipe(sourcemaps.init())
        // .pipe(babel({
        //     presets: ['@babel/preset-env', '@wordpress/default', "@babel/preset-react"],
        
        // }))
        .pipe(concat('all.js'))
        // .pipe(sourcemaps.write('.'))
        .pipe(dest(jsDist))
}
function watcher() {
    browserSync.init({
        proxy: "http://127.0.0.1:8080/test-site/",
        notify: true
    });
    watch(stylesWatch, styles).on('change', browserSync.reload);
    watch(jsWatch).on('change', browserSync.reload);
    watch(phpWatch).on('change', browserSync.reload);
}


exports.styles = styles;
exports.js = js;
exports.watcher = watcher;
exports.default = parallel(styles, js, watcher);