#!/bin/bash

echo "<h2>GIT Diff</h2>"
echo "<pre>"
git diff "$1...$2 "
echo "</pre>"