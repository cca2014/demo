#!/bin/bash

echo "<h2>GIT Commit</h2>"
echo "<pre>"
git add -A 
git commit -a -m "'$*'"
echo "</pre>"