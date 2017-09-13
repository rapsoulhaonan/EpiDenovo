# EpiDenovo

[![GitHub release](https://img.shields.io/badge/EpiDenovo-release%20V1.1-brightgreen.svg)](https://github.com/rapsoulhaonan/EpiDenovo/releases)

# More

[![GitHub release](https://img.shields.io/badge/EpiDenovo-JBrowse%20Searching%20Engine-blue.svg)](http://61.148.58.210:8080/EpiDenovo/jbrowse.php)

# What is EpiDenovo?
<dl>
<dd>
EpiDenovo is a database for annotation of the associations between embryonic epigenomes and DNMs in developmental disorders, including several neuropsychiatric disorders and congenital heart disease. EpiDenovo provides an easy-to-use web interface allowing users rapidly to find the epigenetic signatures of DNMs and the expression patterns of the genes that they regulate during embryonic development. In summary, EpiDenovo is a useful resource for selecting candidate genes for further functional studies in embryonic development of human and mouse, and for investigating DNMs causing or underlying developmental disorders of human.
</dd>
</dl>

# 

![graph](images/demo/slider/workflow1.png)


# About JBrowse

[![Build status](https://travis-ci.org/GMOD/jbrowse.svg?branch=master)](https://travis-ci.org/GMOD/jbrowse)
[![JBrowse Homepage](https://img.shields.io/badge/JBrowse-Homepage-green.svg)](https://jbrowse.org/)

# Installing JBrowse

Users of JBrowse should get it from the main JBrowse site at http://jbrowse.org/install.

Unless you intend to work on the JBrowse code itself, or develop a JBrowse plugin, stop reading now and go to http://jbrowse.org/install.

# About running from a `git` clone

Only developers should run JBrowse from a git repository.
For one reason, the development version has a much, much slower initial load
time than the built release zipfiles.  Also, since the master branch code is ''in development'' for the next JBrowse release, it often (usually?) contains bad bugs, much more so than the official releases put up on JBrowse.org.

# Setting up a development environment

Make sure you have a web server installed on your development machine.  Any web server will do.

    cd /my/dev/webserver/root;
    git clone --recursive git@github.com:YOURACCOUNT/jbrowse.git
    cd jbrowse
    ./setup.sh
    # and now point your browser to
    #   http://localhost/jbrowse/index.html?data=sample_data/json/volvox
    # and you should see the volvox example data


Then you can simply edit files and your changes will be available in the browser (i.e. no build step is required)

You can also optionally run build steps to create the minimized codebase

    make -f build/Makefile release

To build the Electron app, run the following

    npm install -g electron-packager
    make -f build/Makefile release-electron-all

To run the Electron app in debug mode run the following

    npm install
    npm start

# Running the developer test suites

## Server-side Perl

Tests for the server-side Perl code.  You must have the JBrowse Perl
module prerequisites installed for them to work.  Run with:

    prove -Isrc/perl5 -lr tests

## Client-side Unit Tests

Point your browser at `http://my.dev.machine/jbrowse/tests/js_tests/index.html`

You can also run them from phantomJS using

    phantomjs tests/js_tests/run-jasmine.js http://my.dev.machine/jbrowse/tests/js_tests/index.html

## Client-side Integration Tests

Integration tests for the client-side app.  You need to have Python
eggs for `selenium` and `nose` installed.  Run the tests with:

    JBROWSE_URL='http://localhost/jbrowse/index.html' nosetests


# Cutting a JBrowse release

0. Create a directory and clone the repo: git clone --recursive https://github.com/GMOD/jbrowse.git  Then for 1.12.1, git checkout tags/1.12.1-release (because it lives in a branch that is not master) 

1. Edit the JBrowse `package.json` file and change 'version' to the version you are releasing.  *Don't commit this change to the repository, it should stay as `dev` in git so that it shows up in analytics as a development version.*

2. Build the release packages: `make -f build/Makefile release`.  The files produced during the build should not be committed to the repository either. There is also `make -f build/Makefile release-notest` for releases that don't need perl tests to be run. NOTE: you may need to use the command `ulimit -n 1000` to avoid "spawn EMFILE" build errors.

3. Make a tag in the repository for the release, named, e.g. `1.6.3-release`.

4. `scp` the release .zip files (min and full) to jbrowse.org.

5. Add them to the Wordpress Downloads list so that we can track how
many times they are downloaded.

6. Write a blog post announcing the release.  The `release-notes.html`
file made during the build might be useful for this.

7. Update the "Install" page on the site to point to the newest release.

8. Update the latest-release code checkout on the site, which the "Latest Release" demo on the jbrowse.org points to, to be an unzipped-and-set-up copy of the latest release.

9. Write an email announcing the release, sending to gmod-ajax,
jbrowse-dev.  If it is a major release, add gmod-announce and make a GMOD news item.

As you can tell, this process could really use some more streamlining and automation.

# EpiDenovo Lisence

[![MIT License](https://img.shields.io/badge/MIT-License-red.svg)](https://github.com/rapsoulhaonan/EpiDenovo/blob/master/LICENSE.md)

MIT License

Copyright (c) 2017 Mao, Fengbiao; Liu, Qi; Zhao, Xiaolu; Yang, Haonan; Guo, Sen; Xiao, Luoyuan; Li, Xianfeng; Teng, Huajing; Sun, Zhongsheng; Dou, Yali

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
