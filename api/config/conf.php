<?php
// --Request Config
    // -request id
    define('REQ_ID', 'offline_rimowa_2023');

    // -request file spec
    define('REQ_FILE_INFO', [
        'type' => ['img', 'video'],
    ]);

    var_dump(REQ_FILE_INFO);
    
    // -request file(s) key
    define('REQ_FILE_KEYS', [
        'img',
        'video',
        // 'img1',
        // 'img2',
        // 'video1',
        // 'video2',
    ]);
    

// --Upload Config
    // -uploaded file spec
    
    define('FILE_INFO', [
        'dir' => '../uploads/',
        'type' => ['img', 'video'],
        'ext' => ['png', 'mp4'],
    ]);
    var_dump(FILE_INFO);

    // -uploaded file(s) 
    define('FILE_KEYS',
        [
            'img',
            'video',
            // 'img1',
            // 'img2',
            // 'video1',
            // 'video2',
        ]
    );


// --Database Config
    // -db require
    define('DB_REQUIRE', false);

    // -db table
    define('DB_TABLE', '`offline_rimowa_2023`');

    // -db uploaded file col name
    define('DB_FILE_COL', 'uid');



// --Response Config
    // -res link
    // define('RES_LINK', 'https://videinsightevent.com/');
    define('RES_LINK', 'http://localhost/jm/ja-malone/');

// --Sharing Page Config
    define('SHARE_INFO',
        [
            'html_title' => '', // tag - title
            'share_title' => '', // meta tage - og:title
            'share_description' => '', // meta tage - og:description
            'download_file_name' => 'Download'.'.'.FILE_INFO['ext'],
        ]    
    );


// // --Email Config
//     define('EMAIL_INFO', 
//         [
//             'username' => 'events@videinsightevent.com',
//             'password' => 'Hello123Hello123',
//             'sender_name' => 'videinsight',
//             'sender_email' => 'events@videinsightevent.com',
//             'smtp_host' => 'smtp.gmail.com',
//             'smtp_port' => 465,
//         ]
//     );

// // --Sms Config
//     define('SMS_INFO', 
//         [
//             'sender_id' => '+8526226495103709', // SMS sender number e.g +8526226495103709
//             'sender_title' => 'videinsightevent',  // Campaign name, will not show in SMS, for correlation id use, characters only
//         ]
//     );
