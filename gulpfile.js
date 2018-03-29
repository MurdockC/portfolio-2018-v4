var gulp = require('gulp'),
	sass = require('gulp-sass'),
	php = require('gulp-connect-php'),
	autoprefixer = require('gulp-autoprefixer');
	browserSync = require('browser-sync');
	cleanCSS = require('gulp-clean-css');
	imagemin = require('gulp-imagemin');


gulp.task('sass', function() {
	return gulp.src('assets/css/*.scss')
		.pipe(sass())
		.pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
		.pipe(cleanCSS({compatibility: 'ie8'}))
		.pipe(gulp.dest('assets/css/'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('image-min', function () {
    gulp.src('assets/images/src/*')
        .pipe(imagemin())
        .pipe(gulp.dest('assets/images/dist/'))
});

gulp.task('php', function() {
    php.server({ base: '../new_portfolio', port: 8081, keepalive: true});
});

gulp.task('browser-sync',['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8081',
        port: 8081,
        open: true,
        notify: false
    });
});

gulp.task('watch', ['browser-sync', 'sass' , 'image-min'], function() {
	gulp.watch('assets/css/*.scss', [sass]);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('*.js', browserSync.reload);
});
