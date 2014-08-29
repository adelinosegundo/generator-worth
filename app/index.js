'use strict';
var util = require('util');
var path = require('path');
var yeoman = require('yeoman-generator');
var yosay = require('yosay');

var WorthGenerator = yeoman.generators.Base.extend({
  initializing: function () {
    this.pkg = require('../package.json');
  },
  prompting: function () {
    var done = this.async();

    var prompts = [{
      name: 'themeName',
      message: 'What is your theme name ?'
    }];

    this.prompt(prompts, function (props) {
      this.themeName = props.themeName;

      done();
    }.bind(this));
  },

  writing: {
    app: function () {
      this.directory('theme', this.themeName);
    },
    projectfiles: function () {
      this.src.copy('editorconfig', this.themeName+'/.editorconfig');
      this.src.copy('gitignore', this.themeName+'/.gitignore');
      this.src.copy('bowerrc', this.themeName+'/.bowerrc');
    }
  },
});

module.exports = WorthGenerator;
