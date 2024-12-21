<?php
include 'DB_RUN.php';
$key = bin2hex('2d3408431f33bcf5e16e637753a02483d498a2b55a0821402260c237c165cb67');

$cipher = "aes-256-cbc";
$ivLength = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivLength);

function encrypt($plaintext): string
{
    global $key;
    global $cipher;
    global $iv;

    $encryptedText = openssl_encrypt($plaintext, $cipher, $key, 0, $iv);
    $encryptedTextWithIv = base64_encode($iv . $encryptedText);
    return $encryptedTextWithIv;
}


function decrypt($encryptedTextWithIv): string
{
    global $key;
    global $cipher;
    global $iv;
    global $ivLength;

    $decodedText = base64_decode($encryptedTextWithIv);
    $ivFromDecodedText = substr($decodedText, 0, $ivLength);
    $encryptedMessage = substr($decodedText, $ivLength);
    $decryptedText = openssl_decrypt($encryptedMessage, $cipher, $key, 0, $ivFromDecodedText);

    return $decryptedText;
}
?>



<!-- <?php echo decrypt('pyQvMae0vEAR3qbvikKLmzJKc2tSNHdoWHQrVDhuMzkvLzFYSFE9PQ==')?> -->