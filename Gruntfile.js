module.exports = function(grunt){
    grunt.initConfig({
        pkg:grunt.file.readJSON("package.json"),
        slug: 'kawahagi',
        dir: {
            theme: 'kawahagi_love',
            sass: '_sass',
            css: '_css',
            js: '_js',
        },

        compass: {
            dist: {
                options: {
                    config: 'config.rb'
                }
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: '<%= dir.css %>',
                    src: ['*.css', '!*.min.css'],
                    dest: '<%= dir.theme %>/css',
                    ext: '.min.css'
                }]
            }
        },

        copy: {
            main: {
                expand: true,
                cwd: 'dev',
                src: ['css/**', 'js/**', '**.html', '**.php', 'images/**'],
                dest: 'release/'
            }
        },

        connect: {
            server: {
                options: {
                    //livereload: true,
                    hostname: '*',
                    port: 8001,
                    base: 'dev'
                }
            }
        },

        uglify: {
            js: {
                files: {
                    '<%= dir.theme %>/js/<%= slug %>.min.js': ['<%= dir.js %>/<%= slug %>.js']
                }
            }
        },

        watch: {
            compass:{
                tasks: ['compass'],
                files:['<%= dir.sass %>/<%= slug %>.scss']
            },
            cssmin:{
                tasks: ['cssmin'],
                files:['<%= dir.css %>/<%= slug %>.css']
            },
            uglify:{
                tasks: ['uglify'],
                files:['<%= dir.js %>/<%= slug %>.js']
            },
        }

    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('build', ['compass', 'cssmin', 'copy']);
    grunt.registerTask('default', ['compass', 'cssmin']);
}
