<?php
// server_pdf.php - generate CV PDF server-side using Dompdf
// Requires: composer require dompdf/dompdf
require 'vendor/autoload.php';
use Dompdf\Dompdf;

include 'config.php';

// Fetch profile and projects
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$projects = mysqli_query($conn, "SELECT * FROM portfolio ORDER BY id DESC");

// Build HTML for PDF
ob_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>CV - <?php echo htmlspecialchars($profile['name'] ?? ''); ?></title>
    <style>
        body {
            font-family: Arial;
            padding: 20px
        }

        .header {
            display: flex;
            gap: 20px;
            align-items: center
        }

        .header img {
            width: 120px;
            border-radius: 8px
        }

        h1 {
            margin: 0
        }

        section {
            margin-top: 16px
        }
    </style>
</head>

<body>
    <div class="header">
        <?php if (!empty($profile['photo'])): ?>
            <img src="<?php echo htmlspecialchars($profile['photo']) ?>">
        <?php endif; ?>
        <div>
            <h1><?php echo htmlspecialchars($profile['name'] ?? 'DIANTA DANISWARA PUTRA') ?></h1>
            <p><?php echo htmlspecialchars($profile['email'] ?? 'danisdiantra@gmail.com') ?></p>
        </div>
    </div>
    <section>
        <h2>Projects</h2>
        <?php while ($p = mysqli_fetch_assoc($projects)): ?>
            <div style="margin-bottom:12px">
                <strong><?php echo htmlspecialchars($p['title']) ?></strong>
                <div><?php echo htmlspecialchars($p['description']) ?></div>
            </div>
        <?php endwhile; ?>
    </section>
</body>

</html>
<?php
$html = ob_get_clean();

// instantiate and use dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('CV-' . date("Ymd") . '.pdf', ['Attachment' => 0]);
exit;
?>