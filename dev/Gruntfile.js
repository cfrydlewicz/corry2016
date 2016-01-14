module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

    devUpdate: {
      main: {
        options: {
          updateType: 'report', // just report outdated packages
          reportUpdated: false, // don't report up-to-date packages
        }
      }
    },

    sass: {
      dist: {
        options: {
          style: 'expanded',
        },
        files: {
          'css/corry2016.concat.css' : 'scss/corry2016.manifest.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      your_target: {
        src: 'css/corry2016.concat.css'
      },
    },

    cssmin: {
      minify: {
        src: 'css/corry2016.concat.css',
        dest: 'css/corry2016.min.css'
      }
    },

    concat: {
      css: {
        // append WordPress Theme info
        src: [
          'corry2016.wpinfo.css',
          'css/corry2016.min.css'
        ],
        dest: '../style.css'
      },
      js : {
        src : [
          'js/modernizr.custom.js',
          'js/custom.js'
        ],
        dest : 'js/corry2016.concat.js'
      }
    },

    jshint: {
      all: ['Gruntfile.js', 'js/custom.js']
    },

    uglify: {
      options: {
        mangle: false,
//        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          '../scripts.js': ['js/corry2016.concat.js']
        }
      }
    },

		watch: {
			files: [
        'Gruntfile.js',
        'package.json',
        'scss/*.scss',
        'js/*.js'
      ],
      tasks: ['default']
    }

	});

  // Default task(s).
  grunt.registerTask('default', ['devUpdate', 'concat', 'sass', 'autoprefixer', 'cssmin', 'jshint', 'uglify']);

};