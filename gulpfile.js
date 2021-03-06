var gulp = require('gulp'),
    browserSync = require('browser-sync');

gulp.task('server', function () {
    browserSync({
        port: 3000,
        server: {
            baseDir: 'app',
            proxy: "localhost/portfolio"
        }
    });
});

gulp.task('watch', function () {
    gulp.watch([
        'app/*.html',
        'app/js/**/*.js',
        'app/css/**/*.css'
    ]).on('change', browserSync.reload);
});

gulp.task('default', ['server', 'watch']);
