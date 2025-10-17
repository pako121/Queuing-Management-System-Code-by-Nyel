document.addEventListener("DOMContentLoaded", function () {
  
  //-------------------------------------------------//
  // --SSE REAL-TIME UPDATES - QUEUE SERVING DISPLAY--//
  //------------------------------------------------//
  const eventSource = new EventSource("http-sse.php"); // Connect to SSE endpoint
  const buttonsContainer = document.getElementById("buttons-row");
  const noTransactionsDiv = document.getElementById("no-transactions");

  // Handle SSE events
  eventSource.onmessage = function (event) {
    updateTransactions(JSON.parse(event.data));
  };

  eventSource.addEventListener("update_transaction_list", function (event) {
    updateTransactions(JSON.parse(event.data));
  });

  // Function to update DOM with new transaction data
  function updateTransactions(types) {
    if (!Array.isArray(types)) {
      console.error("Invalid transaction data:", types);
      if (noTransactionsDiv) noTransactionsDiv.style.display = "block";
      buttonsContainer.innerHTML = "";
      return;
    }

    buttonsContainer.innerHTML = "";

    if (types.length > 0) {
      if (noTransactionsDiv) noTransactionsDiv.style.display = "none";

      types.forEach(function (type) {
        const colDiv = document.createElement("div");
        colDiv.className = "w-full mt-6 px-2";

        const btn = document.createElement("a");
        btn.href = `index.php?page=display&id=${type.id}`;
        btn.className =
          "transaction-btn block bg-cyan-300 no-underline text-black rounded-lg p-6 shadow-md hover:bg-cyan-500 hover:shadow-lg transition-all duration-200 no-underline";
        btn.dataset.id = type.id;

        btn.innerHTML = `
      <div class="flex items-center justify-between no-underline">
        <span class="text-2xl font-medium no-underline">${type.name}</span>
        <i class="bi bi-arrow-right text-xl"></i>
      </div>
      <small class="text-black text-sm mt-2 block no-underline">Current Queue: ${
        type.current_queue || "N/A"
      }</small>
    `;

        colDiv.appendChild(btn);
        buttonsContainer.appendChild(colDiv);
      });
    } else {
      if (noTransactionsDiv) noTransactionsDiv.style.display = "block";
    }
  }

});
