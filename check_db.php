<?php
// Cek database yang ada di PostgreSQL
try {
    $pdo = new PDO(
        'pgsql:host=127.0.0.1;port=5432',
        'postgres',
        'password'
    );

    $result = $pdo->query("SELECT datname FROM pg_database WHERE datistemplate = false ORDER BY datname");
    $databases = $result->fetchAll(PDO::FETCH_COLUMN);

    echo "📊 Database yang tersedia di PostgreSQL:\n";
    echo "=====================================\n";
    foreach ($databases as $db) {
        echo "  • $db\n";
    }

} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
?>