var gulp    = require('gulp'),
    connect = require('gulp-connect'),
    less    = require('gulp-less'),
    path    = require('path'),
    watch   = require('gulp-watch'),
    clean   = require('gulp-clean');

var dirsource = 'source',
    dirbuild  = 'build';

var task = {
    less: function() {
        gulp.src('./' + dirsource + '/**/*.less')
            .pipe(less({
                paths: [ path.join(__dirname, 'less', 'includes') ]
            }))
            .pipe(gulp.dest('./' + dirbuild + '/'));
    },

    php: function() {
        gulp.src('./' + dirsource + '/**/*.php')
            .pipe(gulp.dest('./' + dirbuild + '/'));
    },

    img: function() {
        gulp.src([
                './' + dirsource + '/**/*.jpg',
                './' + dirsource + '/**/*.png'
            ])
            .pipe(gulp.dest('./' + dirbuild + '/'));
    },

    watch: function() {
        watch([
                './' + dirsource + '/**/*.jpg',
                './' + dirsource + '/**/*.png',
                './' + dirsource + '/**/*.php',
                './' + dirsource + '/**/*.less',
                './' + dirsource + '/**/*.js'
            ], function(files) {
                task.less();
                task.php();
                task.img();
            // files.pipe(function() {
            // });
        });
    }
};

gulp.task('clean', function() {
    gulp.start(function() {
        gulp.src('./' + dirbuild + '/', {read: false})
            .pipe(clean());
    });
});

gulp.task('default', ['clean'], function(){
    gulp.start(function() {
        task.less();
        task.php();
        task.img();
        task.watch();
    });
});