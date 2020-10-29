
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
//var reload = browserSync.reload;
//
//
//// Static server
//gulp.task('browser-sync', function() {
//    browserSync.init({
//        /*server: {
//            baseDir: "./"
//        }*/
//    	proxy: 'http://localhost/Payal_Priyadarshini_PHP_Project/'
//    });

        gulp.task('browser-sync', function()
            {
                browserSync.init({
                proxy: "http://localhost/Payal_Priyadarshini_PHP_Project/"
            });
        });
        gulp.watch("includes/top.php").on('change', browserSync.reload);
        gulp.watch("includes/header.php").on('change', browserSync.reload);
        gulp.watch("includes/banner.php").on('change', browserSync.reload);
        gulp.watch("index.php").on('change', browserSync.reload);
//});

