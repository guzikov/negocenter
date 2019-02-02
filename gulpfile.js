var syntax        = 'scss'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		jade		  = require('gulp-jade');
		// rsync         = require('gulp-rsync');

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'web'
		},
		notify: false,
		// open: false,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
	})
});

gulp.task('styles', function() {
	return gulp.src('web/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('web/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
		'web/libs/1.jquery/dist/jquery.min.js',
		'web/libs/intl-tel-input/js/utils.js',
		'web/libs/intl-tel-input/js/intlTelInput.js',
		'web/libs/3.mask/jquery.maskedinput.min.js',
		'web/libs/2.slick/slick.js',
		// 'app/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('web/js'))
	.pipe(browserSync.reload({ stream: true }))
});

gulp.task('jade', function() {
	gulp.src('web/jade/pages/**/*.jade')
		.pipe(jade({
			pretty: '  ',
		}))
		.pipe(gulp.dest('web/'));
	gulp.src('web/jade/**/*.jade')
		.pipe(browserSync.stream())
});

// gulp.task('rsync', function() {
// 	return gulp.src('app/**')
// 	.pipe(rsync({
// 		root: 'app/',
// 		hostname: 'username@yousite.com',
// 		destination: 'yousite/public_html/',
// 		// include: ['*.htaccess'], // Includes files to deploy
// 		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
// 		recursive: true,
// 		archive: true,
// 		silent: false,
// 		compress: true
// 	}))
// });

gulp.task('watch', ['styles', 'js', 'jade', 'browser-sync'], function() {
	gulp.watch('web/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch('web/'+syntax+'/**/*.+(scss|sass)', ['styles']);
	gulp.watch(['libs/**/*.js', 'web/js/common.js'], ['js']);
	gulp.watch('web/jade/**/*.jade', ['jade']);

	gulp.watch('web/*.html', browserSync.reload)
});

gulp.task('default', ['watch']);
