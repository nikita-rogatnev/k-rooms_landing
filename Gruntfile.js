"use strict";

module.exports = function (grunt) {
	grunt.loadNpmTasks("grunt-contrib-less");
	grunt.loadNpmTasks("grunt-postcss");
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.initConfig({

		less: {
			style: {
				files: {
					"./css/style.css": "./less/style.less"
				}
			}
		},

		postcss: {
			style: {
				options: {
					processors: [require("autoprefixer")({
							browsers: ["last 1 version", "last 2 Chrome versions", "last 2 Firefox versions", "last 2 Opera versions", "last 2 Edge versions"]
						})]
				},
				src: "./css/*.css"
			}
		},

		cssmin: {
			style: {
				src: "./css/style.css",
				dest: "./css/style.min.css"
			}
		}

	});

	grunt.registerTask("default", ["less", "postcss", "cssmin"]);

};
