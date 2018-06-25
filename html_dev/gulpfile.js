var gulp = require('gulp');
var uglify = require('gulp-uglify');
var cssMin = require('gulp-css')
var htmlmin = require('gulp-html-minifier');

gulp.task('js', function(){
    return gulp.src(['./javascript/*.js', '!./javascript/*min.js', './revolution/js/*.js', '!revolution/js/*min.js'])
        .pipe(uglify())
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('css', function(){
    return gulp.src(['./stylesheet/**/*.css', './revolution/css/*.css'])
        .pipe(cssMin())
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('html', function(){
    return gulp.src(['*.html'])
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('default', ['css', 'js', 'html'])
