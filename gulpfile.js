var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;


// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        /*server: {
            baseDir: "./"
        }*/
    	proxy: 'http://localhost/Payal_Priyadarshini_PHP_Project'
    });
    gulp.watch("index.php").on('change', browserSync.reload);
});

