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

		concat: {
			css: {
  			src: [
          'scss/reset.scss',
          'scss/vars.scss',
          'scss/fonts.scss',
          'scss/utility.scss',
          'scss/nontext.scss',
          'scss/theme.scss',
          'scss/wp-plugins.scss',
          'scss/about.scss',
          'scss/wireframe.scss',
					'scss/print.scss'
				],
				dest: 'scss/corry2016.concat.scss'
			},
			js : {
				src : [
					'js/jquery-2.1.1.min.js',
					'js/modernizr.custom.js',
          'js/custom.js'
				],
				dest : 'js/corry2016.concat.js'
			}
		},

    sass: {
      dist: {
        options: {
          style: 'expanded',
        },
        files: {
          'css/corry2016.concat.css' : 'scss/corry2016.concat.scss'
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
        dest: '../style.css'
      }
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
  grunt.registerTask('default', ['devUpdate', 'concat', 'sass', 'autoprefixer', 'cssmin', 'uglify']);

};