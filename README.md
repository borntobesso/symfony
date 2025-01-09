## Virtual Box

Gentoo Linux

Gentoo uses portage as package manager.

### update package repositories
`sudo emerge --sync`
### install php 8.2.24
`sudo emerge php`
### install guest editions for shared folder
`sudo emerge --ask app-emulation/virtualbox-guest-additions`

## ex00

curl doesn't automatically follow redirects by default.
By using bit.ly URL, curl will return an HTTP `301 (Permanent Redirect)` or `302 (Temporary Redirect)`

To follow the redirect and see the destination content, use `-L` flag.

### curl
option `-I, --head` : fetch headers only
option `-s`

### cut
option `-d, --delimiter=DELIM` : use DELIM instead of TAB for field delimiter
option `-f, --fields=LIST` : select only these fields

### bash script
`$#` : this variable holds the number of arguments passed to the script