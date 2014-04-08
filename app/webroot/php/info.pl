#! /usr/bin/perl
# 
print "Content-type: text/html\r\n\r\n";
# print "Hey mais je suis pas du PHP moi !<br /><br />";
# 
# printf "Perl version %vd\n", $^V;  # Perl's version

use HTML::Perlinfo;
perlinfo();
