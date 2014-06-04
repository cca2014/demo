#!/bin/bash

echo "<h2>System uptime</h2>"
echo "<pre>"
uptime
echo "</pre>"

echo "<h2>Filesystem space</h2>"
echo "<pre>"
df
echo "</pre>"

echo "<h2>Home directory space by user</h2>"
echo "<pre>"
echo "Bytes Directory"
du -s ~/* | sort -nr
echo "</pre>"

