# Clipboardme
## Grab/Inject Clipboard Content
### coded by cyber kallan
# Instagrame :- imarjunarz
Browsers are implementing a new JavaScript API for asynchronous clipboard access to integrate copy and paste into web applications. It is a replacement for the synchronous execCommand-based copy & paste. Async Clipboard requests doesn't block the page while waiting the process, it's a improvement over sync requests as well as simplifying events and aligning them with the Drag & Drop API.

Clipboardme is a pentester tool that can read and write content to the clipboard by just opening a link, using async clipboard API.

![cb](https://user-images.githubusercontent.com/56509491/66749105-95fedb00-eea6-11e9-938d-c97827000d23.JPG)

## How does Async Clipboard API work?

### Copy: Writing Text to the Clipboard

```
cd Clipboardme

chmod +x *

./Clipboardme.sh


```

## constribution by arjun arz

   ![cb](https://user-images.githubusercontent.com/56509491/66750279-b2504700-eea9-11e9-9f9e-100ddc35504c.jpg)
Text can be silently and automatically copied to the clipboard by calling writeText(), without requesting permission. Example:

```
<script>
navigator.clipboard.writeText('Malicious command to be copied');
</script>
```

Simple, huh? How dangerous it can be if the user is convinced to run the clipboard content?
A windows reverse shell can be made if a user type the following shortcurt sequence after visiting the malicious website generated by clipboardme: windows+x,  p, ctrl + v. No need to hit enter, just persuade the target to run that "shortcut" for an attacker take control of a windows system. This scenario can occur when the target is supposed to execute clipboard contents.

### Paste: Reading Text from the Clipboard

Text can be read (requires permission) from the clipboard by calling readText(). Example:

```
<script>
navigator.clipboard.readText().then(clipText =>  document.write(clipText));
</script>
```
Users routinely copy sensitive information like passwords and personal details to the clipboard,  which could then be read by any page. Clipboardme tool can create a HTTPS malicious page to grab that content.

To help prevent abuse, clipboard access is only allowed when a page is the active tab and over secured domains (https). Pages in active tabs can write to the clipboard without requesting permission, but reading from the clipboard always requires permission.

### Browser compatibility:
Chrome 66,
Opera 53,
Chrome for Android,
Opera for Android
