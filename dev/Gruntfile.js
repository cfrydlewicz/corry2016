module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			css: {
  			src: [
					'scss/reset.scss',
					'scss/shortcuts.scss',
					'scss/theme.scss',
					'scss/subthemes.scss',
					'scss/print.scss'
				],
				dest: 'scss/style.scss'
			},
			js : {
				src : [
					'js/jquery-2.1.1.min.js',
					'js/modernizr.custom.js',
          'js/custom.js'
				],
				dest : 'js/corry2015.concat.js'
			}
		},

    compass: {
      dist: {
        options: {
          config: '../config.rb',
          sassDir: 'scss',
          cssDir: 'css'
        }
      }
    },

    uglify: {
      options: {
        mangle: false,
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          '../scripts.js': ['js/corry2015.concat.js']
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      your_target: {
        src: 'css/style.css'
      },
    },

    cssmin: {
      minify: {
        src: 'css/style.css',
        dest: '../style.css'
      }
    },

		watch: {
			files: [
        'Gruntfile.js',
        'package.json',
        'scss/print.scss',
        'scss/reset.scss',
        'scss/shortcuts.scss',
        'scss/subtheme.scss',
        'scss/theme.scss',
        'js/custom.js'
      ],
      tasks: ['default']
    }

	});

	// TASKS
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask( 'default', [ 'concat', 'uglify', 'compass', 'autoprefixer', 'cssmin' ] );
	grunt.registerTask( 'cssonly', [ 'concat:css', 'compass', 'autoprefixer', 'cssmin' ] );
	grunt.registerTask( 'jsonly', [ 'concat:js', 'uglify' ] );

};