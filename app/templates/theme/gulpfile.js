// include gulp
var gulp  = require('gulp');
var gutil = require('gulp-util');
var prefix = require('gulp-autoprefixer');

// plugins
var changed  = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var sass     = require('gulp-sass');
var serve    = require('gulp-serve');
var autoprefixer = require('gulp-autoprefixer');

// input directories
var imagemin_src = 'assets/images/src/**/*';
var sass_src     = 'assets/styles/src/main.scss';
var sass_dir     = 'assets/styles/src/**/*';

var imagemin_dist = 'assets/images/';
var sass_dist     = 'assets/styles/';

// compress images
gulp.task('images:compress', function () {
    gulp.src(imagemin_src)
    		.pipe(changed(imagemin_dist))
        .pipe(imagemin())
        .pipe(gulp.dest(imagemin_dist));
});

// compile sass
gulp.task('sass:compile', function () {
    gulp.src(sass_src)
        .pipe(sass({style: 'compact', sourcemap: true, errLogToConsole: true, includePaths: ['assets/styles/src']}))
        .pipe(prefix("last 500 version"))
        .pipe(gulp.dest(sass_dist));
});

// serve
gulp.task('serve', ['images:compress', 'sass:compile'], function () {
    gulp.watch(imagemin_src, ['images:compress']);
    gulp.watch(sass_dir, ['sass:compile']);
});
