module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    clean: ["js/<%= pkg.name %>.min.js", "css/<%= pkg.name %>.min.css"],
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
        files: {
          'js/<%= pkg.name %>.min.js': ['js/*.js']
        }
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
  // grunt.file.delete('js/<%= pkg.name %>.min.js', []);
  // grunt.file.delete('css/<%= pkg.name %>.min.css', []);
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-clean');

  // Default task(s).
  grunt.registerTask('default', ['clean', 'jshint', 'uglify', 'imagemin', 'cssmin']);
  grunt.registerTask('build', ['clean', 'jshint', 'uglify', 'imagemin', 'cssmin']);

};