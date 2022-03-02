var gulp = require( 'gulp' ),
    sass = require( 'gulp-sass' )(require( 'node-sass' )),
    cleanCSS = require( 'gulp-clean-css' ),
    concat = require( 'gulp-concat' ),
    autoprefixer = require( 'gulp-autoprefixer' ),
    imagemin = require( 'gulp-imagemin' ),
    changed = require( 'gulp-changed' ),
    uglify = require( 'gulp-uglify' ),
    lineec = require( 'gulp-line-ending-corrector' ),
    rename = require( 'gulp-rename' );

// Variables
var jsSRC = 'src/scripts/*.js',
    jsDEST = 'dist/scripts/';

var cssComponentsSRC = 'src/styles/components/*.scss',
    cssCommonSRC = 'src/styles/common.css',
    cssDEST = 'dist/styles/';

var imgSRC = 'src/images/*',
    imgDEST = 'dist/images/';

// Styles Function
function cssCommon() {
    return gulp.src(cssCommonSRC)
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(concat('common.min.css'))
        .pipe(gulp.dest(cssDEST));
}

function cssComponents() {
    return gulp.src(cssComponentsSRC)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(rename({
            prefix: "component-"
        }))
        .pipe(gulp.dest(cssDEST));
}

// Javascript Function
function javascript() {
    return gulp.src(jsSRC)
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(lineec())
        .pipe(gulp.dest(jsDEST));
}

// Images Function
function imgmin() {
    return gulp.src(imgSRC)
        .pipe(changed(imgDEST))
        .pipe( imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.mozjpeg({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe( gulp.dest(imgDEST));
}

var styles = gulp.series(cssCommon, cssComponents);

// Watch Function
function watch() {
  gulp.watch(['src/styles/**/*.scss', 'src/styles/*.css'], styles);
  gulp.watch(jsSRC, javascript);
  gulp.watch(imgSRC, imgmin);
}

var build = gulp.parallel(watch);
gulp.task('default', build);
gulp.task('javascript', javascript);
gulp.task('img', imgmin);
gulp.task('styles', styles);
