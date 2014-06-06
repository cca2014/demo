#!/bin/bash

echo "<h2>GIT Log</h2>"
echo "<pre>"
git log --pretty=format:"%h - %an, %ar : %s"
echo "</pre>"
