"use strict";

module.exports = function (grunt) {

	grunt.loadNpmTasks("grunt-contrib-less");
	grunt.loadNpmTasks("grunt-postcss");
	grunt.loadNpmTasks("grunt-cssnano");

	grunt.initConfig({

		less: {
			style: {
				files: {
					"./css/style.css": "./less/style.less"
				}
			}
		},

		postcss: {
			prefix: {
				options: {
					processors: [require("autoprefixer")({browsers: "last 2 versions"})]
				},
				src: "css/style.css",
				dest: "css/style.css"
			},
			minify: {
				options: {
					processors: [require("cssnano")()]
				},
				src: "css/style.css",
				dest: "css/style.min.css"
			}
		}

	});

	grunt.registerTask("default", ["less", "postcss"]);

};
