// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var bourbon = require('node-bourbon');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass-style', function() {
    return gulp.src('style.scss')
        .pipe(sass({
            includePaths: require('node-bourbon').with('assets/sass', 'style.scss')
        }))
        .pipe(gulp.dest('style-new.css'));
});
// Compile Our Sass
gulp.task('sass-woo', function() {
    return gulp.src('assets/sass/woocommerce/woocommerce.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/sass/woocommerce'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('assets/sass/*.scss', ['sass']);
    gulp.watch('assets/sass/*/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass-style', 'watch']);
