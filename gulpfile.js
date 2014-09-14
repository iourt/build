var gulp    = require('gulp'),
    connect = require('gulp-connect'),
    less    = require('gulp-less'),
    os      = require(),
    path    = require('path');

var dirsource = 'source',
    dirbuild  = 'build';

var task = {
    less: function() {
        gulp.src('./' + dirsource + '/**/*.less')
            .pipe(less({
                paths: [ path.join(__dirname, 'less', 'includes') ]
            }))
            .pipe(gulp.dest('./public/css'));
    }
};

gulp.task('clean', function() {
    gulp.start(function() {

    });
});


gulp.task('default', ['clean'], function(){
    gulp.start(function() {

    });
});