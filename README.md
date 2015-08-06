# conversejs-prebind-php
Converse.js jabber/xmpp web-client configured for ___single session support___ using prebind technique for __PHP__ server-side language.

## Purpose in simple words:

I used [xmpp-prebind-php](https://github.com/candy-chat/xmpp-prebind-php) library to implement Single Session Support for [converse.js](http://conversejs.org).
With the term "Single Session Support" we mean that we can enable users ___already authenticated___ in our website, to be ___also automatically___ be logged in to chat.
Prebind technique is used in order to keep the connection peristent accross page load _aka_ page refresh.

## Usage:

Download zip file or clone the repo into your web server public directory and modify [config.php](/conversejs-prebind-php/config.php), then open `index.php`.
In order to see the difference, open `index2.php` to another tab, login with your credentials and reload the page.

## What is prebinding?

Prebind refers to a technique whereby your web application sets up an authenticated BOSH session with a BOSH connection manager (which could be your XMPP server). Then later, in the browser, converse.js attaches to that session that was previously set up.

This reduces network traffic and also speeds up loading times for converse.js. Additionally, because prebinding works with tokens, it’s not necessary for the XMPP client to store users’ passwords).

## What is BOSH server?

A BOSH server acts as a bridge between HTTP, the protocol of the web, and XMPP, the instant messaging protocol. Converse.js can only communicate via HTTP, but we need to communicate with an XMPP server in order to chat. So the BOSH server acts as a middle man, translating our HTTP requests into XMPP stanzas and vice versa.

## Libraries used:
1. [xmpp prebind php](https://github.com/candy-chat/xmpp-prebind-php)
2. [converse.js](https://github.com/jcbrand/converse.js)

## Documentation:
[converse.js #single session support](https://conversejs.org/docs/html/setup.html#single-session-support)