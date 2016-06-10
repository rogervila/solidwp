var gulp = require('gulp'),
	runSequence = require('run-sequence'),
	stylus = require('gulp-stylus'),
	sourcemaps = require('gulp-sourcemaps'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	babel = require('gulp-babel'),
	lost = require('lost'),
	uglify = require('gulp-uglify');


/**
 * Default
 */
gulp.task('default', ['build']);

/**
 * [description]
 * @param  {[type]} ) {               gulp.watch(['./assets/stylus/*.styl'], ['stylus']);    gulp.watch(['./assets/js/*.js'], ['js']);} [description]
 * @return {[type]}   [description]
 */
gulp.task('watch', function() {
    gulp.watch(['./assets/stylus/*.styl'], ['build']);
    gulp.watch(['./assets/js/*.js'], ['build']);
});


/**
 * [description]
 * @param  {[type]} ){	runSequence(		['stylus', 'js'],               'postcss'    );} [description]
 * @return {[type]}                              [description]
 */
gulp.task('build', function(){
	runSequence(
        'stylus',
        ['postcss', 'js']
    );
});



/**
 * [description]
 * @param  {[type]} ) {	return     gulp.src('./assets/stylus/*.styl')		.pipe(sourcemaps.init())		.pipe(stylus())		.pipe(sourcemaps.write('.'))		.pipe(gulp.dest('./assets/dist'));} [description]
 * @return {[type]}   [description]
 */
gulp.task('stylus', function () {
	return gulp.src('./assets/stylus/*.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus({
			compress: true
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./assets/dist'));
});


/**
 * [description]
 * @param  {Array}  )  {	var        processors [description]
 * @param  {[type]} ];                                        return gulp.src('./assets/dist/*.css')        .pipe(postcss(processors))        .pipe(gulp.dest('./assets/dist'));} [description]
 * @return {[type]}    [description]
 */
gulp.task('postcss', function () {

	var processors = [
        autoprefixer({browsers: ['last 5 versions']}),
        lost(),
    ];

    return gulp.src('./assets/dist/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./assets/dist'));
});


/**
 * [description]
 * @param  {[type]} ) {	console.log('js function');} [description]
 * @return {[type]}   [description]
 */
gulp.task('js', function () {
	return gulp.src('./assets/js/*.js')
		.pipe(sourcemaps.init())
		.pipe(babel({
			presets: ['es2015']
		}))
		.pipe(uglify())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./assets/dist'));
});


