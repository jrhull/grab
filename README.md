Plugin-Grab
=============

This Statamic plugin makes it easier for you to quickly grab different sections from a string variable (usually the {content}). Right now it only lets you grab the first paragraph. Later versions will let you choose which block of content you want.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `grab` (Github timestamps the download folder).
3. Enjoy.

## Usage

Grab the first paragraph of the 'content' variable

    {{ grab:firstPara string='{content}' tags='yes' }}

## Parameters

- `string`: the string to be parsed
- `tags`: set to yes/no depending on if you want to include the HTML tags (Default is no) 
