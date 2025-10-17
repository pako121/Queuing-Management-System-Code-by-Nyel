  //------------------------------------------------//
  // -----------EVENT CLICKER NAVIGATION------------//
  //------------------------------------------------//
  const loginAndRegistration = document.getElementById("loginButton");
  const backButton = document.getElementById("backButton");
  const queueRegistration = document.getElementById("queueRegistrationButton");

  // login navigation
  if (loginAndRegistration) {
    loginAndRegistration.addEventListener("click", function () {
      this.innerHTML = "Loading...";
      this.disabled = true;
      window.location.href = "../admin/registration-queue.php";
    });
  }
  //back button
  if (backButton) {
    backButton.addEventListener("click", function () {
      this.innerHTML = "Loading...";
      this.disabled = true;
      window.location.href = "../src/index.php";
    });
  }
  //queue registration button
  if (queueRegistration) {
    queueRegistration.addEventListener("click", function () {
      this.innerHTML = "Loading...";
      this.disabled = true;
      window.location.href = "../admin/queue-serving-registration.php";
    });
  }