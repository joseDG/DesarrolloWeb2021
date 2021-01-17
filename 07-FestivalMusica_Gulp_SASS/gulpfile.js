const { series, src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const notify = require('gulp-notify');
const webp = require('gulp-webp');
const concat = require('gulp-concat');

//Utilidades CSS
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');

//Utilidades JS
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');

//Creacion de rutas
const paths = {
    imagenes: 'src/img/**/*',
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js'
}

//Funcion que copila SASS
function css() { 
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe( sass({
            //sirve para formatear codigo de salida
            outputStyle: 'expanded'
        }))
        //sirve para convertir el codigo | y el nano es para optimizar el codigo
        .pipe( postcss( [ autoprefixer(), cssnano() ] ))
        .pipe( sourcemaps.write('.'))
        .pipe( dest('./build/css') )
}

function minificarcss(){
    return src(paths.scss)
        .pipe( sass({
            //sirve para hacer un compress del codigo
            outputStyle: 'compressed'
        }))
        .pipe( dest('./build/css') )
}

//añadiendo el archivo js
function javascript(){
    return src(paths.js)
        .pipe(sourcemaps.init())
        .pipe( concat('bundle.js') )
        .pipe( terser() )
        .pipe(sourcemaps.write('.'))
        .pipe( rename({ suffix: '.min'}))
        .pipe( dest('./build/js') )
}

//minifica las imagenes. 
function imagenes(){
    return src(paths.imagenes)
        .pipe( imagemin() )
        .pipe( dest( './build/img' ))
        .pipe( notify({ message: 'Imagen minificada'}) );
}

function versionWebp(){
    return src(paths.imagenes)
        .pipe( webp() )
        .pipe( dest('./build/img'))
        .pipe( notify({message: 'Version webP lista'}));
}

function watchArchivos() {
    watch( paths.scss, css); // * = La carpeta actual - ** = Todos los archivos cone s extencion
    watch( paths.js, javascript);
}

exports.css = css;
exports.minificarcss = minificarcss;
exports.imagenes = imagenes;
exports.watchArchivos = watchArchivos;

//me permite llevar todas estas tareas al mismo tiempo solo utilziando gulp 
exports.default = series( css, javascript, imagenes, versionWebp, watchArchivos );

