/**
 * Created by Hotell on 20.1.2014.
 */
"use strict";
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var usemin = require('gulp-usemin');
var less = require('gulp-less');

var fs = require('fs');
var path = require('path');


gulp.task('scripts', function () {
    // Minify and copy all JavaScript (except vendor scripts)
    return gulp.src(['js/**/*.js', '!js/vendor/**'])
        .pipe(uglify())
        .pipe(gulp.dest('build/js'));
});

// Copy all static images
gulp.task('images', function () {
    return gulp.src('images/**')
        // Pass in options to the task
        .pipe(imagemin({optimizationLevel: 5}))
        .pipe(gulp.dest('build/img'));
});

gulp.task('less', function () {
    var lessFiles = './css/less/**/*.less',
        lessRoot = './css/less/style.less';

    gulp.src(lessRoot)
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(gulp.dest('./css'));

    gulp.watch(lessFiles, function(){
       gulp.run('less');
    });
});



// The default task (called when you run `gulp`)
gulp.task('default', function () {
    gulp.run('scripts', 'images');

    // Watch files and run tasks if they change
    gulp.watch('client/js/**', function () {
        gulp.run('scripts');
    });

    gulp.watch('client/img/**', function () {
        gulp.run('images');
    });
});