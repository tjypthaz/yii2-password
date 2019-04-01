<?php

/**
 * Message translations for \kartik\password\StrengthValidator.
 *
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
return [
    '{attribute} should contain at least {n, plural, one{one character} other{# characters}} ({found} found)!' =>
        '{attribute} harus mengandung setidaknya {n, plural, one{satu karakter} other{# karakter}} ({found} ditemukan)!',
    '{attribute} should contain at most {n, plural, one{one character} other{# characters}} ({found} found)!' =>
        '{attribute} harus mengandung paling banyak {n, plural, one{satu karakter} other{# karakter}} ({found} ditemukan)!',
    '{attribute} should contain exactly {n, plural, one{one character} other{# characters}} ({found} found)!' =>
        '{attribute} harus mengandung persis {n, plural, one{satu karakter} other{# karakter}} ({found} ditemukan)!',
    '{attribute} cannot contain any spaces' => '{attribute} tidak dapat berisi spasi',
    '{attribute} cannot contain the username' => '{attribute} tidak dapat berisi nama pengguna',
    '{attribute} cannot contain an email address' => '{attribute} tidak dapat berisi email',
    '{attribute} must be a string' => '{attribute} harus berupa string',
    '{attribute} should contain at least {n, plural, one{one lower case character} other{# lower case characters}} ({found} found)!' =>
        '{attribute} harus mengandung setidaknya {n, plural, one{satu huruf kecil} other{# huruf kecil}} ({found} ditemukan)!',
    '{attribute} should contain at least {n, plural, one{one upper case character} other{# upper case characters}} ({found} found)!' =>
        '{attribute} harus mengandung setidaknya {n, plural, one{satu huruf besar atau kapital} other{# huruf besar atau kapital}} ({found} ditemukan)!',
    '{attribute} should contain at least {n, plural, one{one numeric / digit character} other{# numeric / digit characters}} ({found} found)!' =>
            '{attribute} harus mengandung setidaknya {n, plural, one{satu angka} other{# angka}} ({found} ditemukan)!',
    '{attribute} should contain at least {n, plural, one{one special character} other{# special characters}} ({found} found)!' =>
        '{attribute} harus mengandung setidaknya {n, plural, one{satu spesial karakter} other{# spesial karakter}} ({found} ditemukan)!'
];
