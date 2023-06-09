1. Using PHP Copy to move files from server to server.
<?php
/**
 * Transfer Files Server to Server using PHP Copy
 * @link https://shellcreeper.com/?p=1249
 */
 
/* Source File URL */
$remote_file_url = 'http://origin-server-url/files.zip';
 
/* New file name and path for this file */
$local_file = 'files.zip';
 
/* Copy the file from source url to server */
$copy = copy( $remote_file_url, $local_file );
 
/* Add notice for success/failure */
if( !$copy ) {
    echo "Doh! failed to copy $file...\n";
}
else{
    echo "WOOT! success to copy $file...\n";
}
?>

2. Using PHP FTP to move files from server to server

<?php
/**
 * Transfer (Import) Files Server to Server using PHP FTP
 * @link https://shellcreeper.com/?p=1249
 */
 
/* Source File Name and Path */
$remote_file = 'files.zip';
 
/* FTP Account */
$ftp_host = 'your-ftp-host.com'; /* host */
$ftp_user_name = 'ftp-username@your-ftp-host.com'; /* username */
$ftp_user_pass = 'ftppassword'; /* password */
 
 
/* New file name and path for this file */
$local_file = 'files.zip';
 
/* Connect using basic FTP */
$connect_it = ftp_connect( $ftp_host );
 
/* Login to FTP */
$login_result = ftp_login( $connect_it, $ftp_user_name, $ftp_user_pass );
 
/* Download $remote_file and save to $local_file */
if ( ftp_get( $connect_it, $local_file, $remote_file, FTP_BINARY ) ) {
    echo "WOOT! Successfully written to $local_file\n";
}
else {
    echo "Doh! There was a problem\n";
}
 
/* Close the connection */
ftp_close( $connect_it );
?>
