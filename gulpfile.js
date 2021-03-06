var gulp = require('gulp');
var webserver = require('gulp-webserver');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglify');


var onError = function (err) {  
  gutil.beep();
  console.log(err);
};

gulp.task('webserver', function() {
  gulp.src('components')
  .pipe(webserver({
      livereload: true,
      // directoryListing: true,
      open: true
    }));
});

gulp.task('sass', function(){
  gulp.src('components/scss/style.scss')
  .pipe(plumber())
  .pipe(sass())
  .pipe(gulp.dest('components/css'))
  .pipe(livereload());
});

gulp.task('uglify', function(){
  gulp.src('components/js/scripts/*.js')
  .pipe(plumber())
  .pipe(uglify())
  .pipe(gulp.dest('components/js'))
});

gulp.task('compass', function() {
  gulp.src('components/scss/style.scss')
  .pipe(plumber())
    .pipe(compass({
      css: 'components/css',
      sass: 'components/scss',
      require:  ['susy', 'breakpoint', 'bourbon']
    }))
    .pipe(gulp.dest('components/temp'))
    .pipe(livereload());
});



gulp.task('watch',function(){
  livereload.listen();
  gulp.watch('components/scss/*.scss',['compass']);
  gulp.watch('components/js/scripts/*.js', ['uglify']);
});


gulp.task('default', [ 'compass', 'uglify', 'watch']);