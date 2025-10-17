<?php include '../includes/header.php'; ?>
<?php include_once '../database/config.php'; ?>

<main>
    <div class="overflow-auto p-4 w-[85%] mx-auto bg-white">
        <div class="w-full border-2 border-gray-200 p-4 mt-4">
            <h1 class="text-center text-[35px] font-medium mb-4 mt-4">Select Transaction Queue Serving Display</h1>
            <hr class="border-3 border-gray-300 mb-4" />

            <div id="transaction-buttons">
                <?php

                $transactionTypes = $connection->query("SELECT * FROM transaction_types WHERE transaction_status = 1 ORDER BY id ASC");

                if (!$transactionTypes) {
                    echo '<div class="text-center bg-red-100 text-red-700 p-4 rounded shadow">Error loading transaction types: ' . htmlspecialchars($connection->error) . '</div>';
                } elseif ($transactionTypes->num_rows > 0) {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-6" id="buttons-row">';

                    while ($row = $transactionTypes->fetch_assoc()) {
                        $id = htmlspecialchars($row['id']);
                        $name = htmlspecialchars(ucwords($row['transaction_name']));

                        echo '<div>';
                        echo '<a href="index.php?page=display-transaction&id=' . $id . '" 
                class="flex justify-between bg-cyan-300 text-black rounded-lg p-6 shadow-md hover:bg-cyan-500 hover:shadow-lg transition-all duration-200 transaction-btn no-underline"  
                data-id="' . $id . '">';

                        echo '<div class="flex items-center justify-between no-underline">';
                        echo '<span class="text-2xl font-medium no-underline">' . $name . '</span>';
                        echo '<i class="bi bi-arrow-right text-xl"></i>';
                        echo '</div>';

                        echo '<small class="text-black text-sm mt-2 no-underline">Queue: Loading...</small>';
                        echo '</a>';
                        echo '</div>';
                    }

                    echo '</div>';
                } else {
                    echo '<div id="no-transactions" class="text-center text-slate-500 p-4 hidden">
                No active transaction types found.
            </div>';
                }

                ?>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>