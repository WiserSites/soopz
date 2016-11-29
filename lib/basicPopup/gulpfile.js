var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint'),
    header  = require('gulp-header'),
    rename = require('gulp-rename'),
    minifyCSS = require('gulp-minify-css'),
    package = require('./package.json');

	
var config = {
	src: './src',
	dist: './dist',
	bowerSrc: './src/bower_components',
	bowerDist: './dist/vendors'
}

var banner = [
  '/*!\n' +
  ' * <%= package.name %>\n' +
  ' * <%= package.title %>\n' +
  ' * <%= package.url %>\n' +
  ' * @author <%= package.author %>\n' +
  ' * @version <%= package.version %>\n' +
  ' * Copyright ' + new Date().getFullYear() + '. <%= package.license %> licensed.\n' +
  ' */',
  '\n'
].join('');


gulp.task('html', function () {
    gulp.src(config.src+'/*.html')
    .pipe(gulp.dest(config.dist))
	.pipe(browserSync.reload({stream:true}));
});

gulp.task('css',function () {
    gulp.src(config.src+'/css/*.*')
    .pipe(sass({errLogToConsole: true}))
    .pipe(autoprefixer('last 4 version'))
    .pipe(gulp.dest(config.dist+'/css'))
    .pipe(minifyCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest(config.dist+'/css'))
    .pipe(browserSync.reload({stream:true}));
});


gulp.task('vendors' ,function () {
    /* jQuery */	
	gulp.src(config.bowerSrc+'/jquery/dist/*.[js, map]')
    .pipe(gulp.dest(config.bowerDist+'/jquery/'))
});


gulp.task('js',function(){
  gulp.src(config.src+'/js/*.js')
    //.pipe(jshint('.jshintrc'))
    //.pipe(jshint.reporter('default'))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest(config.dist+'/js'))
    .pipe(uglify())
    .pipe(header(banner, { package : package }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(config.dist+'/js'))
    .pipe(browserSync.reload({stream:true, once: true}));
});

gulp.task('browser-sync', function() {
    browserSync.init(null, {
        server: {
            baseDir: 'dist'
        }
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});


gulp.task('default', ['css', 'vendors', 'js', 'html', 'browser-sync'], function () {
    gulp.watch(config.src+'/css/*.scss', ['css']);
    gulp.watch(config.src+'/js/*.js', ['js']);
    gulp.watch(config.src+'/*.html', ['html', 'bs-reload']);
});


gulp.task('build', ['css', 'vendors', 'js', 'html']);
