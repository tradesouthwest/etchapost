# etch-a-post
A simple fast web based message board
# EtchAPost

PHP one file for client side posting of text to a single page. The intention of this project is to allow a simple fast web based message board that someone can post to and that post will be publicly viewable on the Internet via browser.

[Demo at](http://truelisting.me/etch/etchapost.php)

## Installation

1. Upload file to a good PHP server `No database required`
2. If ftp method, change `pass_code` before uploading
3. Change default passcode to your private passcode
4. Passcode string located on first few lines, top of file.
5. Please use a server with PHP ver 5.3 or higher to use Tidy html parser

## Usage

- Put the file in its own directory if possible for best usage.
- You may rename the file if used aside another file of same name.
- The program will create the text file so there is nothing you need to create.
- No database used. This file uses the `PHP fwrite` parser to write to a text file.
- The data is erased from the page every time you submit a new post. Hence the name
Etch A Post (reference the mechanical drawing toy made popular by Ohio Art. 
https://en.wikipedia.org/wiki/Etch_A_Sketch).

## Features

* Responsive HTML5 layout
* Form validation via HTML5 attributes and HTML parser for sanity. 
* Random "hash" added to Session to allow multiple browser inputs.
* Intuitive, self explanatory usage
* One file does it all.
* Mandatory log in to post to page.
* No database required.
* Select between four colors for text.
* Some styles for elements
* Converts line returns on output based on input line returns
* Four fields: Tile, Intro-text, Subject, Message.
* Turn on or off timestamp

## History

Originally, posting of announcements was utilized on a company admin portal which was a 
very basic way to let other admins know what the latest status was for the network.
Extrapolating on that idea I decided to make it an incredibly simplistic method comprised
of a single file and basic security for user and server.

## Credits

* Author: Larry Judd Oliver @tradesouthwest | <tradesouthwest at gmail.com>
* Html parser by Eksith Rodrigo <reksith at gmail.com> | @license http://opensource.org/licenses/ISC ISC License

## License

* see license.md
