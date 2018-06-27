var gulp = require('gulp');
var uglify = require('gulp-uglify');
let cleanCSS = require('gulp-clean-css');
var htmlmin = require('gulp-html-minifier');

gulp.task('build', function () {
    return gulp.src('html_dev/**/*').pipe(gulp.dest('build'));
});  

gulp.task('js', function(){
    return gulp.src(['build/**/*.js', '!build/**/*min.js'])
        .pipe(uglify())
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('css', function(){
    return gulp.src(['build/**/*.css', '!build/**/*min.css'])
        .pipe(cleanCSS())
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('html', function(){
    return gulp.src(['build/*.html'])
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('default', ['js', 'css', 'html'])
