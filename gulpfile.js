const gulp = require('gulp');
const less = require('gulp-less');
const path = require('path');
const del = require('del');
const babel = require('gulp-babel');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
 
// gulp.task('less', function () {
//   return gulp.src('./less/**/*.less')
//     .pipe(less({
//       paths: [ path.join(__dirname, 'less', 'includes') ]
//     }))
//     .pipe(gulp.dest('./public/css'));
// });

function styles() {
  return gulp.src('./src/less/**/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(
      autoprefixer({
        browsers: ['> 0.1%'],
        cascade: false
      })
    )
    .pipe(gulp.dest('./build/css'))
    .pipe(browserSync.stream());
}

function jqueryConnect() {
  return gulp.src('./node_modules/jquery/dist/jquery.min.js')
    .pipe(gulp.dest('./build/js'));
}

function carouselConnect() {
  return gulp.src('./assets/jquery.jcarousel.min.js')
    .pipe(gulp.dest('./build/js'));
}

function bootstrapJs() {
  return gulp.src('./node_modules/bootstrap/dist/js/bootstrap.min.js')
    .pipe(gulp.dest('./build/js'));
}

function scripts() {
  return gulp.src('./src/js/**/*.js')
    // .pipe(babel({
    //   presets: ['@babel/env']
    // }))
    .pipe(gulp.dest('./build/js'))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  })
  gulp.watch('./src/less/**/*.less', styles);
  gulp.watch('./src/js/**/*.js', scripts);
  gulp.watch('*.html');
}

function clean() {
  return del(['build/*']);
}

gulp.task('styles', styles);
gulp.task('scripts', scripts);
gulp.task('jqueryConnect', jqueryConnect);
gulp.task('carouselConnect', carouselConnect);
gulp.task('bootstrapJs', bootstrapJs);
gulp.task('watch', watch);
gulp.task('clean', clean);
gulp.task('build', gulp.series('clean', 
  gulp.parallel('styles', 'scripts', 'jqueryConnect', 'bootstrapJs')));
gulp.task('dev', gulp.series('build', 'watch'));

