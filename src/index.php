<?php include '../includes/header.php'; ?>

<body id="bs-background" class="w-screen h-screen">

  <header class="fixed top-0 w-full z-50 flex justify-between items-center">
    <div class="navbar bg-base-100 shadow-sm">
      <div class="navbar-start gap-2">
       <img src="../images/logo-queue.png" alt="Queue Logo" class="img-thumbnail border-0" id="queue-logo" width="50" height="50" />
        <h1 class="text-left text-2xl font-semibold mb-0">Queuing Management System</h1>

      </div>

      <div class="navbar-end gap-2">
        <button id="queueRegistrationButton"  class="btn btn-neutral">
          Go to Queue Registration
        </button>

        <butto id="loginButton" class="btn btn-primary">
          Login
        </butto>

      </div>
    </div>
  </header>
  <main class="py-30">

    <?php
    // If SSE is requested, include and exit
    if (isset($_GET['sse']) && $_GET['sse'] === '1') {
      include 'http-sse.php';
      exit;
    }

    // Define allowed pages
    $pages = [
      'home-selection' => 'home-selection.php',
    ];

    // Get requested page or default
    $page = $_GET['page'] ?? 'home-selection';
    $file = $pages[$page] ?? $pages['home-selection'];

    // Include if file exists
    if (file_exists($file)) {
      include $file;
    } else {
      echo '<div class="text-center text-red-600">Page not found.</div>';
    }

    ?>


  </main>


</body>

<script src="../src/js/sse.js"></script>

<?php include '../includes/footer.php'; ?>