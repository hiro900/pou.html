use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to PHPMailer autoloader

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Set Gmail credentials
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com'; // Your Gmail address
$mail->Password = 'your_password'; // Your Gmail password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set email content
$mail->setFrom('your_email@gmail.com'); // Your Gmail address
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body = $message;

// Send email
if ($mail->send()) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
