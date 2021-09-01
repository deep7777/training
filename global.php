<?php
echo "Globals";
echo "<pre>";
/*
print_r($_ENV);
Array
(
    [TERM_SESSION_ID] => w0t2p0:DADF850F-54D4-4BEE-A53D-2CEEABD8B82A
    [SSH_AUTH_SOCK] => /private/tmp/com.apple.launchd.yho8fYDg4y/Listeners
    [COLORFGBG] => 7;0
    [ITERM_PROFILE] => Default
    [XPC_FLAGS] => 0x0
    [PWD] => /Users/deepak/training
    [SHELL] => /bin/zsh
    [__CFBundleIdentifier] => com.googlecode.iterm2
    [SECURITYSESSIONID] => 186ab
    [LC_CTYPE] => UTF-8
    [TERM_PROGRAM_VERSION] => 3.2.7
    [TERM_PROGRAM] => iTerm.app
    [PATH] => /Users/deepak/flutterdev/flutter/bin:/usr/local/mysql/bin:/usr/local/opt/mysql@5.7/bin:/Users/deepak/.nvm/versions/node/v14.17.5/bin:/usr/local/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/share/dotnet:~/.dotnet/tools:/Library/Apple/usr/bin:/Library/Frameworks/Mono.framework/Versions/Current/Commands:/Users/deepak/.fig/bin
    [COLORTERM] => truecolor
    [COMMAND_MODE] => unix2003
    [TERM] => xterm-256color
    [HOME] => /Users/deepak
    [TMPDIR] => /var/folders/nk/83n48h6537lb8bl3dtmcfl_40000gn/T/
    [USER] => deepak
    [XPC_SERVICE_NAME] => 0
    [LOGNAME] => deepak
    [LaunchInstanceID] => 41EBB877-D966-4AC8-B26A-91BFB000ED86
    [__CF_USER_TEXT_ENCODING] => 0x1F5:0x0:0x0
    [ITERM_SESSION_ID] => w0t2p0:DADF850F-54D4-4BEE-A53D-2CEEABD8B82A
    [SHLVL] => 1
    [OLDPWD] => /Users/deepak
    [TTY] => /dev/ttys002
    [FIG_INTEGRATION_VERSION] => 2
    [FIG_ENV_VAR] => 1
    [NVM_DIR] => /Users/deepak/.nvm
    [NVM_CD_FLAGS] => -q
    [NVM_BIN] => /Users/deepak/.nvm/versions/node/v14.17.5/bin
    [_] => /usr/bin/php
)
*/
/*
print_r($_SERVER);
Array
(
    [DOCUMENT_ROOT] => /Users/deepak/training
    [REMOTE_ADDR] => ::1
    [REMOTE_PORT] => 59480
    [SERVER_SOFTWARE] => PHP 7.3.24-(to be removed in future macOS) Development Server
    [SERVER_PROTOCOL] => HTTP/1.1
    [SERVER_NAME] => localhost
    [SERVER_PORT] => 9000
    [REQUEST_URI] => /global.php
    [REQUEST_METHOD] => GET
    [SCRIPT_NAME] => /global.php
    [SCRIPT_FILENAME] => /Users/deepak/training/global.php
    [PHP_SELF] => /global.php
    [HTTP_HOST] => localhost:9000
    [HTTP_CONNECTION] => keep-alive
    [HTTP_SEC_CH_UA] => "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"
    [HTTP_SEC_CH_UA_MOBILE] => ?0
    [HTTP_DNT] => 1
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
    [HTTP_SEC_FETCH_SITE] => none
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.9
    [HTTP_COOKIE] => _ga=GA1.1.1110772096.1580414300; hubspotutk=585617afcca6edb5507cd7a096327825; __hssrc=1; Webstorm-1d1688ed=8903ac67-4e0d-4800-9a45-0dfc6e7ccfc7; io=d4DG9D0MznI_6qyDAAAF; Admin-Token=admin-token; __hstc=181257784.585617afcca6edb5507cd7a096327825.1588845581962.1613410009509.1613419756053.52; _ga_JGQ5KCNP6W=GS1.1.1614877559.144.0.1614878092.0; columns%2Fstudents_view.php={%22students-regno%22:true%2C%22students-name%22:true%2C%22students-course%22:true}; columns%2Fattendance_view.php={%22attendance-student%22:true%2C%22attendance-regno%22:true%2C%22attendance-week%22:true%2C%22attendance-date%22:true%2C%22attendance-unit%22:true%2C%22attendance-attended%22:true}; columns%2Fcourses_view.php={%22courses-name%22:true}; columns%2Funits_view.php={%22units-name%22:true}; Attendance_Management_System=5b175424acc30c301a5e52a40fd962b2; PHPSESSID=32295c1d387583945873a82b66e1f66c; _ga_QTZ9WZEQ0E=GS1.1.1623822227.3.1.1623822657.0
    [REQUEST_TIME_FLOAT] => 1630489449.2295
    [REQUEST_TIME] => 1630489449
    [argv] => Array
        (
        )

    [argc] => 0
)
*/


/*
print_r($GLOBALS);

Array
(
    [_GET] => Array
        (
            [id] => 10
        )

    [_POST] => Array
        (
        )

    [_COOKIE] => Array
        (
            [_ga] => GA1.1.1110772096.1580414300
            [hubspotutk] => 585617afcca6edb5507cd7a096327825
            [__hssrc] => 1
            [Webstorm-1d1688ed] => 8903ac67-4e0d-4800-9a45-0dfc6e7ccfc7
            [io] => d4DG9D0MznI_6qyDAAAF
            [Admin-Token] => admin-token
            [__hstc] => 181257784.585617afcca6edb5507cd7a096327825.1588845581962.1613410009509.1613419756053.52
            [_ga_JGQ5KCNP6W] => GS1.1.1614877559.144.0.1614878092.0
            [columns%2Fstudents_view_php] => {"students-regno":true,"students-name":true,"students-course":true}
            [columns%2Fattendance_view_php] => {"attendance-student":true,"attendance-regno":true,"attendance-week":true,"attendance-date":true,"attendance-unit":true,"attendance-attended":true}
            [columns%2Fcourses_view_php] => {"courses-name":true}
            [columns%2Funits_view_php] => {"units-name":true}
            [Attendance_Management_System] => 5b175424acc30c301a5e52a40fd962b2
            [PHPSESSID] => 32295c1d387583945873a82b66e1f66c
            [_ga_QTZ9WZEQ0E] => GS1.1.1623822227.3.1.1623822657.0
        )

    [_FILES] => Array
        (
        )

    [GLOBALS] => Array
 *RECURSION*
)
*/
echo "</pre>";
?>