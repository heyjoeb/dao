const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

function css() {
    return src('./scss/*.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(dest('./'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function jsBuild() {
  return src(['node_modules/jquery/dist/jquery.min.js', 'node_modules/slick-carousel/slick//slick.min.js', 'node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'], { sourcemaps: true })
      .pipe(concat('build.min.js'))
      .pipe(dest('./js/min', { sourcemaps: true }));
}

function js() {
    return src('./js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(dest('./js/min', { sourcemaps: true }));
}

function browser() {
    browserSync.init({
        proxy: 'http://localhost/dao.local',
        files: [
            './**/*.php'
        ]
    });

    watch('./scss/**/*.scss', css);
    watch('./js/*.js', js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.jsBuild = jsBuild;
exports.default = browser;