'use strict';
module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Show grunt task time
    require('time-grunt')(grunt);

    // Configurable paths for the app
    var appConfig = {
        app: 'app',
        dist: 'dist',
        index: 'app/*.html'
    };

    // Grunt configuration
    grunt.initConfig({

        // Project settings
        espire: appConfig,

        // Compile scss to css
        sass: {
            options: {
                sourceMap: false,
                noLineComments: true,
                outputStyle: 'compact'
            },
            dist: {
                files: {
                    "app/assets/css/app.css": "app/assets/scss/app.scss"
                }
            },
        },
        // Watch for changes in live edit
        watch: {
            
            styles: {
                files: ['app/assets/scss/**/*.{scss,sass}']
            },
            sass: {
                files: ['app/assets/scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            bower: {
                files: ['bower.json'],
                tasks: ['wiredep']
            }
        },
        wiredep : {
            dev : {
                directory : '../bower_components',
                src : [ '<%= espire.index %>' ]
            }
        },
 
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: [{
                    src: 'assets/js/**/{,*/}*.js',
                    expand: true
                }]
            }
        },
        // Clean dist folder
        clean: {
            dist: {
                files: [{
                    dot: true,
                    src: [
                        '.tmp',
                        '<%= espire.dist %>/{,*/}*',
                        '!<%= espire.dist %>/.git*'
                    ]
                }]
            },
            server: '.tmp'
        },
        // Copies remaining files to places other tasks can use
        copy: {
            dist: {
                files: [
                    {
                        expand: true,
                        dot: true,
                        cwd: '<%= espire.app %>',
                        dest: '<%= espire.dist %>',
                        src: [
                            '*.{ico,png,jpg,jpeg,txt}',
                            '.htaccess',
                            '*.html',
                            'assets/fonts/*.*',
                            'assets/css/**/{,*/}*.css',
                            'assets/js/**/{,*/}*.js',
                            'assets/images/**/{,*/}'
                        ]
                    }
                ]
            },
            styles: {
                expand: true,
                cwd: '<%= espire.app %>/styles',
                dest: '.tmp/styles/',
                src: '{,*/}*.css'
            }
        },
        // Renames files for browser caching purposes
        filerev: {
            dist: {
                src: [
                    '<%= espire.dist %>/assets/js/{,*/}*.js',
                    '<%= espire.dist %>/assets/css/{,*/}*.css',
                    '<%= espire.dist %>/assets/fonts/*'
                ]
            }
        },
        htmlmin: {
            dist: {
                options: {
                    collapseWhitespace: true,
                    conservativeCollapse: true,
                    collapseBooleanAttributes: true,
                    removeCommentsFromCDATA: true,
                    removeOptionalTags: true
                },
                files: [{
                    expand: true,
                    cwd: '<%= espire.dist %>',
                    src: ['*.html', 'views/{,*/}*.html'],
                    dest: '<%= espire.dist %>'
                }]
            }
        },
        useminPrepare: {
            html: 'app/*.html',
            options: {
                dest: 'dist'
            }
        },
        usemin: {
            html: ['dist/*.html']
        }
    });

    
    // Run build version of app
    grunt.registerTask('server', [
        'build',
        'connect:dist:keepalive'
    ]);

    // Build version for production
    grunt.registerTask('build', [
        'clean:dist',
        'sass',
        'useminPrepare',
        'concat',
        'copy:dist',
        'uglify',
      // 'filerev',
        'usemin'
     //  'htmlmin'
    ]);
};
