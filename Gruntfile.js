module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            base: {
                src: 'resources/assets/js/base.js',
                dest: 'public/js/base.min.js'
            },
        },

        sass: {
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'public/css/app.css' : 'resources/assets/sass/app.scss'
                }
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'public/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'public/css',
                    ext: '.min.css'
                }]
            }
        },

        copy: {
            files: {
                cwd: 'resources/assets/img',
                src: '**/*',
                dest: 'public/img',
                expand: true
            }
        }

    })

    grunt.loadNpmTasks('grunt-contrib-uglify')
    grunt.loadNpmTasks('grunt-contrib-sass')
    grunt.loadNpmTasks('grunt-contrib-cssmin')
    grunt.loadNpmTasks('grunt-contrib-copy')

    grunt.registerTask('default', ['uglify', 'sass', 'cssmin', 'copy'])

};
