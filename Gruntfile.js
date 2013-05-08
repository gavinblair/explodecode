module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        }
      },
      all: ['main.js']
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/*.js',
        dest: 'js/<%= pkg.name %>.min.js'
      }
    },
    cssmin: {
      add_banner: {
        options: {
          banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
        },
        files: {
          'css/<%= pkg.name %>.min.css': ['css/*.css']
        }
      }
    },
    imagemin: {
      dist: {
        options: {
          optimizationLevel: 3
        },
        files: {
          'img/logo-med.png': 'img/logo-med.png',
          'img/logo.png': 'img/logo.png'
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['jshint', 'uglify', 'imagemin', 'cssmin']);
  grunt.registerTask('build', ['jshint', 'uglify', 'imagemin', 'cssmin']);

};