var gulp = require('gulp'),
    sass = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
    browserSync = require('browser-sync').create(),
    uncss = require('gulp-uncss'),
    url = 'http://localhost:8080/wp-sloth';


    gulp.task('browserSync', function() {
      var files = [
      					'**/*.php',
      					'**/*.{png,jpg,gif}'
                  ];

      browserSync.init(files, {
        proxy: url
        //port: 8080

        // Attempt to use the URL "http://my-private-site.localtunnel.me"
    		// tunnel: "ppress",
      });
    });

gulp.task('styles', function() {
    gulp.src('./assets/css/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({
       stream: true
    }));
});

//Image optmization
gulp.task('imagemin', function() {
   var imgSrc = './assets/img/raw/**/*.{png,jpg,gif}';
   gulp.src(imgSrc)
   .pipe(imagemin())
   .pipe(gulp.dest('./assets/img/'));
});

//Watch task
gulp.task('default', ['browserSync', 'imagemin', 'styles'], function() {
    gulp.watch('./assets/css/**/*.scss', ['styles']);
    gulp.watch('./assets/img/raw/**/*', ['imagemin']);
    gulp.watch('./assets/views/**/*.html', browserSync.reload);
    gulp.watch('./assets/js/**/*.js', browserSync.reload);
});
