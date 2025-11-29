<?php
include 'config.php';
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$projects = mysqli_query($conn, "SELECT * FROM portfolio ORDER BY id DESC");
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <title>CV - <?php echo htmlspecialchars($profile['name'] ?? ''); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="container cv">
        <div style="display:flex;gap:20px;align-items:center">
            <?php if (!empty($profile['photo'])): ?>
                <img src="<?php echo htmlspecialchars($profile['photo']) ?>" style="width:120px;border-radius:8px">
            <?php else: ?>
                <div style="width:120px;height:120px;background:#ccc;border-radius:8px"></div>
            <?php endif; ?>
            <div>
                <h1><?php echo htmlspecialchars($profile['name'] ?? 'DIANTA DANISWARA PUTRA') ?></h1>
                <p><?php echo htmlspecialchars($profile['email'] ?? 'danisdiantra@gmail.com') ?></p>
            </div>
        </div>
        <section>
            <h2>Projects</h2>
            <?php while ($p = mysqli_fetch_assoc($projects)): ?>
                <article>
                    <h3><?php echo htmlspecialchars($p['title']) ?></h3>
                    <p><?php echo htmlspecialchars($p['description']) ?></p>
                </article>
            <?php endwhile; ?>
        </section>
        <p><button onclick="window.print()">Download as PDF / Print</button> <a href="server_pdf.php" target="_blank"
                class="btn">Generate PDF (server-side)</a></p>
    </main>
</body>

</html>