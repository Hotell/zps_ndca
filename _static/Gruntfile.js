module.exports = function (grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    var watchCfg = {
        less: {
            files: ['css/less/*.less'],
            tasks: ['less:dev']
        }
    };

    var cfg = {
        pkg: grunt.file.readJSON('package.json'),
        watch: watchCfg,
        less: {
            dev: {
                options: {
                    paths: ["css/less"]
                },
                files: {
                    "css/style.css": "css/less/style.less"
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
        }
    };

    grunt.initConfig(cfg);
    grunt.registerTask('default', []);

};