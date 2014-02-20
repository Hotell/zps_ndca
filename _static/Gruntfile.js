module.exports = function (grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);


    var cfg = {
        pkg: grunt.file.readJSON('package.json'),
        src: {
            less: 'css/less'
        },
        watch: {
            styles: {
                files: ['<%= src.less %>/*.less'],
                tasks: ['newer:less:dev', 'autoprefixer']
            },
            gruntfile: {
                files: ['Gruntfile.js']
            },
            livereload: {
                options: {
                    livereload: '<%= connect.options.livereload %>'
                },
                files: [
                    './*.html',
                    '.tmp/styles/{,*/}*.css',
                    './images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}',
                    './js/*.js'
                ]
            }
        },
        // The actual grunt server settings
        connect: {
            options: {
                port: 9000,
                // Change this to '0.0.0.0' to access the server from outside.
                hostname: 'localhost',
                livereload: 35729
            },
            livereload: {
                options: {
                    open: true,
                    base: [
                        '.tmp',
                        './'
                    ]
                }
            },
            dist: {
                options: {
                }
            }
        },
        less: {
            dev: {
                options: {
                    paths: ["css/less"]
                },
                files: {
                    "css/style.css": "<%= src.less %>/style.less"
                }
            },
            dist: {
                options: {
                    paths: ["assets/css"],
                    cleancss: true
                },
                files: {
                    "path/to/result.css": "path/to/source.less"
                }
            }
        },
        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 2 versions']
            },
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '.tmp/styles/',
                        src: '{,*/}*.css',
                        dest: '.tmp/styles/'
                    }
                ]
            }
        }
    };

    grunt.initConfig(cfg);

    grunt.registerTask('serve', [
        'less:dev',
        'autoprefixer',
        'connect:livereload',
        'watch'
    ]);
    grunt.registerTask('default', []);

};